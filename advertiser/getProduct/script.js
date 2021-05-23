$(document).ready(function() {
    var url_string = window.location.href;
    var url = new URL(url_string);
    var alias = url.searchParams.get("alias");

    $(".l-quantity-div").submit(function(e) {
        e.preventDefault();
        var quantity = $("#quantity").val();
        var price = $("#price").val();
        $.ajax({
            type: "POST",
            url: "/advertiser/getProduct/control/assign.php",
            data: { quantity: quantity, alias: alias, price: price },
            dataType: "text",
            success: function(response) {
                if (response != "Failed") {
                    window.location.href = "/advertiser/advertise/index.php?transactionToken=" + response + "";

                }

            }
        });

    });

});