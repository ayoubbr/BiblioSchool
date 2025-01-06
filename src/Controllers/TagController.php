<?php

namespace MyApp\Controllers;

use MyApp\Models\Tag;

require_once 'C:\wamp64\www\BiblioSchool\BiblioSchool-repo\vendor\autoload.php';


class TagController
{
    public function save()
    {
        $new_tag = new Tag();
        $new_tag->setTitre($_POST['titre']);
        $new_tag->save();
        header("Location: ../Views/admin/settings.php");
    }

    public function delete()
    {
        $new_tag = new Tag();
        $new_tag->setId($_GET['id']);
        $new_tag->delete();
        header("Location: ../Views/admin/settings.php");
    }

    public function update()
    {
        $new_tag = new Tag();
        $new_tag->setId($_POST['id_tag']);
        $new_tag->setTitre($_POST['titre_tag']);
        $new_tag->update();
        header("Location: ../Views/admin/settings.php");
    }
}
