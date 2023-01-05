<?php 
require_once("../sys/dbh.class.php");
include('navbar.php');

class CartContents extends Dbh
{

    public function printCartContents(){
        echo '<div id="kosar-tartalma">';
        if(!isset($_SESSION['MEGRENDELESEK']) || empty($_SESSION['MEGRENDELESEK'])){echo '<h1 style="text-align: center;">A kosár üres! Rendeljen valamit!</h1>';}
        else {
                echo '<h1 id="elso">Kosár tartalma</h1>
                    <h2 class="masodik">Kosár tartalma</h2>';
                echo '<div class="termek">Termék</div>
                    <div class="ar">Ár</div><br>
                    <hr>';
                
                foreach ($_SESSION['MEGRENDELESEK'] as $i => $megrendeles)
                {
                    echo '<div class="kosar-tartalma-rendezes">';
                    echo '<span class="kosar-tartalma-nev">'.$megrendeles['nev'].'</span>';
                    echo '<span class="kosar-tartalma-ar"><label>'.$megrendeles['ar'].' Ft<input type="hidden" value="'.$megrendeles['ar'].'" class="ar"></label></span>';
                    echo '<hr>';
                    echo '</div>';
                }

                echo '<span id="kosar-tartalma-osszesen">Összesen:  '.calcCart().' FT</span> <br>';
                echo '<a href="../functions/clearCart.php"><li>Kosár törlése</li></a>';

                    echo '<h2 class="masodik">Szállítási mód</h2>

                        <label><input type="radio" name="jelolo" required >Házhozszállítás-utánvét: 500Ft</label>

                    <h2 class="masodik">Rendelési információ</h2>
                        <p>Cukrászdánk <span class="kiemeles">csak Kecskemét</span> területén belül szállít rendeléseket!</p>
                        <p style="text-align:justify;">A rendeléseket a nap 24 órájában fogadjuk. Megrendelését a következő napon nyitvatartási időben szállítjuk.
                        Lehetőség van a rendelés szállításának pontos idejét megadni (csak nyitvatartási időben). Amennyiben szeretné megadni a szállítás pontos időpontját kérjük
                        a <span class="kiemeles">"megjegyzés" rovatban jelezze.</span> Megértésüket előre is köszönjük! </p>';
            echo '<a href="order_page.php" id="next-button">Tovább az adatokhoz</a>';
        }
        echo '</div>';
    }
}

    $cartContents = new CartContents;
    $cartContents->printCartContents();

include('footer.php');
?>
