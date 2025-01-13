<?php

namespace MyApp\Controllers;

use MyApp\Models\Categorie;

require_once 'C:\wamp64\www\BiblioSchool\BiblioSchool-repo\vendor\autoload.php';


class CategorieController
{
    public function save()
    {
        $new_category = new Categorie();
        $new_category->setTitre($_POST['titre']);
        $new_category->save();
        header("Location: ../Views/admin/settings.php");
    }

    public function delete()
    {
        $new_category = new Categorie();
        $new_category->setId($_GET['id']);
        $new_category->delete();
        header("Location: ../Views/admin/settings.php");
    }

    public function update()
    {
        $new_category = new Categorie();
        $new_category->setId($_POST['id']);
        $new_category->setTitre($_POST['titre']);
        $new_category->update();
        header("Location: ../Views/admin/settings.php");
    }
}
