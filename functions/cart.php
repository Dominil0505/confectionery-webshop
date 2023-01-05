<?php
require_once("../sys/dbh.class.php");
session_start();  // elkezdödik a session


class Cart extends Dbh
{

  public $sor;

  public function getPrice()
  {
    $sql = "SELECT * FROM tbl_food WHERE etel_id = ?";
    $stmt = parent::connect()->prepare($sql);
    $stmt->execute([$_GET['id']]);
    $this->sor = $stmt->fetch();
  }
}

$cart = new Cart;
$cart->getPrice();

$toAdd = [
  "termekID" => $_GET['etel_id'],
  "nev" => $cart->sor['etel_nev'],
  "ar" => $cart->sor['ar'],
  "kep" => $cart->sor['kep'],
  "mennyiseg" => 1
  ];

if(!isset($_SESSION['MEGRENDELESEK'])) $_SESSION['MEGRENDELESEK'] = [];  

array_push($_SESSION['MEGRENDELESEK'], $toAdd ); 

header("location:../pages/index.php");
exit;
