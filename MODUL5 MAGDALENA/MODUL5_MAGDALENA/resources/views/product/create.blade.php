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
                            <a class="btn btn-primary rounded " style="color : aliceblue" href="/product/create" role="button">Tambah Mobil</a>
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
                                <li><a class="dropdown-item " href="/profile">Profile</a></li>
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
        <div class="container mt-5 mb-5 pt-5">
            <div class="card shadow-lg p-3 mb-5 bg-body rounded border-0">
                <form class="m-4" method ="POST" enctype="multipart/form-data" action="/product">
                @csrf
                    <h2 ><b>Tambah Mobil</b></h2>
                    <p>Tambah Mobil Baru Anda Ke List Show Room</p>
                    <div class="mb-4">
                        <label for="name" class="form-label"><b>Nama Mobil</b></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Ferrari">
                    </div>

                    <div class="mb-4">
                        <label for="owner" class="form-label"><b>Nama Pemilik</b></label>
                        <input type="text" class="form-control" name="owner" id="owner" placeholder="Nama-NIM">
                    </div>

                    <div class="mb-4">
                        <label for="user_id" class="form-label"><b>User ID</b></label>
                        <input type="text" class="form-control" name="user_id" id="user_id" placeholder="Nama-NIM">
                    </div>

                    <div class="mb-4">
                        <label for="brand" class="form-label"><b>Brand</b></label>
                        <input type="text" class="form-control" name="brand" id="brand" placeholder="Ferrari">
                    </div>

                    <div class="mb-4">
                        <label for="purchase_order" class="form-label"><b>Tanggal Beli</b></label>
                        <input type="date" class="form-control"name="purchase_order" id="purchase_order" placeholder="11/12/2022">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label"><b>Deskripsi</b></label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Contoh: Mobil ini memiliki kecepatan diluar nalar , mengalahkan kura-kura berlari"></textarea>
                    </div>

                    <div class="mb-4">
                        <input type="file" class="custom-file-input" id="img_path" name="img_path">
                            <label class="custom-file-label" for="customFile">Choose image</label>
                    </div>

                    <fieldset class="mb-4">
                        <legend class="col-form-label col-sm-0 pt-0"><b>Status Pembayaran</b></legend>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="Lunas" value="Lunas" >
                            <label class="form-check-label" for="Lunas">Lunas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="Belum-Lunas" value="Belum-Lunas">
                            <label class="form-check-label" for="Belum-Lunas">Belum-Lunas Lunas</label>
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