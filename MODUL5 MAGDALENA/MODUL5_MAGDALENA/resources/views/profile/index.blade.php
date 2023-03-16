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
                                        <a>: {{ auth()->user()->email}}</a>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                            <a>: {{ auth()->user()->name}}</a>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="NoHP" class="col-sm-3 col-form-label">Nomor Handphone</label>
                                    <div class="col-sm-9">
                                    <a>: {{ auth()->user()->no_hp}}</a>
                                    </div>
                                </div>
                                <hr style="height: 1.5px;">

                                <div class="mb-3 row">
                                    <label for="password" class="col-sm-3 col-form-label">Kata Sandi</label>
                                    <div class="col-sm-9">
                                    <a>: {{ auth()->user()->password}}</a>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="navbar" class="col-sm-3 col-form-label">Warna Navbar</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="navbar" id="navbar">
                                            <option value="#92BAF3">Blue Ocean
                                            </option>

                                            <option value="#303337">Dark Boba
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>