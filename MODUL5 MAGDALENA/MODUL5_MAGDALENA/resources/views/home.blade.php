@extends('layout.home')
@section('home')

<br>
        <section class="" style="background-color:white">
            <div class="px-4 py-5 px-md-5 text-center text-lg-start">
                <div class="container">
                    <br>
                    <br>
                    <div class="row gx-lg-9 align-items-center">
                        <div class="col-lg-6 mb-6 mb-lg-5">
                            <br>
                            <br>
                            <h2 class="my-5 display-3 fw-bold ls-tight"> Selamat Datang Di Show Room <br/> </h2> 
                            <h3 style="color: hsl(217, 10%, 50.8%)">
                                Show Room termurah se-Bandung Raya
                            </h3> <br>
                            <br> 
                            <br>
                            <h4> 
                                <img src="mobil/logo-ead.png" width="100px" class="m-3"> MAGDALENA_1202200064
                            </h4> 
                            <br>
                        </div>
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img src="mobil/mobil1.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="mobil/mobil2.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="mobil/mobil3.png" class="d-block w-100" alt="...">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection