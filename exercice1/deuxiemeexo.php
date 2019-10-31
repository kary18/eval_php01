<?php
require_once ("result.php");
echo "Test numero 2 supprimerVoyelles\n";
echo " \n";

$chaine_test = 'bonjour';
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = 'hello world';
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = 'eau';
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";


$chaine_test = 0;
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = 1;
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = 2;
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = 42;
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = true;
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = false;
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";
