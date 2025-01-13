<?php

namespace MyApp\Controllers;

use MyApp\Models\Livre;

require_once 'C:\wamp64\www\BiblioSchool\BiblioSchool-repo\vendor\autoload.php';


class LivreController
{
    public function save()
    {
        $new_livre = new Livre();
        // $new_livre->setTitre($_POST['titre']);
        // $new_livre->save();
        // header("Location: ../Views/admin/settings.php");
    }

    public function delete()
    {
        $new_livre = new Livre();
        // $new_livre->setId($_GET['id']);
        // $new_livre->delete();
        // header("Location: ../Views/admin/settings.php");
    }

    public function update()
    {
        $new_livre = new Livre();
        // $new_livre->setId($_POST['id']);
        // $new_livre->setTitre($_POST['titre']);
        // $new_livre->update();
        // header("Location: ../Views/admin/settings.php");
    }
}
