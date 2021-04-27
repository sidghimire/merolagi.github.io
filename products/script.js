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
