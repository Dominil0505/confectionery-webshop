<?php 
require_once("../sys/dbh.class.php"); 
session_start();

// adatok mentése adatbázisba
class SuccesfullOrder extends DBh{

    private $orderId;

    public function generateKey()
    {
        $keyLenght = 20;
        $str = 'asdfghjklqwertzuiopyxcvbnm1234534563465346234';
        $randstr = substr(str_shuffle($str), 0, $keyLenght);
        return $randstr;
    }

    public function saveOrderData()
    {
        $nev = $_POST['nev'];
        $tel = $_POST['telszam'];
        $irsz = $_POST['irszam'];
        $telepules = $_POST['telepules'];
        $utca = $_POST['utcanev'];
        $hazszam = $_POST['hazszam'];
        $megjegyzes = htmlspecialchars($_POST['megjegyzes']);

        $rend_datum = date("Y-m-d H:i:s");
        $vevoCim = $irsz.' '.$telepules.' '.$utca.' '.$hazszam;
        $this->orderId = $this->generateKey();

        $sql = "INSERT INTO tbl_orderdata(rend_datum, vevo_nev, vevo_tel, vevo_cim, order_id, megjegyzes) 
        VALUES (?,?,?,?,?,?)";

        $stmt = parent::connect()->prepare($sql);
        $stmt->execute([$rend_datum, $nev, $tel, $vevoCim, $this->orderId, $megjegyzes]);
   }

   public function saveOrderItems(){
       

    foreach ($_SESSION['MEGRENDELESEK'] as $i => $megrendeles)
    {
        $mennyiseg = $megrendeles['mennyiseg'];
        $nev = $megrendeles['nev'];
        $this->orderId;

        $sql = "INSERT INTO tbl_orderitems(order_id, etel_nev, mennyiseg) VALUES (?,?,?)";
        $stmt = parent::connect()->prepare($sql);
        $stmt->execute([$this->orderId, $nev, $mennyiseg]);
    }
   }
}

$succesfullOrder = new SuccesfullOrder;
$succesfullOrder->saveOrderData();
$succesfullOrder->saveOrderItems();

header("location:../pages/succesfull_order.php");
exit;

?>
