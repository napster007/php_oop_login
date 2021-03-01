<?php
include 'includes/autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="components/bootstrap-4.6.0/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="components/bootstrap-4.6.0/css/bootstrap.min.css">
    <script src="components/bootstrap-4.6.0/js/bootstrap.min.js"></script>
    <script src="components/bootstrap-4.6.0/js/bootstrap.js"></script>
    <script src="components/js/jquery-3.5.1.min.js"></script>

    
    <title>Index</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <ul class="nav justify-content-end ">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" >Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <!-- <div class="col-m">
                bbody
               
            </div> -->
        
            <div class="col-m">
                
                <img src="..." class="rounded float-start" alt="...">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                        <img src="components/imgs/carousel/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                        <img src="components/imgs/carousel/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="components/imgs/carousel/3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
            </div>


            <!-- <div class="col-m">

                <figure class="figure">
                    <img src="..." class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
                </figure>
            </div> -->



          <!--   <div class="col-m">
                
                
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                        <img src="components/imgs/carousel/1.jpg" height="400px" width="800px" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                        <img src="components/imgs/carousel/2.jpg" height="400px" width="800px" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="components/imgs/carousel/3.jpg" height="400px" width="800px" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
            </div> -->

        </div>
        
       
        
    </div>
</body>
</html>