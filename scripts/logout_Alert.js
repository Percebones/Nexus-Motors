function logout() {
  let confirmLogout = confirm("Tem certeza de que deseja sair?");
  if (confirmLogout == true) {
    window.location.href = "logout.php";
  } else {
    alert("Logout cancelado!");
  }
}
