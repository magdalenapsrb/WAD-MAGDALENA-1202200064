<?php 
  $name = $_POST['name'];
  $date = $_POST['date'];
  $time = $_POST['checkin'];
  $masuk = date('d/m/Y h:i:s', strtotime($date)) ." ". date('h:i:s', strtotime($time));
  $duration = $_POST['duration'];
  $keluar = date('d/m/Y h:i:s', strtotime('+'.$duration.'hours', strtotime("$time $masuk")));
  $phone = $_POST['phone'];
  $mobil =$_POST['mobil'];
  $harga_service = 0;

  // service
  if (isset($_POST['service'])) {
    $service = $_POST['service'];
  }
  else {
    $service = '';
  }
  //jumlah
  if($mobil == "Lamborghini Aventador"){
    $jumlah = $duration*5000000;
  }else if($mobil == "Ferrari J50"){
    $jumlah = $duration*6000000;
  }else{
    $jumlah = $duration*7000000;
  }    
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>ESD VENUE</title>    
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

<div class="container text-center p-3">
  <h5>Thank you <?php echo $name?> for Reserving</h5>
    <h6>Please double check your reservation details</h6>
</div>

<div class="container">
  <table class="table table-secondary">
    <tr >
      <th scope="col">Booking Number</th>
      <th scope="col">Name</th>
      <th scope="col">Check-in</th>
      <th scope="col">Check-out</th>
      <th scope="col">Cars Type</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Service</th>
      <th scope="col">Total Price</th>
    </tr>
    
    <tr>
      <td><?php echo rand();?></td>
      <td><?php echo $name;?></td>
      <td><?php echo $masuk;?></td>
      <td><?php echo $keluar;?></td>
      <!-- mobil -->
      <td> 
        <?php echo $mobil;?>
      </td>
      <td><?php echo $phone;?></td>
      <!-- service -->
      <td>
        <?php
        if (!empty($service)) {
          echo '<ul>';
          foreach ($service as $myservice) {
            if ($myservice == "Healtyprotocol") {
              $harga_service += 25000;
              echo '<li>' . $myservice . '</li>';
            }
            else if($myservice == "Driver") {
              $harga_service += 100000;
              echo '<li>' . $myservice . '</li>';
            }
            else {
              $harga_service += 250000;
              echo '<li>' . $myservice . '</li>';
            }
          }

          echo '</ul>';
        } else {
          echo 'Tidak ada service yang ditambahkan';
        }
        ?>
      </td>
      <!-- jumlah -->
      <td>
        <?php echo 'Rp.' . ($jumlah+$harga_service)?>
      </td>
    </tr>
  </table>
</div>
        
<br><br>        
<br><br>

<footer class="card-footer text-center bg-light">
  Created By: Magdalena_1202200064    
</footer> 

</body>
</html>