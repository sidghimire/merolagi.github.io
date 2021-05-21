$(document).ready(function() {
    $(".bi-plus").on("click", function() {
        var quantity = $(".quantity-counter").text();
        quantity = parseInt(quantity);
        quantity = quantity + 1;
        $(".quantity-counter").text(quantity);
    });
    $(".bi-dash").on("click", function() {
        var quantity = $(".quantity-counter").text();
        quantity = parseInt(quantity);
        if (quantity != 0) {
            quantity = quantity - 1;
            $(".quantity-counter").text(quantity);
        }
    });
    var i = 1;
    $(".addmore").on("click", function() {
        i++;
        $("#l-product-feature-title").append(
            '<select id="feature-title-' +
            i +
            '" name="featureTitle[]" required class="row property-value-div l-dynamic-field1 l-top-remove-' +
            i +
            '" style="padding: 6px;"><option value="Material">Material</option> <option value="Size">Size</option> </select>'
        );
        $("#l-product-feature-value").append(
            '<span class="row d-flex property-value-div2" id="l-top-remove-' +
            i +
            '"> <input type="text" name="featureValue[]" required id="feature-value-' +
            i +
            '" placeholder="Value" class="property-value-div l-dynamic-field2" style="color: black; width:40%"> <span id="remove-feature-' +
            i +
            '" class="btn btn-warning l-remove-btn-class" style="">Remove</span> </span>'
        );
    });

    $(document).on(
        "click",
        ".property-value-div2 .l-remove-btn-class",
        function() {
            var id = $(this).attr("id");
            id = id.replace("remove-feature-", "");
            var id1 = "#feature-title-" + id;
            var id2 = "#l-top-remove-" + id;
            $(id1).remove();
            $(id2).remove();
        }
    );
    $("#primaryImage").change(function(event) {
        var img = document.getElementById("primaryOutput");
        img.src = URL.createObjectURL(event.target.files[0]);
    });
    $("#secondaryImage").change(function(event) {
        $(".l-secondary-image-div").remove();
        var img;
        var numOfFiles = event.target.files.length;
        for (var i = 0; i < numOfFiles; i++) {
            $(".l-secondary-image-container").append('<div class="col-4 l-secondary-image-div"><img src="' + URL.createObjectURL(event.target.files[i]) + '" class="w-100 secondary-images secondary-img-' + i + '"alt=""></div>');

        }
    });

    $("#submitForm").submit(function(e) {
        e.preventDefault();
        var fd = new FormData();

        var title = $("#productName").val();
        var price = $("#price").val();
        var quantity = $("#quantity").val();
        var category = $("#category").val();
        var description = $("#description").val();
        var primaryImage = $("#primaryImage")[0].files;
        var secondaryImage = $("#secondaryImage")[0].files;

        var featureTitle = document.getElementsByName("featureTitle[]");
        var featureValue = document.getElementsByName("featureValue[]");


        for (var j = 0; j < secondaryImage.length; j++) {
            fd.append('secondaryImage[]', secondaryImage[j]);
        }
        for (var j = 0; j < featureValue.length; j++) {
            fd.append('featureTitle[]', featureTitle[j].value);
            fd.append('featureValue[]', featureValue[j].value);
        }
        fd.append('title', title);
        fd.append('price', price);
        fd.append('quantity', quantity);
        fd.append('category', category);
        fd.append('description', description);
        fd.append('primaryImage', primaryImage[0]);
        $.ajax({
            type: "POST",
            url: "./control/add.php",
            processData: false,
            contentType: false,
            data: fd,
            success: function(response) {
                console.log(response);
            }
        });
    });
});