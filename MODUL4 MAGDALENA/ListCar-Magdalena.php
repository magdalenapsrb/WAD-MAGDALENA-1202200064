<?php 
    include('Connector-Magdalena.php') ;
    session_start();
    
    if(!isset($_SESSION['login'])){
        header('Location: Login-Magdalena.php');
    }
    $query = "SELECT * FROM showroom_magdalena_table";
    $result = mysqli_query($conn, $query);
    $data = mysqli_num_rows($result);

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
        
    <body >
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
                            <div class="dropdown-menu" id="dropdownMenuButton" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="Profile-Magdalena.php">Profile</a>
                                <a class="dropdown-item" href="Logout-Magdalena.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <section id="MyItem" class="p-2">
            <div class="container">
                <br>
                <br>
                <br><br>
                <h3>My Show Room</h3>
                <p>List Show Room Magdalena</p>
            </div>
            <br>
            <div class="container">
                <?php
                if (mysqli_num_rows($result) == 0) { ?>
                    <center>
                        <h2 class="h-100" style="margin-top: 200px;">Empty</h2>
                    </center>
                    <div class=" d-flex justify-content-center align-items-center">
                        <h6 class="h-100">Please add car, first!</h6>
                    </div>
                <?php } ?>
                <div class="row ">
                    
                    <?php while ($data = mysqli_fetch_array($result)) { ?>
                        <div class="col-md-4 mb-5 mb-lg-4">
                            <div class="card card-home">
                                <img class="card-img-top image-awal" src="<?php echo $data['foto_mobil'] ?>"
                                    alt="<?php echo $data['foto_mobil'] ?>">
                                <div class="card-body">
                                    <h3><?php echo $data['nama_mobil'] ?></h3>
                                    <p class="card-text">
                                    <p><?php echo $data['deskripsi'] ?></p>
                                </div>
                                <div class="card-body">
                                    <a href="Detail-Magdalena.php?id=<?= $data["id_mobil"];?>" class="btn btn-primary">Tampilkan
                                    Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        
        <footer class="card-footer bg-light nt-auto text-center">
            <div class="container  mt-5 pt-5">
                <h6 class="mb-5 pb-5">&copy; Magdalena</h6>            
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>