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
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <div class="container">
                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav  mx">
                        <li class="nav-item">
                            <a class="nav-link"style="color : aliceblue" href="/dashboard">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color : aliceblue" href='/product'>MyCar</a>
                        </li>  
                    </ul>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="collapse navbar-collapse d-flex flex-row-reverse me-auto" id="navbarNav">
                            <a class="btn btn-primary rounded " style="color : aliceblue" href="showrooms/create" role="button">Tambah Mobil</a>
                        </div>
                        <!-- <div class="dropdown">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                             href="#dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                              
                        </div> -->
                    </div>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item " href="#">Profile</a></li>
                                <li><hr class="dropdown-divider"> </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                    
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <br>

        <div class="container mt-5 mb-5 p-5">
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </body>
</html>
