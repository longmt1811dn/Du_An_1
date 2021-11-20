var pass = document.getElementById("switch__forgot_pass");
var back = document.getElementById("switch__login");
var formLogin = document.getElementById("form_login");
var formForgotPass = document.getElementById("form_pass");

console.log(pass);
console.log(formForgotPass);

pass.onclick = () => {
  formLogin.style.opacity = 0;
  formLogin.style.visibility = "hidden";
  formLogin.style.height = 0;

  formForgotPass.style.opacity = 1;
  formForgotPass.style.height = "100%";
  formForgotPass.style.visibility = "visible";
};

back.onclick = () => {
  formForgotPass.style.opacity = 0;
  formForgotPass.style.visibility = "hidden";
  formForgotPass.style.height = 0;

  formLogin.style.opacity = 1;
  formLogin.style.height = "100%";
  formLogin.style.visibility = "visible";
};
