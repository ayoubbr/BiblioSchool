<?php

namespace MyApp\Models;

class LivreTag
{
    private int $id;
    private Livre $livre;
    private Tag $tag;

    public function __construct($id, $livre, $tag)
    {
        $this->id = $id;
        $this->livre = $livre;
        $this->tag = $tag;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLivre()
    {
        return $this->livre;
    }

    public function setLivre($livre)
    {
        $this->livre = $livre;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    public function __toString(): string
    {
        return "ID: $this->id. Livre: $this->livre. Tag: $this->tag";
    }
}
