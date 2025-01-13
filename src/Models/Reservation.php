<?php

namespace MyApp\Models;

use DateTime;

class Reservation
{
    private int $id;
    private string $reference;
    private DateTime $dateDebut;
    private DateTime $dateFin;
    private User $user;
    private Livre $livre;
    private Etat $etat;


    public function __construct($id, $reference, $etat, $dateFin, $dateDebut, $livre, $user)
    {
        $this->id = $id;
        $this->reference = $reference;
        $this->etat = $etat;
        $this->dateFin = $dateFin;
        $this->dateDebut = $dateDebut;
        $this->livre = $livre;
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

    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    public function getEtat()
    {
        return $this->etat;
    }

    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    public function getLivre()
    {
        return $this->livre;
    }

    public function setLivre($livre)
    {
        $this->livre = $livre;
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
        return "ID: $this->id. Reference: $this->reference. Etat: $this->etat.
        DateFin: $this->dateFin. DateDebut: $this->dateDebut.
        Livre: $this->livre. User: $this->user.
        ";
    }
}
