<?php
require_once ("result.php");

echo " \n";
echo "Test isVoyelle\n";
echo " \n";
$malettre = 'a';
echo "Lettre: " . $malettre . "=" . isVoyelle($malettre) . "\n";

$malettre = 'b';
echo "Lettre: " . $malettre . "=" . isVoyelle($malettre) . "\n";

$malettre = 'c';
echo "Lettre: " . $malettre . "=" . isVoyelle($malettre) . "\n";

$malettre = 'A';
echo "Lettre: " . $malettre . "=" . isVoyelle($malettre) . "\n";

$malettre = 'E';
echo "Lettre: " . $malettre . "=" . isVoyelle($malettre) . "\n";

$malettre = true;
echo "Lettre: " . $malettre . "=" . isVoyelle($malettre) . "\n";

$malettre = false;
echo "Lettre: " . $malettre . "=" . isVoyelle($malettre) . "\n";

$malettre = 0;
echo "Lettre: " . $malettre . "=" . isVoyelle($malettre) . "\n";

$malettre = 1;
echo "Lettre: " . $malettre . "=" . isVoyelle($malettre) . "\n";

$malettre = 2;
echo "Lettre: " . $malettre . "=" . isVoyelle($malettre) . "\n";

$malettre = 'bonjour';
echo "Lettre: " . $malettre . "=" . isVoyelle($malettre) . "\n";

echo " \n";