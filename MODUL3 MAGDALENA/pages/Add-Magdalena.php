<!-- Create-->

<?php 
    include('connector.php') ;

    if (isset($_POST['submit'])){
        $judul = $_POST['judul'];
        $nama = $_POST['name'];
        $merk = $_POST['merk'];
        $tanggal = $_POST['tanggal'];
        $deskripsi = $_POST['deskripsi'];
        $status_pembayaran = $_POST['status_pembayaran'];
        $foto_mobil = $_FILES['foto_mobil']['name'];
        $tmp = $_FILES['foto_mobil']['tmp_name'];
        $path = "img/".$foto_mobil;
        move_uploaded_file($tmp, $path);

        $query = "INSERT INTO showroom_magdalena_table VALUES ('', '$judul', '$nama','$merk', '$tanggal', '$deskripsi','$foto_mobil','$status_pembayaran')";
        $insert = mysqli_query($conn, $query);
    
        header('Location: Add-Magdalena.php');
    
    
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <title>ShowRoom ESD</title>
    </head>

    <body >
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <div class="container" >
                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav  mx">
                         <li class="nav-item">
                            <a class="nav-link" href="ListCar-Magdalena.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ListCar-Magdalena.php">MyCar</a>
                        </li>  
                    </ul>
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