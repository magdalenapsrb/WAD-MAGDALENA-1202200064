<?php
  include('Connector-Magdalena.php');
  session_start();

  if(!isset($_SESSION['login'])){
    header('Location: Login-Magdalena.php');
  }

  if(isset($_SESSION['login'])){
    if(isset($_COOKIE['navbar'])){
        $navbar=$_COOKIE['navbar'];
        if(($navbar) == ("#000000")){
            $tulisan = "#FFFFFF";
        }else{
            $tulisan = "#FF0000";
        }
    }
    
    else{
        $navbar="#92BAF3";
    }}

    

  else{
      $navbar="#92BAF3";
  } 




?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
            
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <title>Showroom Magdalena</title>
    </head>
    
    <body  >
        <nav class="navbar navbar-expand-lg navbar-light fixed-top"style="background-color: <?= $navbar?>"  >
            <div class="container">
                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav  mx">
                        <li class="nav-item">
                            <a class="nav-link"style="color : aliceblue" href="Home1-Magdalena.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color : aliceblue" href="ListCar-Magdalena.php">MyCar</a>
                        </li>  
                    </ul>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="collapse navbar-collapse d-flex flex-row-reverse me-auto" id="navbarNav">
                            <a class="btn btn-primary rounded " style="color : aliceblue" href="Add-Magdalena.php" role="button">Tambah Mobil</a>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                             href="#dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: <?=$tulisan?>">
                             <?= $_SESSION['nama'];?>
                            </button>
                              
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <br>
        <section class="" style="background-color:white">
            <div class="px-4 py-5 px-md-5 text-center text-lg-start">
                <div class = "hero">
                    <div class="container">
                        <br>
                        <br>
                        <br>
                        <div class="row gx-lg-9 align-items-center">
                            <div class="col-lg-6 mb-6 mb-lg-5">
                                <br>
                                <br>
                                <h2 class="my-5 display-3 fw-bold ls-tight"> Selamat Datang Di Show Room , <?= $_SESSION['nama'];?> <br/> </h2> 
                                <h3 style="color: hsl(217, 10%, 50.8%)">
                                    Show Room termurah se-Bandung Raya
                                </h3> <br>
                                <a href="ListCar-Magdalena.php" style="background-color: #b84592; color:#ffffff;" type="submit" class="btn btn-primary btn-sm" role="button" aria-pressed="true">MyCar</a>
                                <br> 
                                <br>
                                <h4> 
                                    <img src="logo-ead.png" width="100px" class="m-3"> MAGDALENA_1202200064
                                </h4> 
                                <br>
                            </div>
                            <div class="col-lg-5 mb-5 mb-lg-0">
                                <div class="card">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" >
                                                <img src="mobil1.png" class="d-block w-100" alt="...">
                                            </div>
                                            
                                            <div class="carousel-item active">
                                                <img src="mobil2.png" class="d-block w-100" alt="...">
                                            </div>
                                            
                                            <div class="carousel-item">
                                                <img src="mobil3.png" class="d-block w-100" alt="...">
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