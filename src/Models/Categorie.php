<?php

namespace MyApp\Models;

use MyApp\Core\Config\Database;
use PDOException;

class Categorie
{
    private int $id;
    private string $titre;
    private $dbCnx;

    public function __construct()
    {
        $this->dbCnx = new Database();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function __toString(): string
    {
        return "ID: $this->id. Titre: $this->titre";
    }

    public function save()
    {
        try {
            $query = "INSERT INTO categories(titre) VALUES (?)";
            $stmt = $this->dbCnx->pdo->prepare($query);
            $stmt->execute([$this->titre]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }

    public function getAll()
    {
        try {
            $query = "SELECT * FROM categories ORDER BY id";
            $stmt = $this->dbCnx->pdo->query($query);

            return  $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }

    public function getOne()
    {
        try {
            $query = "SELECT * FROM categories WHERE id = :id;";
            $stmt = $this->dbCnx->pdo->prepare($query);
            $stmt->execute(['id' => $this->id]);
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }


    public function update()
    {
        try {
            $query = 'UPDATE categories SET titre = :titre WHERE id = :id;';
            $stmt = $this->dbCnx->pdo->prepare($query);
            $result = $stmt->execute(['titre' => $this->titre, 'id' => $this->id]);

            if ($result) {
                echo "Record updated successfully!";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }


    public function delete()
    {
        try {
            $query = "DELETE FROM categories WHERE id= :id";
            $stmt = $this->dbCnx->pdo->prepare($query);
            $result = $stmt->execute(['id' => $this->id]);
            if ($result) {
                echo "Record deleted successfully!";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }
}
