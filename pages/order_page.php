<?php 
include('navbar.php');

    echo '
        <h1 id="elso">Rendelés</h1>
        <h1 class="second">Szállítási adatok</h1>
        <div id="rendeles-div">
            <form id="rendeles-form" method="post" action="../functions/save_data.php">
                Teljes név*<br><label> <input type="text" name="nev" class="rendeles-input" required placeholder="pl.: Kovács István"></label><br>
                Telefonszám*<br><label><input type="tel" name="telszam" maxlength="11" class="rendeles-input" minlength="11" required placeholder="pl.: 06201234567"></label><br>
                Irányítószám*<br><label> <input type="number" name="irszam" minlength="4" maxlength="4" class="rendeles-input" required placeholder="pl.: 2022"></label><br>
                Település*<br><label> <input type="text" name="telepules" class="rendeles-input" required placeholder="pl.: Kecskemét"></label><br>
                Utca* <br><label><input type="text" name="utcanev" class="rendeles-input" required placeholder="pl.: Izsáki út"></label><br>
                Házszám* <br><label><input type="text" name="hazszam" min="0" class="rendeles-input" required placeholder="pl.: 8"></label><br>
                <h2 class="second">Megjegyzés</h2>
                <h2>Megjegyzés a rendeléshez</h2>
                <textarea rows="5" cols="60" name="megjegyzes" id="rendeles-megjegyzes"></textarea><br>
                <button id="order-button" type="submit"> Rendelés </button>
            </form>
        </div>';

include('footer.php');
?>
