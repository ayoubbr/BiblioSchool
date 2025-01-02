<?php

namespace MyApp\Models;

class Tag
{
    private  $id;
    private  $titre;

    public function __construct($id, $titre)
    {
        $this->id = $id;
        $this->titre = $titre;
    }

    public function get($property)
    {
        return $this->$property;
    }

    public function set($property, $value)
    {
        $$property = $value;
    }

    
    public function __toString(): string
    {
        return "ID: $this->id. titre: $this->titre";
    }
}
