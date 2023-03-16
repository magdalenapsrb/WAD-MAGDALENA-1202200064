
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

    <title>ShowRoom Magdalena</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
      <div class="container" >
        <div class="collapse navbar-collapse" >
          <ul class="navbar-nav  mx">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li> 
          </ul>
        </div>
        <div class="col">
          <div class="position-relative" style="margin-left: 70%; margin-top: 10px;">
            <a href="/login" class="text text-white">Login</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="px-4 py-5 px-md-20 text-lg-start">
   
   <br>
   <br>
   <div class="row gx-lg-5 ">
     <div class="col-lg-6 mb-5 mb-lg-0">
       <br> <br>
       <div class="container">

       <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
         <div class="carousel-inner">
           <div class="carousel-item active">
            <br> <br>
             <img src="mobil/login1.jpeg" class="d-block w-100" alt="...">
           </div>
           <div class="carousel-item">
             <img src="mobil/regis2.jpg" class="d-block w-100" alt="...">
           </div>
           <div class="carousel-item">
             <img src="mobil/regis3.jpg" class="d-block w-100" alt="...">
           </div>
         </div>
       </div>
         
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
         </button>
                           
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Next</span>
         </button>
       </div>
     </div>

          <div class="col-lg-6 mb-5 mb-lg-0">

                <!-- Penggunaan Form -->
                <form action="/regist" method="post">
                @csrf
                  <br> 
                <h3>Register</h3>
                  <div class="row">
                    <div class="form-outline mb-4">
                      <label for="name" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Lengkap">
                    </div>
                  </div>
                  <div class="form-outline mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat E-Mail">
                  </div>
                  
                  <div class="form-outline mb-4">
                    <label for="no_hp" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Handphone">
                  </div>
                  
                  <div class="form-outline mb-4">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Anda">
                  </div>
                  <div class="form-outline mb-4">
                    <label for="konfirmasi" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control" id="konfirmasi" name="konfirmasi" placeholder="Konfirmasi Kata Sandi Anda">
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary text-center" style="width: 30%;">Daftar</button>
                    <br><br>
                    <p>Anda sudah punya akun? <a href="/login">Login</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>