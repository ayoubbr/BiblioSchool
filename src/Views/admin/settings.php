<?php

use MyApp\Models\Categorie;
use MyApp\Models\Tag;

require_once 'C:\wamp64\www\BiblioSchool\BiblioSchool-repo\vendor\autoload.php';
include '../layout.php';

$a_category = new Categorie();
$a_tag = new Tag();
?>

<div class="page d-flex">
    <div class="sidebar bg-white p-20 p-relative">
        <div class="my-d-flex">
            <img width="50px" src="../../assets/images/activity-02.png" alt="">
            <h2>BiblioSchool</h2>
        </div>
        <ul>
            <li>
                <a
                    class=" d-flex align-center fs-14 c-black rad-6 p-10"
                    href="./dashboard.php">
                    <i class="fa-regular fa-chart-bar fa-fw"></i>
                    <span>Admin</span>
                </a>
            </li>
            <li>
                <a
                    class="admin d-flex align-center fs-14 c-black rad-6 p-10"
                    href="./settings.php">
                    <i class="fa-solid fa-gear fa-fw"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a
                    class="d-flex align-center fs-14 c-black rad-6 p-10"
                    href="#">
                    <i class="fa-regular fa-user fa-fw"></i>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a
                    class="d-flex align-center fs-14 c-black rad-6 p-10"
                    href="#">
                    <i class="fa-regular fa-circle-user fa-fw"></i>
                    <span>Apprenants</span>
                </a>
            </li>
            <li>
                <a
                    class="d-flex align-center fs-14 c-black rad-6 p-10"
                    href="#">
                    <i class="fa-solid fa-diagram-project fa-fw"></i>
                    <span>Reservations</span>
                </a>
            </li>
            <li>
                <a
                    class="d-flex align-center fs-14 c-black rad-6 p-10"
                    href="./Livres.php">
                    <i class="fa-solid fa-graduation-cap fa-fw"></i>
                    <span>Livres</span>
                </a>
            </li>

        </ul>
    </div>
    <!-- ==================  CATEGORIES =================== -->
    <div class="content w-full">
        <div class="head bg-white p-15 between-flex">
            <div class="search p-relative">
                <input class="p-10" type="search" placeholder="Type A Keyword" />
            </div>
            <div class="icons d-flex align-center">
                <img src="../../assets/images/avatar.png" alt="" />
            </div>
        </div>
        <h1 class="p-relative">Categories</h1>
        <div class="settings-page m-20 d-grid gap-20">
            <!-- Start Projects Table -->
            <div class="projects p-20 bg-white rad-10 m-20">
                <h2 class="mt-0 mb-20">Categories</h2>
                <div class="responsive-table" id="categories-table">
                    <table class="fs-15 w-full">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Categorie</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $categories = $a_category->getAll();
                            foreach ($categories as $key => $category) {
                            ?>
                                <tr>
                                    <td><?php echo $category['id']; ?></td>
                                    <td><?php echo $category['titre']; ?></td>
                                    <td>
                                        <a href="#" class='update-icon update-category' data-titre="<?php echo $category['titre']; ?>" data-id="<?php echo $category['id']; ?>">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <a href="../../helpers/categorieHelper.php?id=<?php echo $category['id']; ?>&req=delete" class="delete-icon">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Projects Table -->
            <!-- Start Settings Box -->
            <div class="p-20 bg-white rad-10">
                <h2 class="mt-0 mb-10">Form d'ajout</h2>
                <form action="../../helpers/categorieHelper.php" method="post">
                    <div class="mb-15">
                        <label class="fs-14 c-grey d-block mb-10" for="first">Titre du categorie</label>
                        <input
                            class="b-none border-ccc p-10 rad-6 d-block w-full"
                            type="text"
                            name="titre"
                            value=""
                            placeholder="Titre" />
                    </div>
                    <div>
                        <input
                            class="b-none border-ccc p-10 rad-6 w-full mr-10"
                            id="submit"
                            type="submit"
                            value="Submit"
                            name="submit" />
                    </div>
                </form>
            </div>
            <!-- End Settings Box -->

        </div>
        <!-- ==================  TAGS =================== -->

        <h1 class="p-relative">Tags</h1>
        <div class="settings-page m-20 d-grid gap-20">
            <div class="projects p-20 bg-white rad-10 m-20">
                <h2 class="mt-0 mb-20">Tags</h2>
                <div class="responsive-table" id="tags-table">
                    <table class="fs-15 w-full">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Tag</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tags = $a_tag->getAll();
                            foreach ($tags as $key => $tag) {
                            ?>
                                <tr>
                                    <td><?php echo $tag['id']; ?></td>
                                    <td><?php echo $tag['titre']; ?></td>
                                    <td>
                                        <a class='update-icon update-tag' data-titre="<?php echo $tag['titre']; ?>" data-id="<?php echo $tag['id']; ?>">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <a href="../../helpers/tagHelper.php?id=<?php echo $tag['id']; ?>&req=delete" class="delete-icon">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="p-20 bg-white rad-10">
                <h2 class="mt-0 mb-10">Form d'ajout</h2>
                <form action="../../helpers/tagHelper.php" method="post">
                    <div class="mb-15">
                        <label class="fs-14 c-grey d-block mb-10">Titre du Tag</label>
                        <input
                            class="b-none border-ccc p-10 rad-6 d-block w-full"
                            type="text"
                            name="titre"
                            placeholder="Titre" />
                    </div>
                    <div>
                        <input
                            class="b-none border-ccc p-10 rad-6 w-full mr-10"
                            id="submit"
                            type="submit"
                            value="Submit"
                            name="submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ===================================== -->
<div class="modal-container" id="modal-container">
    <div class="modal">
        <h1>Update form</h1>
        <form method="post" id="form" class="form"
            action="../../helpers/categorieHelper.php?id=<?php echo $category['id']; ?>&req=update">
            <div class="one-line">
                <div class="one-input-box">
                    <label for="name">Titre du categorie</label>
                    <div class="one-input">
                        <input type="text" id="titre" name="titre">
                        <input type="hidden" id="id" name="id">
                    </div>
                </div>

            </div>
            <hr>
            <div class="buttons">
                <input type="submit" name="update" class="main-button" id="submit-button" type="submit" value="Submit" />
                <button class="secondary-button" id="close">Close</button>
            </div>
        </form>

    </div>
</div>
<!-- ===================================== -->
<div class="modal-container" id="modal-container-2">
    <div class="modal">
        <h1>Update form</h1>
        <form method="post" id="form" class="form"
            action="../../helpers/tagHelper.php?id=<?php echo $tag['id']; ?>&req=update">
            <div class="one-line">
                <div class="one-input-box">
                    <label for="name">Titre du tag</label>
                    <div class="one-input">
                        <input type="text" id="titre_tag" name="titre_tag">
                        <input type="hidden" id="id_tag" name="id_tag">
                    </div>
                </div>
            </div>
            <hr>
            <div class="buttons">
                <input type="submit" name="update" class="main-button" id="submit-button" type="submit" value="Submit" />
                <button class="secondary-button" id="close">Close</button>
            </div>
        </form>

    </div>
</div>
<!-- ===================================== -->
</div>
<script>
    const modalContainer = document.getElementById('modal-container');
    const modalContainer2 = document.getElementById('modal-container-2');
    const categoriesTable = document.getElementById('categories-table');
    const tagsTable = document.getElementById('tags-table');
    const update_categories = document.querySelectorAll('.update-category');
    const update_tags = document.querySelectorAll('.update-tag');

    update_categories.forEach(element => {
        element.addEventListener('click', (e) => {
            const update = event.target.closest('.update-category');
            modalContainer.classList.add('show');
            const titre = document.getElementById('titre');
            const id = document.getElementById('id');
            titre.value = update.getAttribute('data-titre');
            id.value = update.getAttribute('data-id');
        });
    });

    update_tags.forEach(element => {
        element.addEventListener('click', (e) => {
            const update = event.target.closest('.update-tag');
            modalContainer2.classList.add('show');
            const titre = document.getElementById('titre_tag');
            const id = document.getElementById('id_tag');
            titre.value = update.getAttribute('data-titre');
            id.value = update.getAttribute('data-id');
        });
    });

    const close = document.getElementById('close');

    close.addEventListener('click', () => {
        modalContainer.classList.remove('show');
    });
</script>
</body>

</html>