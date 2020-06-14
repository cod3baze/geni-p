var getCookie = window.getCookie

function isAuthenticated() {
  const user_id = getCookie("user_id")
  const username = getCookie("username")

  // Se não estiver autenticado: -> initial.php
  if ((!user_id || user_id === "") && (!username || username === "")) {
    return window.location.href = "http://localhost/web/public/initial.php"
  } else {
    // window.location.href = "http://localhost/web/public/home.php"
    return;
  }
}
window.isAuthenticated = isAuthenticated
