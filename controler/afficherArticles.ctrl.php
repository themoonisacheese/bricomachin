<?php
    // Partie principale

    // Inclusion du modèle
    include_once("../model/DAO.class.php");

    ///////////////////////////////////////////////////////
    //  A COMPLETER
    ///////////////////////////////////////////////


    $articles = unserialize('a:12:{i:0;O:7:"Article":5:{s:3:"ref";s:8:"54331060";s:7:"libelle";s:40:"Marteau de vitrier métal STANLEY 0.32kg";s:9:"categorie";s:2:"24";s:4:"prix";s:4:"24.1";s:5:"image";s:12:"54331060.jpg";}i:1;O:7:"Article":5:{s:3:"ref";s:8:"54331172";s:7:"libelle";s:41:"Maillet de menuisier bois STANLEY 0.116kg";s:9:"categorie";s:2:"24";s:4:"prix";s:4:"25.6";s:5:"image";s:12:"54331172.jpg";}i:2;O:7:"Article":5:{s:3:"ref";s:8:"54331193";s:7:"libelle";s:42:"Maillet plastique plastique STANLEY 0.32kg";s:9:"categorie";s:2:"24";s:4:"prix";s:4:"28.9";s:5:"image";s:12:"54331193.jpg";}i:3;O:7:"Article":5:{s:3:"ref";s:8:"54670434";s:7:"libelle";s:40:"Marteau De tapissier bois STANLEY 0.14kg";s:9:"categorie";s:2:"24";s:4:"prix";s:4:"21.3";s:5:"image";s:12:"54670434.jpg";}i:4;O:7:"Article":5:{s:3:"ref";s:8:"60040351";s:7:"libelle";s:47:"Clé 6 pans en acier forgé FACOM, 1.5 à 10 mm";s:9:"categorie";s:2:"11";s:4:"prix";s:4:"27.5";s:5:"image";s:12:"60040351.jpg";}i:5;O:7:"Article":5:{s:3:"ref";s:8:"60752482";s:7:"libelle";s:38:"Clé à molette en acier forgé, 25 mm";s:9:"categorie";s:2:"11";s:4:"prix";s:3:"7.8";s:5:"image";s:12:"60752482.jpg";}i:6;O:7:"Article":5:{s:3:"ref";s:8:"60810764";s:7:"libelle";s:42:"Applique tableau Louvre, doré, 2x20 watts";s:9:"categorie";s:1:"7";s:4:"prix";s:4:"42.0";s:5:"image";s:12:"60810764.jpg";}i:7;O:7:"Article":5:{s:3:"ref";s:8:"61019994";s:7:"libelle";s:33:"Clé 6 pans en acier forgé FACOM";s:9:"categorie";s:2:"11";s:4:"prix";s:4:"29.9";s:5:"image";s:12:"61019994.jpg";}i:8;O:7:"Article":5:{s:3:"ref";s:8:"61020225";s:7:"libelle";s:46:"Clé à pipe en acier forgé FACOM, 8 à 13 mm";s:9:"categorie";s:2:"11";s:4:"prix";s:4:"57.0";s:5:"image";s:12:"61020225.jpg";}i:9;O:7:"Article":5:{s:3:"ref";s:8:"61414542";s:7:"libelle";s:42:"Clé mixte en chrome vanadium, 10 à 26 mm";s:9:"categorie";s:2:"11";s:4:"prix";s:4:"15.2";s:5:"image";s:12:"61414542.jpg";}i:10;O:7:"Article":5:{s:3:"ref";s:8:"61414640";s:7:"libelle";s:38:"Clé mixte en acier forgé, 6 à 19 mm";s:9:"categorie";s:2:"11";s:4:"prix";s:3:"2.9";s:5:"image";s:12:"61414640.jpg";}i:11;O:7:"Article":5:{s:3:"ref";s:8:"61727995";s:7:"libelle";s:21:"Embrasse cordon blanc";s:9:"categorie";s:2:"16";s:4:"prix";s:3:"4.9";s:5:"image";s:12:"61727995.jpg";}}');


    ///////////////////////////////////////////////

    // Article suivant
    $nextRef = $dao->next(end($articles)->ref);

    // Les articles précédents
    $prev = $dao->prevN($articles[0]->ref,12);

    // Charge la vue
    include("../view/articles.view.php")
    ?>
