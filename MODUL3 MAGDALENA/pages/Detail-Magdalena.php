<!-- Update -->

<?php 
    
    include('connector.php') ;
    $id=$_GET['id'];
    $query = "SELECT * FROM showroom_magdalena_table WHERE id_mobil = '$id'";
    $result = mysqli_query($conn, $query);

    
    if (isset($_POST['edit'])){
        $judul = $_POST['judul'];
        $nama = $_POST['name'];
        $merk = $_POST['merk'];
        $tanggal = $_POST['tanggal'];
        $deskripsi = $_POST['deskripsi'];
        $status_pembayaran = $_POST['status_pembayaran'];
    
        $edit = "UPDATE showroom_magdalena_table SET nama_mobil='$judul', pemilik_mobil='$nama' , merk_mobil='$merk' , tanggal_beli='$tanggal' , deskripsi='$deskripsi', status_pembayaran='$status_pembayaran' where id_mobil = '$id' ";
        $update = mysqli_query($conn, $edit);

        header('Location: ListCar-Magdalena.php');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Showroom EAD</title>
</head>

<body >
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container" >
            <div class="collapse navbar-collapse" >
                <ul class="navbar-nav  mx">
                    <li class="nav-item">
                        <a class="nav-link" href="Home-Magdalena.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ListCar-Magdalena.php">MyCar</a>
                    </li>  
                </ul>
            </div>
        </div>
    </nav>
<br>

    <div class="container mt-5 mb-5 p-5">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded border-0">
            <div class="row p-5">
                <?php 
                    $data = mysqli_fetch_array($result);
                    ?>
                <h2 class="text-center pb-2 "><b>Detail Mobil</b></h2>
                <div class="col text-center">
                <img class="card-img-top image-awal" src="<?php echo $data['foto_mobil'] ?>"
                                alt="<?php echo $data['foto_mobil'] ?>"> 
                    <hr style='height: 3px; border-radius: 5px; color: rgb(0, 106, 255);'>
                </div>

                <p class="card-text"><b>Nama Mobil</b></p>
                <p class="card-text"><?= $data['nama_mobil'];?></p>

                <p class="card-text"><b>Pemilik Mobil</b></p>
                <p class="card-text"><?= $data['pemilik_mobil'];?></p>

                <p class="card-text"><b>Merk Mobil</b></p>
                <p class="card-text"><?= $data['merk_mobil'];?></p>

                <p class="card-text"><b>Tanggal Beli</b></p>
                <p class="card-text"><?= $data['tanggal_beli'];?></p>

                <p class="card-text"><b>Deskripsi</b></p>
                <p class="card-text"><?= $data['deskripsi'];?></p>

                <p class="card-text"><b>Status Pembayaran</b></p>
                <p class="card-text"><?= $data['status_pembayaran'];?></p>

                <br><br>

                <div class='text-center'>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        style="width:23%">Sunting</button>
                    <a href="delete.php?id=<?= $data["id_mobil"]; ?>" class="btn btn-danger"
                        style="width:23%;">Hapus</a>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sunting</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?= $data['id_mobil']?>">
                        
                        <div class="mb-4">
                            <label for="judul" class="form-label"><b>Nama Mobil</b></label>
                            <input type="text" class="form-control" name="judul" value="<?= $data['nama_mobil']?>" id="judul">
                        </div>

                        <div class="mb-4">
                            <label for="name" class="form-label"><b>Pemilik Mobil</b></label>
                            <input type="text" class="form-control" name="name" id="name" value="<?= $data['pemilik_mobil']?> "id="name">
                        </div>

                        <div class="mb-4">
                            <label for="merk" class="form-label"><b>Merk</b></label>
                            <input type="text" class="form-control" name="merk" id="merk" value="<?= $data['merk_mobil']?> " id = "merk">
                        </div>

                        <div class="mb-4">
                            <label for="tanggal" class="form-label"><b>Tanggal Beli</b></label>
                            <input type="date" class="form-control" name="tanggal" value="<?= $data['tanggal_beli']?> " id="tanggal">
                        </div>

                        <div class="mb-4">
                            <label for="deskripsi" class="form-label"><b>Deskripsi</b></label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= $data['deskripsi']?></textarea>
                        </div>

                        <fieldset class="mb-4">
                            <legend class="col-form-label col-sm-1 pt-0"><b>Status Pembayaran</b></legend>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_pembayaran" id="lunas" 
                                value="lunas" <?php if ($data['status_pembayaran'] == "lunas") {echo 'checked';}?>>
                                <label class="form-check-label" for="lunas">lunas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_pembayaran" id="belum"
                                value="belum" <?php if ($data['status_pembayaran'] == "belum") {echo 'checked';}?>>
                                <label class="form-check-label" for="belum">belum</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" name="edit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>       
            </div>
        </div>
    </div>

    <footer class="card-footer bg-light nt-auto text-center">
        <div class="container  mt-5 pt-5">
            <h6 class="mb-5 pb-5">&copy; Magdalena</h6>
        </div>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</html>