<?php

namespace MyApp\Models;

use MyApp\Core\Config\Database;
use PDO;

class User
{
    private int $id;
    private string $firstname;
    private string $lastname;
    private string $username;
    private string $email;
    private string $password;
    private Role $role;
    private $dbCnx;

    public function __construct()
    {
        $this->dbCnx = new Database();
        $this->id = 0;
        $this->firstname = '';
        $this->lastname = '';
        $this->username = '';
        $this->email = '';
        $this->password = '';
        $this->role = new Role();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function __toString(): string
    {
        return "ID: $this->id. firstname: $this->firstname. lastname: $this->lastname.
        username: $this->username. email: $this->email.
        password: $this->password. role: $this->role.
        ";
    }

    public function getById($id)
    {
        $sql = "SELECT username FROM users WHERE id = " . $id;

        $result =  $this->dbCnx->pdo->query($sql)->fetch(PDO::FETCH_OBJ);
        return $result->username;
    }

    public function setUser($id, $username)
    {
        $this->id = $id;
        $this->username = $username;
    }
}
