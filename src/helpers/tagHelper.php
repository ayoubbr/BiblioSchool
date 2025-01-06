<?php
require_once 'C:\wamp64\www\BiblioSchool\BiblioSchool-repo\vendor\autoload.php';

use MyApp\Controllers\TagController;

if (isset($_POST['submit']) && !empty($_POST['titre'])) {
    $tagController = new TagController();
    $tagController->save();
}

if (isset($_GET['id']) && isset($_GET['req'])) {
    if ($_GET['req'] == "delete") {
        echo 'failed';
        $tagController = new TagController();
        $tagController->delete();
    }
    if ($_GET['req'] == "update") {
        echo 'test';
        $tagController = new TagController();
        $tagController->update();
    }
}
