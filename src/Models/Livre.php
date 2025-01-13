<?php

namespace MyApp\Models;

require_once 'C:\wamp64\www\BiblioSchool\BiblioSchool-repo\vendor\autoload.php';

use DateTime;
use MyApp\Core\Config\Database;
use PDO;
use PDOException;

class Livre
{
    private int $id;
    private string $titre;
    private string $auteur;
    private int $quantite;
    private string $dateDePublication;
    private Categorie $categorie;
    private User $user;
    public $dbCnx;


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

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }

    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    public function getDateDePublication()
    {
        return $this->dateDePublication;
    }

    public function setDateDePublication($dateDePublication)
    {
        $this->dateDePublication = $dateDePublication;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function __toString(): string
    {
        return "ID: $this->id. titre: $this->titre. auteur: $this->auteur.
        quantite: $this->quantite. dateDePublication: $this->dateDePublication.
        categorie: $this->categorie. user: $this->user.
        ";
    }

    public function save()
    {
        try {
            $query = "INSERT INTO livres(titre) VALUES (?)";
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
            $query = "SELECT * FROM livres";
            $stmt = $this->dbCnx->pdo->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }

    public function getOne()
    {
        try {
            $query = "SELECT * FROM livres WHERE id = :id;";
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
            $query = 'UPDATE livres SET titre = :titre WHERE id = :id;';
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
            $query = "DELETE FROM livres WHERE id= :id";
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

    public function setUserId($id)
    {
        $this->user =  new User();
        $name_user = $this->user->getById($id);
        $this->user->setUser($id, $name_user);
    }

    public function setCategoryId($id)
    {
        $this->categorie =  new Categorie();
        $name_categorie = $this->categorie->getById($id);
        $this->categorie->setCategorie($id, $name_categorie);
    }
}
