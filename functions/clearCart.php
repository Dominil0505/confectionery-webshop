<?php
// kosár törlése

session_start();
unset($_SESSION['MEGRENDELESEK']);

header("location:../pages/cart_contents.php");
exit;
?>
