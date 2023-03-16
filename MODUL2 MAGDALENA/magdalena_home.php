<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Modul 2</title>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <div class="collapse navbar-collapse" >
            <ul class="navbar-nav  mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="magdalena_home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="magdalena_booking.php">Booking</a>
                </li>  
            </ul>
        </div>
    </div>
</nav>

<div >
    <h4 class="d-flex justify-content-center m-3">WELCOME TO ESD RENT</h4>
</div>
    
<div class="container">
    <h6 class="d-flex justify-content-center bg-dark text-white p-2"> Find your best deal, here!</h6>
</div>

<form action="magdalena_booking.php" method="POST">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="mobil1.jpg" alt="Lamborghini Aventador" >
                    <div class="card-body">
                        <h5 class="card-title">Lamborghini Aventador</h5>
                        <p class="card-text" style="color: gray">
                        Rp. 5.000.000 / Day  
                        </p>
                    </div>
                    
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item" id="yes"><b>2 Kursi</b></li>
                        <li class="list-group-item" id="yes"><b>Full AC</b></li>
                        <li class="list-group-item" id="yes"><b>Mesin 6.5L</b></li>
                        <li class="list-group-item" id="yes"><b>Mobil Sport</b></li>
                    </ul>
                    
                    <div class="card-body text-center" style="background-color:rgb(238, 238, 238);">
                        <button type="submit" name="mobil" value="Lamborghini Aventador" class="btn btn-primary ">Book Now</button>
                    </div>   
                </div> 
            </div> 
      
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="mobil2.jpg" alt="Ferrari J50">
                    <div class="card-body">
                        <h5 class="card-title">Ferrari J50</h5>
                        <p class="card-text" style="color: gray">
                        Rp. 6.000.000 / Day 
                        </p>
                    </div>
                    
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item" id="yes"><b>2 Kursi</b></li>
                        <li class="list-group-item" id="yes"><b>Full AC</b></li>
                        <li class="list-group-item" id="no"><b>Mesin V8 twin Turbo</b></li>
                        <li class="list-group-item" id="yes"><b>Kecepatan 325 km/jam</b></li>
                    </ul>
      
                    <div class="card-body text-center" style="background-color:rgb(238, 238, 238);">
                        <button type="submit" name="mobil" value="Ferrari J50" class="btn btn-primary ">Book Now</button>
                    </div>   
                </div> 
            </div> 

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="mobil3.jpg" alt="Bugatti Veyron" />
                    <div class="card-body">
                        <h5 class="card-title">Bugatti Veyron</h5>
                        <p class="card-text" style="color: gray">
                        Rp. 7.000.000 / Day
                        </p>
                    </div>
      
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item" id="no"><b>2 Kursi </b></li>
                    <li class="list-group-item" id="no"><b>Full AC</b></li>
                    <li class="list-group-item" id="no"><b>Mesin 8.0L</b></li>
                    <li class="list-group-item" id="yes"><b>SylinderW16</b></li>
                </ul>
      
                <div class="card-body text-center" style="background-color:rgb(238, 238, 238);">
                    <button type="submit" name="mobil" value="Bugatti Veyron" class="btn btn-primary ">Book Now</button>
                </div>   
            </div> 
        </div>
    </div>
</form>

<br><br>
    <footer class="card-footer text-center bg-light">
        Created By: Magdalena_1202200064    
    </footer>
</body>
</html>