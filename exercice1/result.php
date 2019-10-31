<?php
function isVoyelle($lettre)
{
  $voyelle = false;

  if (
    (is_string($lettre) == true ) &&
    (strlen($lettre)==1))
    strtoupper($lettre);
   {

    if (
    ($lettre == 'a') ||
    ($lettre == 'e') || 
    ($lettre == 'i') || 
    ($lettre == 'o') || 
    ($lettre == 'u')  
    ) {
    $voyelle = true;
    } else {
      $voyelle = false;
    }

  }

  return($voyelle);
}
// deuxieme exercice supprimer les voyelles


function supprimerVoyelles($chaine)
{
  $chaine_reponse = "";

  for($i=0; $i<strlen($chaine); $i++) {
    $lettre = $chaine[$i];
    
    if (!isVoyelle($lettre)) {
      $chaine_reponse = $chaine_reponse . $lettre;
    }
  }

  return($chaine_reponse);
}


//3 eme exercice 
//mes fonctions 
/*function supprimerVoyelles($chaine){

}

function maLettreAsupprimer($lettre, $lettres_a_supprimer){
  $unelettreasupprimer = false;
}


function supprimerLettre($chaine, $lettres_a_supprimer){
  $chaine_reponse ="";
  for($i=0; $i<strlen($chaine); $i++) {
    $lettre = $chaine[$i];
}
    if(!lettre_a_supprimer($lettre, $lettres_a_supprimer))

*/

