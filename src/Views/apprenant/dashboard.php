<?php
include '../layout.php';
?>
<div class="page d-flex">
  <div class="sidebar bg-white p-20 p-relative">
    <!-- <h3 class="p-relative txt-c mt-0">BiblioSchool</h3> -->
    <div class="my-d-flex">
      <img width="50px" src="../../assets/images/activity-02.png" alt="">
      <h2>BiblioSchool</h2>
    </div>
    <ul>
      <li>
        <a
          class="active apprenant d-flex align-center fs-14 c-black rad-6 p-10"
          href="#">
          <i class="fa-regular fa-chart-bar fa-fw"></i>
          <span>Apprenant</span>
        </a>
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
          href="#">
          <i class="fa-solid fa-graduation-cap fa-fw"></i>
          <span>Livres</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="content w-full">
    <!-- Start Head -->
    <div class="head bg-white p-15 between-flex">
      <div class="search p-relative">
        <input class="p-10" type="search" placeholder="Type A Keyword" />
      </div>
      <div class="icons d-flex align-center">
        <img src="../../assets/images/avatar.png" alt="" />
      </div>
    </div>
    <!-- End Head -->
    <h1 class="p-relative">Dashboard</h1>
    <div class="wrapper d-grid gap-20">
      <!-- Start Welcome Widget -->
      <div class="welcome bg-white rad-10 txt-c-mobile block-mobile">
        <div class="intro p-20 d-flex space-between bg-eee">
          <div>
            <h2 class="m-0">Welcome</h2>
            <p class="c-grey mt-5">Nom Apprenant</p>
          </div>
          <img class="hide-mobile" src="../../assets/images/welcome.png" alt="" />
        </div>
        <img src="../../assets/images/avatar.png" alt="" class="avatar" />
        <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
          <div>
            Nom Apprenant
            <span class="d-block c-grey fs-14 mt-10">Apprenant</span>
          </div>
          <div>
            80 <span class="d-block c-grey fs-14 mt-10">Jours Totals</span>
          </div>
          <div>
            500 <span class="d-block c-grey fs-14 mt-10">Livres</span>
          </div>
        </div>
        <a
          href="profile.html"
          class="visit d-block fs-14 bg-blue c-white w-fit btn-shape">Profile</a>
      </div>
      <!-- End Welcome Widget -->
      <!-- Start Ticket Widget -->
      <div class="tickets p-20 bg-white rad-10">
        <h2 class="mt-0 mb-10">Statistiques des Reservations </h2>
        <p class="mt-0 mb-20 c-grey fs-15">
          Tout sur les réservations
        </p>
        <div class="d-flex txt-c gap-20 f-wrap">
          <div class="box p-20 rad-10 fs-13 c-grey">
            <i
              class="fa-regular fa-rectangle-list fa-2x mb-10 c-orange"></i>
            <span class="d-block c-black fw-bold fs-25 mb-5">2500</span>
            Total
          </div>
          <div class="box p-20 rad-10 fs-13 c-grey">
            <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
            <span class="d-block c-black fw-bold fs-25 mb-5">500</span>
            En attente
          </div>
          <div class="box p-20 rad-10 fs-13 c-grey">
            <i class="fa-regular fa-circle-check fa-2x mb-10 c-green"></i>
            <span class="d-block c-black fw-bold fs-25 mb-5">1900</span>
            Terminé
          </div>
          <div class="box p-20 rad-10 fs-13 c-grey">
            <i class="fa-regular fa-rectangle-xmark fa-2x mb-10 c-red"></i>
            <span class="d-block c-black fw-bold fs-25 mb-5">100</span>
            Confirme
          </div>
        </div>
      </div>
      <!-- End Ticket Widget -->
      <!-- Start End Media Stats Widget -->
    </div>
    <!-- Start Projects Table -->
    <div class="projects p-20 bg-white rad-10 m-20">
      <h2 class="mt-0 mb-20">Reservations</h2>
      <div class="responsive-table">
        <table class="fs-15 w-full">
          <thead>
            <tr>
              <td>Livre</td>
              <td>Date de fin</td>
              <td>Auteur</td>
              <td>Prix</td>
              <td>Status</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Ministry Wikipedia</td>
              <td>10 May 2022</td>
              <td>Ministry</td>
              <td>$5300</td>
              <td>
                <span class="label btn-shape bg-orange c-white">Pending</span>
              </td>
            </tr>
            <tr>
              <td>Ministry Wikipedia</td>
              <td>10 May 2022</td>
              <td>Ministry</td>
              <td>$5300</td>
              <td>
                <span class="label btn-shape bg-orange c-white">Pending</span>
              </td>
            </tr>
            <tr>
              <td>Ministry Wikipedia</td>
              <td>10 May 2022</td>
              <td>Ministry</td>
              <td>$5300</td>
              <td>
                <span class="label btn-shape bg-orange c-white">Pending</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- End Projects Table -->
  </div>
</div>
</body>

</html>