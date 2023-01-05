<?php
    session_start();

  function calcCart()
  {
    $price = 0;
    if(!isset($_SESSION['MEGRENDELESEK']) || empty($_SESSION['MEGRENDELESEK'])) return $price; 
    else {
      foreach ($_SESSION['MEGRENDELESEK'] as $i => $megrendeles) {  
        $price += ($megrendeles['ar'] * $megrendeles['mennyiseg']);
      }
    }
    return $price;
  }
    ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Ízörzők cukrászda </title>

    <!-- CSS -->
    <link rel="stylesheet" href="../style/navbar_style.css">
    <link rel="stylesheet" href="../style/footer_style.css">
    <link rel="stylesheet" href="../style/display_style.css">
    <link rel="stylesheet" href="../style/cart_contents_style.css">
    <link rel="stylesheet" href="../style/order_page.css">
    <link rel="stylesheet" href="../style/succesfull-order.css">
    <link rel="stylesheet" href="../style/registration_style.css">
    

    <!-- SCRIPT -->
    <script src="../assets/js/main.js"></script>
    
</head>
<body>
    <div class="navbar">
        <nav>
            <ul>
                <img src="../kepek/logo.png" alt="logo" title="logo" id="logo">
                <a href="index.php"><li>Főoldal</li></a>
                <a href="index.php#debut"><li>Rólunk</li></a>
                <a href="index.php#opening"><li>Nyitvatartás</li></a>
                <a href="cart_contents.php"><li id="navbar-cart">Kosár: <?php echo calcCart();?> Ft</li></a>
                <!-- <a href="../functions/clearCart.php"><li>Kosár törlése</li></a> -->
                <!-- <li>Kosár megtekintése</li></a>-->
                <a href="login.php"><li>Belépés</li></a>
                <a href="registration.php"><li>Regisztráció</li></a>
            </ul>
        </nav>
    </div>
