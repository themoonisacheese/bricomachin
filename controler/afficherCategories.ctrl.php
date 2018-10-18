<?php
    // Controleur permettant d'afficher la liste des catégories

    // Inclusion du modèle
    include_once("../model/DAO.class.php");

    $categories = $dao->getAllCat();
    include_once("../view/categories.view.php");

      if (isset($_GET["ref"])){
        $articles= getN($_GET["ref"],12);
      }else{
        $articles= firstN(12);
      }

    ?>
