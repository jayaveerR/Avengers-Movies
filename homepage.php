<?php
session_start();
include("connect.php");

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="navbar.scss">
    <title>Webner!</title>
  </head>
  <body>
    <div style="text-align:center; padding:15%;">
        <p  style="font-size:50px; font-weight:bold;">
         Hello  <?php 
         if(isset($_SESSION['email'])){
          $email=$_SESSION['email'];
          $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
          while($row=mysqli_fetch_array($query)){
              echo $row['firstName'].' '.$row['lastName'];
          }
         }
         ?>
         :)
        </p>
        <a href="logout.php">Logout</a>
      </div>
    <div class="color">
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WEBNER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#carouselExampleIndicators">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#movies">Movies</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#coming" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Coming-Soon
                        </a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" id="search" onclick="window.location.href='moremovies.html'">
                    <button class="btn btn-outline-success" type="submit" id="search">Search</button>
                </form><br>
                <button type="button" class="btn btn-dark" id="signin" onclick="window.location.href='signin.html'">Sign-in</button>
                
            </div>
        </div>
    </nav>
    <!--Home-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="tor.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="avengers infinity war.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="spider-man-far-from-home.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br><br>
          <!-- Movies  -->
           
    <div class="movies" id="movies"><br>
        <h5 class="heading">Marvels Movie List</h5>
        <!-- Movies container  -->
        <div class="movies-container">
            <!-- box-1  -->
            <div class="box" id="spidermanBox" onclick="window.location.href='spider-man2.html'">
                <div class="box-img">
                    <img src="spider-man2.jpg" alt="Spider-Man 2">
                </div>
                <h3>Spider-Man 2</h3>
                <span>120 min | Action</span>
            </div>
            
            <!-- box-2  -->
            <div class="box" id="home-coming" onclick="window.location.href='spider-man home-coming.html'">
                <div class="box-img">
                    <img src="R.jfif" alt="">
                </div>
                <h3>Spider Home Coming</h3>
                <span>120 min | Action</span>
            </div>
            
            <!-- box-3  -->
            <div class="box" id="spider-man" onclick="window.location.href='spider-man.html'">
                <div class="box-img">
                    <img src="spider-man.jpg" alt="">
                </div>
                <h3>Spider-Man</h3>
                <span>120 min | Thriller</span>
            </div>
            <!-- box-4  -->
            <div class="box" id="spider-man no way" onclick="window.location.href='spider-man no way.html'">
                <div class="box-img">
                    <img src="spider man no way.jpg" alt="">
                </div>
                <h3>Spider-Man No Way</h3>
                <span>120 min | Action</span>
            </div>
            <!-- box-5  -->
            <div class="box" id="civilwar" onclick="window.location.href='civil.html'">
                <div class="box-img">
                    <img src="cicvilwar.jfif" alt="">
                </div>
                <h3>Avengers Assemble</h3>
                <span>120 min | Adventure</span>
            </div>
            <!-- box-6  -->
            <div class="box" id="end game" onclick="window.location.href='end game.html'">
                <div class="box-img">
                    <img src="avengers.jpg" alt="">
                </div>
                <h3>Avengers-End Game</h3>
                <span>120 min | Thriller</span>
            </div>
            <!-- box-7  -->
            <div class="box" id="infinity" onclick="window.location.href='avengersinfinity.html'">
                <div class="box-img">
                    <img src="Avengers-Infinity-War_1.jpg" alt="">
                </div>
                <h3>Avenger-Infinity War</h3>
                <span>120 min | Adventure</span>
            </div>
            <!-- box-9  -->
            <div class="box" id="avengers" onclick="window.location.href='avengers.html'">
                <div class="box-img">
                    <img src="avengers-1.jpg" alt="">
                </div>
                <h3>Avengers</h3>
                <span>120 min | Action</span>
            </div>
            <!-- box-10  -->
            <div class="box" id="avengers age of ultron" onclick="window.location.href='avengers age of ultron.html'">
                <div class="box-img">
                    <img src="avengers age of ultron.jpg" alt="">
                </div>
                <h3>Avengers-Age Of Ultron</h3>
                <span>120 min | Action</span>
            </div>
            <!--b0x-11-->
            <div class="box" id="amazin-spider-man" onclick="window.location.href='amazing-spider-man.html'">
                <div class="box-img">
                    <img src="the amazing spuder-man.jpg" alt="">
                </div>
                <h3>Amazing Spider-Man</h3>
                <span>120 min | Action</span>
            </div>
                 
                   <!--b0x-13-->
                   <div class="box" id="spider-man3" onclick="window.location.href='spider-man3.html'">
                    <div class="box-img">
                        <img src="spider-man-3.jpg" alt="">
                    </div>
                    <h3>Spider-Man3</h3>
                    <span>120 min | Action</span>
                </div>
                  <!--b0x-14-->
                  <div class="box" id="spider-man far from home" onclick="window.location.href='far from home.html'">
                    <div class="box-img">
                        <img src="spider-man far from home.jfif" alt="">
                    </div>
                    <h3>Spider-Man Far From Home</h3>
                    <span>120 min | Action</span>
                </div>
        </div>
    </div><br>
 <!-- coming  -->
 <section class="coming" id="coming">
    <h2 class="heading">Coming Soon</h2>
    <!-- coming contanier  -->
    <div class="coming-container swiper">
        <div class="swiper-wrapper">
            <!-- box-1  -->
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./img/c1.jpg" alt="">
                </div>
                <h3>Ant-Man and the Wasp:Quantumania</h3>
            </div>
            <!-- box-2  -->
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./img/c2.jpg" alt="">
                </div>
                <h3>The Flash</h3>
            </div>
            <!-- box-3  -->
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./img/c3.jpg" alt="">
                </div>
                <h3>Guardians of the Galaxy Vol.3</h3>
            </div>
            <!-- box-4  -->
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./img/c4.jpg" alt="">
                </div>
                <h3>Shazam! Fury of the Gods</h3>
            </div>
            <!-- box-5  -->
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./img/c5.jpg" alt="">
                </div>
                <h3>Aquaman and the Lost Kingdom</h3>
            </div>
            <!-- box-6  -->
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./img/c6.jpg" alt="">
                </div>
                <h3>John Wick:Chapter 4</h3>
            </div>
            <!-- box-7 -->
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./img/c7.jpg" alt="">
                </div>
                <h3>Transformer rise of the beasts</h3>
            </div>
            <!-- box-8  -->
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./img/c8.jpg" alt="">
                </div>
                <h3>Mission: Impossible 7</h3>
            </div>
            <!-- box-9  -->
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./img/c9.png" alt="">
                </div>
                <h3>Deadpool 3</h3>
            </div>
            <!-- box-10  -->
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./img/c10.jpg" alt="">
                </div>
                <h3>Dune: Part two</h3>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter /\ -->
<section class="newsletter" id="newsletter"><br>
    <h5>Subscribe </h5>
    <form action="">
        <input type="email" class="email" placeholder="Enter Email" required>
        <input type="submit" value="Subscribe" class="btn">
    </form>
</section>

<!-- footer  -->
<section class="footer">
    <a href="" class="logo">

    <div class="social">
        <a href=""><i class='bx bxl-facebook'></i></a>
        <a href=""><i class='bx bxl-twitter'></i></a>
        <a href=""><i class='bx bxl-instagram'></i></a>
    </div>
</section>

<!-- Copyright  -->
<div class="copyright">
    <p> Jayaveer All Right Reserved</p>
</div>



</div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
     <script src="website.js"></script>
     
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>