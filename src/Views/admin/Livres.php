<?php

use MyApp\Models\Categorie;
use MyApp\Models\Livre;
use MyApp\Models\Tag;

require_once 'C:\wamp64\www\BiblioSchool\BiblioSchool-repo\vendor\autoload.php';
include '../layout.php';

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
                    class="d-flex align-center fs-14 c-black rad-6 p-10"
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
                    class="d-flex admin align-center fs-14 c-black rad-6 p-10"
                    href="#">
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
        <h1 class="p-relative">Livres</h1>
        <div class="projects p-20 bg-white rad-10 m-20">
            <h2 class="mt-0 mb-20">Livres</h2>
            <div class="responsive-table">
                <table class="fs-15 w-full">
                    <thead>
                        <tr>
                            <td>User</td>
                            <td>ID</td>
                            <td>Titre</td>
                            <td>Auteur</td>
                            <td>Date de publication</td>
                            <td>Quantite</td>
                            <td>Category</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $livres = new Livre();

                        foreach ($livres->getAll() as  $livre) {
                            $livres->setUserId($livre->id_user);
                            $livres->setId($livre->id);
                            $livres->setTitre($livre->titre);
                            $livres->setAuteur($livre->auteur);
                            $livres->setDateDePublication($livre->dateDePublication);
                            $livres->setQuantite($livre->quantite);
                            $livres->setCategoryId($livre->id_categorie);

                        ?>

                            <tr>
                                <td><?php echo $livres->getUser()->getUsername(); ?></td>
                                <td><?php echo $livres->getId(); ?></td>
                                <td><?php echo $livres->getTitre(); ?></td>
                                <td><?php echo $livres->getAuteur(); ?></td>
                                <td><?php echo $livres->getDateDePublication(); ?></td>
                                <td><?php echo $livres->getQuantite(); ?></td>
                                <td><?php echo $livres->getCategorie()->getTitre(); ?></td>
                                <td> <a href="#" class='update-icon update-livre' data-titre="<?php echo $livres->getTitre(); ?>" data-id="<?php echo $livres->getId(); ?>">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="../../helpers/livreHelper.php?id=<?php echo $livres->getId(); ?>&req=delete" class="delete-icon">
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