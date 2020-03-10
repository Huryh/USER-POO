<?php require_once '../src/Guerrier.php';?>
<?php require_once '../src/Mage.php';?>

<h1>Personnages</h1>
    <h2>Guerrier</h2>
<?php

$Guerrier = new Guerrier(40);
$autreGuerrier = new Guerrier(55, 60);

// interface Fluide Guerrier //
$Guerrier
    ->setHealth(150)
    ->setStrength(55);
var_dump($Guerrier->getHealth());
var_dump($autreGuerrier->getHealth());

?>

<h3>Mage</h3>

<?php

$Mage = new Mage (50);
$autreMage = new Mage (50 , 60);

//Interface Fluide Mage //
$Mage
    ->setHealth(120)
    ->setIntelligence(80);
var_dump($Mage->getHealth());
var_dump($autreMage->getHealth());
?>