<?php 
    include('Connector-Magdalena.php') ;
    $query = "SELECT * FROM showroom_magdalena_table";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <title>Showroom Magdalena</title>
    </head>
    
    <body >
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <div class="container" >
                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav  mx">
                        <li class="nav-item">
                            <a class="nav-link" href="Home-Magdalena.php">Home</a>
                        </li> 
                    </ul>
                    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="Login-Magdalena.php">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <br>
        <section class="" style="background-color:white">
            <div class="px-4 py-5 px-md-5 text-center text-lg-start">
                <div class="container">
                    <br>
                    <br>
                    <br>
                    <div class="row gx-lg-9 align-items-center">
                        <div class="col-lg-6 mb-6 mb-lg-5">
                            <br>
                            <br>
                            <h2 class="my-5 display-3 fw-bold ls-tight"> Selamat Datang Di Show Room <br/> </h2> 
                            <h3 style="color: hsl(217, 10%, 50.8%)">
                                Show Room termurah se-Bandung Raya
                            </h3> <br>
                            <br> 
                            <br>
                            <h4> 
                                <img src="logo-ead.png" width="100px" class="m-3"> MAGDALENA_1202200064
                            </h4> 
                            <br>
                        </div>
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img src="mobil1.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="mobil2.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="mobil3.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="card-footer nt-auto text-center">
            <div class="container  mt-5 pt-5">
                <h6 class="mb-5 pb-5">&copy; Magdalena Edelways </h6>            
            </div>
        </footer>
    </body>
</html>