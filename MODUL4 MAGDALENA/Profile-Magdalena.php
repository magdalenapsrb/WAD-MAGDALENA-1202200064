<?php
    include ('Connector-Magdalena.php');
    session_start();

    if(!isset($_SESSION['login'])){
        header('Location: Login-Magdalena.php');
        exit;
    }

    if(isset($_SESSION['login'])){
        if(isset($_COOKIE['navbar'])){
            $navbar=$_COOKIE['navbar'];
            if(($navbar) == ("#303337")){
                $tulisan = "#ffff";
            }else{
                $tulisan = "#0000";
            }
        }
        
        else{
            $navbar="#92BAF3";
        }}
    
        
    
    else{
        $navbar="#92BAF3";
    } 

    
    
    if (isset($_POST['update'])){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $nohp = $_POST['nohp'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        $navbar = $_POST['navbar'];
        $email = $_SESSION['email'];

        setcookie('navbar', $navbar, time()+1200);
        
        if($password == $konfirmasi){
            $query = "UPDATE user_magdalena SET nama = '$name', email = '$email', password='$password', no_hp='$nohp' WHERE email = '$email'";
            $update = mysqli_query($conn, $query);
        }
    }

    $email = $_SESSION['email'];
    $result = mysqli_query($conn,"SELECT * FROM user_magdalena WHERE email='$email'");

    $row = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

        <title>ShowRoom Magdalena</title>
    </head>

    <body style="background-color:#FEF7E6;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top"style="background-color: <?= $navbar?>"  >
            <div class="container">
                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav  mx">
                        <li class="nav-item">
                            <a class="nav-link " style="color : aliceblue" href="Home1-Magdalena.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"style="color : aliceblue" href="ListCar-Magdalena.php">MyCar</a>
                        </li>  
                    </ul>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="collapse navbar-collapse d-flex flex-row-reverse me-auto" id="navbarNav">
                            <a class="btn btn-primary rounded " href="Add-Magdalena.php" role="button">Tambah Mobil</a>
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

        <div class="container">
            <br>
            <br>
            <div class="row d-flex justify-content-center" style="margin: 3% 0 11% 0;">
                <div class="col-md-15">
                        <form method="POST">
                            <div class="card-title text-center">
                                <h5 class="mt-4">Profile</h5>
                            </div>

                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" id="email" name="email"
                                        value="<?= $row['email']?>" readonly>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="<?= $row['nama']?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="NoHP" class="col-sm-3 col-form-label">Nomor Handphone</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="NoHP" name="nohp"
                                            value="<?= $row['no_hp']?>">
                                    </div>
                                </div>
                                <hr style="height: 1.5px;">

                                <div class="mb-3 row">
                                    <label for="password" class="col-sm-3 col-form-label">Kata Sandi</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" name="password"
                                            value="<?= $row['password']?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="konfirmasi" class="col-sm-3 col-form-label">Konfirmasi Sandi</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="konfirmasi" name="konfirmasi"
                                            value="<?= $row['password']?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="navbar" class="col-sm-3 col-form-label">Warna Navbar</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="navbar" id="navbar">
                                            <option value="#92BAF3"
                                            <?php if($navbar == "#92BAF3"){echo "selected";}?>>Blue Ocean
                                            </option>

                                            <option value="#303337"
                                            <?php if($navbar == "#303337"){echo "selected";}?>>Dark Boba
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class='text-center'>
                                    <button type="submit" name="update" class="btn btn-primary"
                                        style="width: 12%;">Simpan</button>
                                    <a href="" class="btn btn-warning" style="width: 12%;">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>