
<?php
    if(isset($_GET['name']) && isset($_GET['email'])) {
        echo "<h1>De ingevulde gegevens zijn:</h1>";
        echo "<p>Naam: ".$_GET['name']."</p>";
        echo "<p>Emailadres: ".$_GET['email']."</p>";
    } else {
        echo "<h1>Geen gegevens ontvangen</h1>";
    }
?>

