function isReturnInMain() {
  const user_id = getCookie("user_id")
  const username = getCookie("username")

  // Se não estiver autenticado: -> initial.php
  if ((user_id || user_id !== "") && (username || username !== "")) {
    return window.location.href = "http://localhost/web/public/initial.php"
  }
}
isReturnInMain()
