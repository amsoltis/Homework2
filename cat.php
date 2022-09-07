<?php require_once("header.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cat Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="./index.html">Home</a>
            <li class="nav-item">
                <a class="nav-link" href="./cat.html">Cat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./jobhistory.html">Job History</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./author.html">Author</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./comingsoon.html">Coming Soon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./rubric.html">Rubric</a>
            </li>
        </ul>
    </div>
  </div>
</nav>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item">
                  <img src="./IMG_4881.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item active">
                  <img src="./IMG_4938.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="./IMG_6115.jpg" class="d-block w-100" alt="...">
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>
  </body>
</html>