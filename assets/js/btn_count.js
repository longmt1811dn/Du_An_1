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

// parseInt(count);
// count = 1;
// function tru() {
//   takevalue();
//   if (count > 1) {
//     count--;
//     document.getElementById("cart__count").value = count;
//   }
// }

// function cong() {
//   takevalue();
//   count++;
//   document.getElementById("cart__count").value = count;
//   setmaxvalue();
// }

// function takevalue() {
//   if (count != document.getElementById("cart__count").value) {
//     count = document.getElementById("cart__count").value;
//   }
// }
// function setmaxvalue() {
//   if (count > 100) {
//     count = 99;
//     count = document.getElementById("cart__count").value = count;
//   }
// }
