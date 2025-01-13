<?php
require_once 'C:\wamp64\www\BiblioSchool\BiblioSchool-repo\vendor\autoload.php';

use MyApp\Controllers\CategorieController;

if (isset($_POST['submit']) && !empty($_POST['titre'])) {
    $categoryController = new CategorieController();
    $categoryController->save();
}

if (isset($_GET['id']) && isset($_GET['req'])) {
    if ($_GET['req'] == "delete") {
        echo 'failed';
        $categoryController = new CategorieController();
        $categoryController->delete();
    }
    if ($_GET['req'] == "update") {
        echo 'test';
        $categoryController = new CategorieController();
        $categoryController->update();
    }
}
