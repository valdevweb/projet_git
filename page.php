<?php
$fichier=fopen('compteur.txt','r+');
$compteur=fgets($fichier);
$compteur ++;
echo 'nombre de rafraichissement : ' . $compteur;
fseek($fichier,0);
fputs($fichier,$compteur);
fclose($fichier);
?>