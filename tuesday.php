<?php
/***
 * 1/ Lire le fichier message.txt (utiliser file_get_contents() => voir la doc php)
 * 
 * 2/ remplacer [PRENOM] par votre prénom
 * 
 * 3/   afficher le resultat
 * 
 */

 $message = file_get_contents('message.txt');
 $message = str_replace('[PRENOM]', 'Thomas', $message);
 echo $message;