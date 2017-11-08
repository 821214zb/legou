// user
var user_Boolean = false;
var password_Boolean = false;
var varconfirm_Boolean = false;
var emaile_Boolean = false;
var Mobile_Boolean = false;
$('#form-account').blur(function(){
  if ((/^[a-z0-9_-]{4,8}$/).test($("#reg_user").val())){
    $('.user_hint').html("✔").css("color","green");
    user_Boolean = true;
  }else {
    $('.user_hint').html("×").css("color","red");
    user_Boolean = false;
  }
});
// password
$('#form-pwd').blur(function(){
  if ((/^[a-z0-9_-]{6,16}$/).test($("#form-pwd").val())){
    $('.password_hint').html("✔").css("color","green");
    password_Boolean = true;
  }else {
    $('.password_hint').html("×").css("color","red");
    password_Boolean = false;
  }
});


// password_confirm
$('#form-equalTopwd').blur(function(){
  if (($("#form-pwd").val())==($("#form-equalTopwd").val())){
    $('.confirm_hint').html("✔").css("color","green");
    varconfirm_Boolean = true;
  }else {
    $('.confirm_hint').html("×").css("color","red");
    varconfirm_Boolean = false;
  }
});


// Email
$('#form-account').blur(function(){
  if ((/^[a-z\d]+(\.[a-z\d]+)*@([\da-z](-[\da-z])?)+(\.{1,2}[a-z]+)+$/).test($("#form-account").val())){
    $('.email_hint').html("✔").css("color","green");
    emaile_Boolean = true;
  }else {
    $('.email_hint').html("×").css("color","red");
    emaile_Boolean = false;
  }
});
// Mobile
$('#form-phone').blur(function(){
  if ((/^1[34578]\d{9}$/).test($("#form-phone").val())){
    $('.mobile_hint').html("✔").css("color","green");
    Mobile_Boolean = true;
  }else {
    $('.mobile_hint').html("×").css("color","red");
    Mobile_Boolean = false;
  }
});


// click
$('.red_button').click(function(){
  if(user_Boolean && password_Boolea && varconfirm_Boolean && emaile_Boolean && Mobile_Boolean == true){
    alert("注册成功");
  }else {
    alert("请完善信息");
  }
});
