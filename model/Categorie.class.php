
<?php

    class Categorie {
        public $id;   // Identifiant
        public $nom;  // nom de la catégorie
        public $pere; // catégorie parente

        function getPath() {
          global $dao;
          $ret = array();
            while($ret[0]->id != 1){
              array_unshift($ret, $dao->db->query("select * from categorie where id = ".$ret[0]->pere)[0]);
            }
          return $ret;
        }
    }


?>

