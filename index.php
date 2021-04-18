<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <?php include './component/head.php';?>
  <body>
    <?php if(in_array('login', $_REQUEST)) : ?>
      <?php include './component/login.php'?>
    <?php else: ?>
      <!-- Header -->
      <?php include 'component/header.php'?>
      <!-- Navigasi -->
      <?php include 'component/navigasi.php';?>
      <!-- Content -->
      <div class="container my-3 mt-3 mb-3" style="height: 75vh;">
        <div class="row">
          <!-- Main content -->
          <div class="col-sm-12 col-md-9 col-xl-9 my-3">
            <?php if(in_array('about-us',$_REQUEST)):?>
              <?php include './component/aboutUs.php' ?>
            <?php elseif(in_array('data-pegawai',$_REQUEST)):?>
              <?php include './component/dataPegawai.php';?>
            <?php elseif(in_array('tambah-data',$_REQUEST)):?>
              <?php include './component/formPegawai.php';?>
            <?php elseif(in_array('edit-data',$_REQUEST)):?>
              <?php include './component/formEditPegawai.php';?>
            <?php elseif(in_array('detail-data',$_REQUEST)):?>
              <?php include './component/detail.php';?>
            <?php else: ?>
                <?php include './component/home.php' ?>
            <?php endif;?>
          </div>
          <div class="col-sm-12 col-md-3 col-xl-3 my-3">
            <div class="list-group">
              <a href="#" class="list-group-item active" aria-current="true">
                link 1
              </a>
              <a href="#" class="list-group-item">Link 2</a>
              <a href="#" class="list-group-item">Link 3</a>
              <a href="#" class="list-group-item">Link 4</a>
              <a href="#" class="list-group-item">Link 5</a>
            </div>
          </div>
        </div>
      </div>
      <!-- footer -->
      <?php include './component/footer.php' ;?>
    <?php endif;?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
