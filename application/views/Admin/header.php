<!DOCTYPE html>
<html>
<head>
  <title>Article List</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url("Assets/css/bootstrap.min.css") ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/css/main.css") ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/css/util.css") ?>">
</head>



<!-- <style>
body {
    background-image: <?= base_url('/assets/imges/pet.png'); ?>
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">dukan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <?php 
      if($this->session->userdata('id')) { ?>
      <li class="nav-item">
        <a href="<?= base_url('admin/logout');?>" class="btn btn-danger">Logout</a>
      </li> 
      
    <?php } ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->