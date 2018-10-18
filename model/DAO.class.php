<?php

    require_once("../model/Categorie.class.php");
    require_once("../model/Article.class.php");

    // Creation de l'unique objet DAO
    $dao = new DAO();

    // Le Data Access Object
    // Il représente la base de donnée
    class DAO {
        // L'objet local PDO de la base de donnée
        private $db;
        // Le type, le chemin et le nom de la base de donnée
        private $database = 'sqlite:../data/data.db';

        // Constructeur chargé d'ouvrir la BD
        function __construct() {
          try {
            $this->db = new PDO($this->database);
          } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
          }

        }


        // Accès à toutes les catégories
        // Retourne une table d'objets de type Categorie
        function getAllCat() : array {
            return $this->db->query("select * from categorie;")->fetchAll(PDO::FETCH_CLASS, 'Categorie');
        }



        // Accès aux n premiers articles
        // Cette méthode retourne un tableau contenant les n permier articles de
        // la base sous la forme d'objets de la classe Article.
        function firstN(int $n) : array {
            return $this->db->query("select * from article order by ref limit $n;")->fetchAll(PDO::FETCH_CLASS, 'Article');
        }

        // Acces au n articles à partir de la reférence $ref
        // Cette méthode retourne un tableau contenant n  articles de
        // la base sous la forme d'objets de la classe Article.
        function getN(int $ref,int $n) : array {
            return $this->db->query("select * from article where ref >= $ref order by ref limit $n;")->fetchAll(PDO::FETCH_CLASS, 'Article');
        }

        // Acces à la référence qui suit la référence $ref dans l'ordre des références
        function next(int $ref) : int {
            return $this->db->query("select * from article where ref> $ref order by ref limit 1;")->fetchAll(PDO::FETCH_CLASS, 'Article')[0]->ref;
        }

        // Acces aux n articles qui précèdent de $n la référence $ref dans l'ordre des références
        function prevN(int $ref,int $n): array {
          return $this->db->query("select * from (select * from article where ref < $ref order by  ref DESC limit $n) order by ref;")->fetchAll(PDO::FETCH_CLASS, 'Article');

        }

        // Acces à une catégorie
        // Retourne un objet de la classe Categorie connaissant son identifiant
        function getCat(int $id): Categorie {
          return $this->db->query("select * from categorie where id = $id;")->fetchAll(PDO::FETCH_CLASS, 'Categorie');

        }




        // Acces au n articles à partir de la reférence $ref
        // Retourne une table d'objets de la classe Article
        function getNCateg(int $ref,int $n,string $categorie) : array {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////////////
            return array();
        }

    }

    ?>
