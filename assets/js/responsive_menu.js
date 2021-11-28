var accountButton = document.querySelector("#header__user-account");
var accountBox = document.querySelector("#account__box");
var closeAccountBox = document.querySelectorAll(".close__account-box");

var menu = document.querySelector("#open__menudropdown");
var menuBox = document.querySelector("#mobile__menu-dropdown");

accountButton.addEventListener("click", () => {
  accountBox.classList.add("open");
});

closeAccountBox[0].addEventListener("click", () => {
  accountBox.classList.remove("open");
});

menu.addEventListener("click", () => {
  menuBox.classList.add("open");
});

closeAccountBox[1].addEventListener("click", () => {
  menuBox.classList.remove("open");
});
