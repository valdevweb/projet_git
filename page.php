<?php
$fichier=fopen('compteur.txt','r+');
$compteur=fgets($fichier);
echo 'nombre de rafraichissement : ' . $compteur;
fclose($fichier);
?>