function setCookie(name, value, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires=" + d.toUTCString();
  document.cookie = name + "=" + value + ";" + expires + ";path=/";
}
window.setCookie = setCookie;

function setLocalStorage(name, value) {
  localStorage.setItem(String(name), String(value))
}
window.setLocalStorage = setLocalStorage;

// GETTERS
function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
window.getCookie = getCookie

function getLocalStorage(name) {
  localStorage.getItem(String(name))
}
window.getLocalStorage = getLocalStorage

// HANDLERS
function checkCookieAndRedirect() {
  var user = getCookie("username");
  if (user != "") {
    alert("Usuário já esta autheticado! " + user);
    window.location.href = "http://localhost/web/public/home.php";
  } else {
    alert("Bem vindo!")
  }
}

function clearCookie(cname) {
  document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  document.cookie = "user_id=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}
