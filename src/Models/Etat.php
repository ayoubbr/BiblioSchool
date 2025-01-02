<?php

namespace MyApp\Models;

class Etat
{
    private int $id;
    private string $titre;

    public function __construct($id, $titre)
    {
        $this->id = $id;
        $this->titre = $titre;
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
}
