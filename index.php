<?php include 'menu.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Site</title>
</head>
<body style="background-color: black;">

<!-- CARROSSEL -->


<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="imagens/banner01.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="imagens/banner02.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagens/banner03.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> <br>

<!-- PRODUTOS MAIS PROCURADOS-->

<h2></h2>

<table style="width: 50%; margin-left: auto; margin-right: auto;">

<tr>
    <th> <!-- produto 1-->
    <div class="card" style="width: 20rem;">
  <img src="imagens/prod01.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kit Pink Beauty</h5>
    <p class="card-text">$200.00</p>
    <a href="#" class="btn btn-dark">Vizualizar</a>
  </div>
</div>
    </th>

    <th> <!-- produto 2-->
    <div class="card" style="width: 20rem;">
  <img src="imagens/prod02.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sérum MA Blues</h5>
    <p class="card-text">$45.90</p>
    <a href="#" class="btn btn-dark">Vizualizar</a>
  </div>
</div>
    </th>

    <th> <!-- produto 3-->
    <div class="card" style="width: 20rem;">
  <img src="imagens/prod03.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sérum MA Pink Beaty</h5>
    <p class="card-text">$50.00</p>
    <a href="#" class="btn btn-dark">Vizualizar</a>
  </div>
</div>
    </th>

    <th> <!-- produto 4-->
    <div class="card" style="width: 20rem;">
  <img src="imagens/prod04.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kit Anti-oily</h5>
    <p class="card-text">$150.00</p>
    <a href="#" class="btn btn-dark">Vizualizar</a>
  </div>
</div>
    </th>

</table>
<br><br>

<!-- DICAS -->
 <?php include 'dicas.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>