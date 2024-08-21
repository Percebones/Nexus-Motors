
<?php
session_start(); // Faz o óbvio

session_unset(); // Remove todas as variáveis

session_destroy(); // Faz o óbvio

header("Location: visitante.php"); // Faz o óbvio
exit; // Também óbvio
?>
