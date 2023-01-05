<?php
require_once("../sys/dbh.class.php");

class Display extends Dbh{

  public function lekerd($str){
    $sql = $str;
    $stmt = parent::connect()->prepare($sql);
    $stmt->execute();
    $this->kiir($stmt->fetchALL());
  }

  public function kiir($data)
  {
    echo '<div id="outer-div">';
    foreach ($data as $key => $value) {
      echo '<div class="cakes-div">';
        echo '<img src="../kepek/'.$value['kep'].'" class="cookies-pict"> <br>';
        echo 'Név: '.$value['etel_nev'].'<br>';
        echo '<b>Ár: '.$value['ar'].'</b><br>';
        echo '<a href="../functions/cart.php?id=' . $value['etel_id']. '"><button class="cart-button"> Kosárba </button></a>';
      echo '</div>';
    }
    echo '</div>';
    echo '</div>';
  }
}

$display = new Display;

$var = $_GET['szures'];
switch ($var) {
  case 'glutenmentes': 
    $query = "SELECT * FROM tbl_food WHERE glutenmentes = 1";
    $display->lekerd($query);
    break;
  case 'laktozmentes':
    $query = "SELECT * FROM tbl_food WHERE laktozmentes = 1";
    $display->lekerd($query);
    break;
  case 'tojasmentes':
    $query = "SELECT * FROM tbl_food WHERE tojasmentes = 1";
    $display->lekerd($query);
    break;
  case 'cukormentes':
    $query = "SELECT * FROM tbl_food WHERE cukormentes = 1";
    $display->lekerd($query);
    break;
  default:
    $query =  "SELECT * FROM tbl_food";
    $display->lekerd($query);
    break;
}

?>