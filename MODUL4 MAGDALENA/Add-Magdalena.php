<!-- Create-->

<?php 
    include('Connector-Magdalena.php') ;
    session_start();
        if(!isset($_SESSION['login'])){
            header('Location: Login-Magdalena.php');
        }
        

        if (isset($_POST['submit'])){
            $judul = $_POST['judul'];
            $nama = $_POST['name'];
            $merk = $_POST['merk'];
            $tanggal = $_POST['tanggal'];
            $deskripsi = $_POST['deskripsi'];
            $status_pembayaran = $_POST['status_pembayaran'];
            $foto_mobil = $_FILES['foto_mobil']['name'];
            $tmp = $_FILES['foto_mobil']['tmp_name'];
            $path = "".$foto_mobil;
            move_uploaded_file($tmp, $path);

            $query = "INSERT INTO showroom_magdalena_table VALUES ('','', '$judul', '$nama','$merk', '$tanggal', '$deskripsi','$foto_mobil','$status_pembayaran')";
            $insert = mysqli_query($conn, $query);
        
            header('Location: Add-Magdalena.php');
        
        
        }

        if(!isset($_SESSION['login'])){
            header('Location: Add-Magdalena.php');
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
                            <a class="nav-link" style="color : aliceblue" href="Home1-Magdalena.php">Home</a>
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
        <div class="container mt-5 mb-5 pt-5">
            <div class="card shadow-lg p-3 mb-5 bg-body rounded border-0">
                <form class="m-4" method ="POST" enctype="multipart/form-data">
                    <h2 ><b>Tambah Mobil</b></h2>
                    <p>Tambah Mobil Baru Anda Ke List Show Room</p>
                    <div class="mb-4">
                        <label for="judul" class="form-label"><b>Nama Mobil</b></label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Ferrari">
                    </div>

                    <div class="mb-4">
                        <label for="name" class="form-label"><b>Nama Pemilik</b></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nama-NIM">
                    </div>

                    <div class="mb-4">
                        <label for="merk" class="form-label"><b>Merk</b></label>
                        <input type="text" class="form-control" name="merk" id="merk" placeholder="Ferrari">
                    </div>

                    <div class="mb-4">
                        <label for="tanggal" class="form-label"><b>Tanggal Beli</b></label>
                        <input type="date" class="form-control"name="tanggal" id="tanggal" placeholder="11/12/2022">
                    </div>

                    <div class="mb-4">
                        <label for="deskripsi" class="form-label"><b>Deskripsi</b></label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Contoh: Mobil ini memiliki kecepatan diluar nalar , mengalahkan kura-kura berlari"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="foto_mobil" class="form-label"><b>Foto</b></label>
                        <input class="form-control " name="foto_mobil" id="foto_mobil" type="file">
                    </div>

                    <fieldset class="mb-4">
                        <legend class="col-form-label col-sm-0 pt-0"><b>Status Status Pembayaran</b></legend>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status_pembayaran" id="lunas" value="lunas" >
                            <label class="form-check-label" for="lunas">Lunas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status_pembayaran" id="belum" value="belum">
                            <label class="form-check-label" for="belum">Belum Lunas</label>
                        </div>
                    </fieldset>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" name="submit" class="btn btn-large btn-block btn-primary" > Selesai </button>
                    </div>
                </form>
            </div>
            
        </div>

        <footer class="card-footer bg-light nt-auto text-center">
            <div class="container  mt-5 pt-5">
                <h6 class="mb-5 pb-5">&copy; Magdalena</h6>            
            </div>
        </footer>
    </body>
</html>