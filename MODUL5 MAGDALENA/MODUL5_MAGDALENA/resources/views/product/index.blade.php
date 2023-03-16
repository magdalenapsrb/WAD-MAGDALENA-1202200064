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
                            <a class="nav-link" style="color : aliceblue" href="/showroom">MyCar</a>
                        </li>  
                    </ul>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="collapse navbar-collapse d-flex flex-row-reverse me-auto" id="navbarNav">
                            <a class="btn btn-primary rounded " style="color : aliceblue" href="/product/create" role="button">Tambah Mobil</a>
                        </div>
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
        <section id="MyItem" class="p-2">
            <div class="container">
                <br>
                <br>
                <br><br>
                <h3>My Show Room</h3>
                <p>List Show Room Magdalena</p>
                <div class="container">
                @foreach ($products as $product)
                    <div class="row">
                    <div class=" col-md-4 mb-5 mb-lg-4">
                        <div class="card justify-center" style="width: 20rem;" align="center">
                            <img src="/image/{{$product->image}}" alt="gambar">  
                                <div class="card-body justify-center">
                                    <h5 class="card-title">{{$product->name}}</h5>
                                    <p class="card-text">{{$product->description}}</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="row g-1">
                                            <div class="col">
                                                <form action="/product/{{ $product-> id }}" method ="POST" style="display: inline-block">
                                                    @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                @endforeach
                </div>
            </div>
            <br>
            
                
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