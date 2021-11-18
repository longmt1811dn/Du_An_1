var minus = document.getElementById("cart__minus");
var plus = document.getElementById("cart__plus");
var count = document.getElementById("cart__count");

var giamSL = count.previousElementSibling;
// console.log(giamSL);

var tangSL = count.nextElementSibling;
// console.log(tangSL);

function demo1(btn, type) {
  btn.onclick = function () {
    var text =
      type == "tang"
        ? Number(count.innerText) + 1 + ""
        : Number(count.innerText) >= 1
        ? Number(count.innerText) - 1 + ""
        : "0";

    // if (type == "tang") {
    //   var text = Number(count.innerText) + 1 + "";
    // } else {
    //   var text =
    //     Number(count.innerText) >= 1 ? Number(count.innerText) - 1 + "" : "0";
    // }
    count.innerText = text;
    countValue = Number(count.innerText);
    total_price(countValue, price);
  };
}

demo1(tangSL, "tang");
demo1(giamSL, "giam");
