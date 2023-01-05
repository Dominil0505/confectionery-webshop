<?php 

include('navbar.php');

echo '<div id="main">';
    echo '<div class="masodik">';
      echo '<h2>Sütemények</h2>';
    echo '</div>';

    include('filter.php');

    echo '<div id="tablazat">';
    echo '</div>';
    
    echo '<div id="bevezeto">';

    echo '<div id="debut">';
        echo '<h1><u>Rólunk</u></h1>';
        echo '<p>Több mint 10 éve készítünk saját kezűleg cukrászsüteményeket. Mint 10 éve is a fő célunk változatlan.  Szeretnénk az emberek életébe visszahozni a mára már feledésbe merült régi ízeket, gyermekkorunk ízvilágát. Mindezt minőségi alapanyagok és adalékanyagok felhasználása nélkül tesszük. </p>';
        echo '<p>Egy olyan szolgáltatást kínálunk amely lehetőséget ad arra hogy otthonról kényelmesen megrendeld kedvenc süteményeidet. Növekvő kínálatunkban talál megfelelő édességet születésnapi bulikra, baráti összejövetelekre vagy csak egy esti nassoláshoz is. </p>';
    echo '</div>';

    echo '<div id="opening">';
        echo '<h3><u> Nyitvatartás </u></h3>';
        echo '<h4> Hétfő - Csütörtök </h4>';
        echo '<h5> 8:00 - 22:00 </h5>';
        echo '<h4> Péntek </h4>';
        echo '<h5> 8:00 - 23:00 </h5>';
        echo '<h4> Szombat </span>';
        echo '<h5> 9:00 - 23:00 </h5>';
        echo '<h4> Vasárnap </span>';
        echo '<h5> 9:00 - 22:00 </h5>';
    echo '</div>';


echo '<script>';
    echo 'filter("osszes")';
echo '</script>';
include('footer.php');


// Készítette Král Zsombor, Bekő Virág, Szabó Dominik
?>
