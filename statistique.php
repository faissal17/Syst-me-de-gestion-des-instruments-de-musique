<?php

require('database.php');
require 'scripts.php';
?>





<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Systme de gestion des instruments de musique</title>
  <link rel="stylesheet" href="styles.css">
  <!-- font awesom -->
  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
  <script src="https://kit.fontawesome.com/19f21012c2.js" crossorigin="anonymous"></script>
  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"/>

</head>
<body>
<style>
body{
  background-image: url(image.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">Music function</h4>
            <p class="text-muted">music is not just a rytheme music is art, is a world where evry one can show his talent, evry one is free,
                evry one is epic in his own way, you can start show your talent by simple things, here where evrything simple creat a hug effect.
            </p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <ul class="list-unstyled">
              <h3 class="text-light">hello,<?php echo $_SESSION['name']?></h3>
              <li><a href="music.php" class="text-white text-decoration-none">Home</a></li>
              <li><a href="statistique.php" class="text-white text-decoration-none">statistique</a></li>
              <li><a href="#" class="text-white text-decoration-none">help</a></li>
              <li><a href="logout.php" class="text-white text-decoration-none">log out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong><i class="fa-solid fa-music"></i> music</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
</header>

<!-- card -->
<div class="d-flex justify-content-around row">
<div class="card mb-3 mt-5" style="max-width: 500px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="price.jpg" class="card-img" style="max-width: 300px" style="max-height:300px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Total Price</h5>
        <p class="card-text">$<?php echo countprice()  ?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3 mt-5" style="max-width: 500px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="sale.jpg" class="card-img" style="max-width: 300px" style="max-height:200px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Total Products</h5>
        <p class="card-text"><?php echo(countproduct())  ?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3 mt-5" style="max-width: 500px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="max.jpg" class="card-img" style="max-width: 300px" style="max-height:200px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Max Price</h5>
        <p class="card-text">$<?php echo(Maxprice())  ?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3 mt-5" style="max-width: 500px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="min.png" class="card-img" style="max-width: 300px" style="max-height:200px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Min Price</h5>
        <p class="card-text">$<?php echo(Minprice())  ?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
</div>

</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>