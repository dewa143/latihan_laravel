<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet" >

   @include('homelayouts.navbar')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('gambar/slide1.jpg')}}" class="d-block w-100" style=" height: 500px; opacity: 0.8; filter: brightness(50%);" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Absensi Perusahaan XYZ</h5>
        <a href="#"><button type="button" class="btn btn-outline-info">Absen Sekarang</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('gambar/slide2.jpg')}}" class="d-block w-100" style=" height: 500px; opacity: 0.8; filter: brightness(50%);" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Cepat dan Efisien</h5>
        <a href="#"><button type="button" class="btn btn-outline-info">Absen Sekarang</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('gambar/slide3.jpg')}}" class="d-block w-100" style=" height: 500px; opacity: 0.8; filter: brightness(50%);" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bisa Absensi Dimanapun</h5>
        <a href="#"><button type="button" class="btn btn-outline-info">Absen Sekarang</button></a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>

  </body>
</html>
