var count = document.getElementById("cart__count");
var price = Number(document.getElementById("cart__price").innerText);

var countValue = count.value;
var total = 0;

function total_price(count, price) {
  return (document.getElementById("cart__total").innerText = count * price);
}
