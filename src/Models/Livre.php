<?php

namespace MyApp\Models;

use DateTime;

class Livre
{
    private int $id;
    private string $titre;
    private string $auteur;
    private int $quantite;
    private DateTime $dateDePublication;
    private Categorie $categorie;
    private User $user;

    public function __construct($id, $titre, $auteur, $quantite, $dateDePublication, $categorie, $user)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->quantite = $quantite;
        $this->dateDePublication = $dateDePublication;
        $this->categorie = $categorie;
        $this->user = $user;
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
}
