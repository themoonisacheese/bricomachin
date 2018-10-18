<?php
// Test de la classe DAO
require_once('DAO.class.php');

// Recupère toutes les catégories
$ref = 60040351;
echo "la reference apres $ref est " . $dao->next($ref) ;

 ?>
