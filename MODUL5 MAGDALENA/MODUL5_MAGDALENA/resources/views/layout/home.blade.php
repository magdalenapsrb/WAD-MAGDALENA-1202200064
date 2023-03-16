<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <title>Showroom Magdalena</title>
    </head>
    
    <body >
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <div class="container" >
                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav  mx">
                        <li class="nav-item">
                            <a class="nav-link" href="Home-Magdalena.php">Home</a>
                        </li> 
                    </ul>
                    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="/login">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @yield('home')

        <footer class="card-footer nt-auto text-center">
            <div class="container  mt-5 pt-5">
                <h6 class="mb-5 pb-5">&copy; Magdalena Edelways </h6>            
            </div>
        </footer>
    </body>
</html>