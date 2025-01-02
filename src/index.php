<?php

require_once 'C:\wamp64\www\BiblioSchool\BiblioSchool-repo\vendor\autoload.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="../src/assets/css/all.min.css" />
  <link rel="stylesheet" href="../src/assets/css/framework.css" />
  <link rel="stylesheet" href="../src/assets/css/master.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap"
    rel="stylesheet" />
</head>

<body>
  <div class="home-page">
    <h1>HOME PAGE</h1>
    <div class="home-page-links">
      <a href="./Views/admin/dashboard.php" class="home-page-link">Admin</a>
      <a href="./Views/gerant/dashboard.php" class="home-page-link">Gerant</a>
      <a href="./Views/apprenant/dashboard.php" class="home-page-link">Apprenant</a>
    </div>
  </div>
</body>

</html>