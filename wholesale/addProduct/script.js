$(document).ready(function () {
  $(".bi-plus").on("click", function () {
    var quantity = $(".quantity-counter").text();
    quantity = parseInt(quantity);
    quantity = quantity + 1;
    $(".quantity-counter").text(quantity);
  });
  $(".bi-dash").on("click", function () {
    var quantity = $(".quantity-counter").text();
    quantity = parseInt(quantity);
    if (quantity != 0) {
      quantity = quantity - 1;
      $(".quantity-counter").text(quantity);
    }
  });
  var i = 1;
  $(".addmore").on("click", function () {
    i++;
    $("#l-product-feature-title").append(
      '<select id="feature-title-' +
        i +
        '" name="featureTitle[]" class="row l-additional-info-label property-value-div l-top-remove-' +
        i +
        '" style="padding: 6px;"><option value="Material">Material</option> <option value="Size">Size</option> </select>'
    );
    $("#l-product-feature-value").append(
      '<span class="row d-flex property-value-div" id="l-top-remove-' +
        i +
        '"> <input type="text" name="featureValue[]" id="feature-value-' +
        i +
        '" placeholder="Value" class="l-additional-info-label margin-30-res" style="color: black; width:40%"> <span id="remove-feature-' +
        i +
        '" class="btn btn-warning l-remove-btn-class" style="font-size:10px; width:30%;margin-inline:10px">Remove</span> </span>'
    );
  });

  $(document).on(
    "click",
    ".property-value-div .l-remove-btn-class",
    function () {
      var id = $(this).attr("id");
      id = id.replace("remove-feature-", "");
      var id1 = "#feature-title-" + id;
      var id2 = "#l-top-remove-" + id;
      $(id1).remove();
      $(id2).remove();
    }
  );
});
