@extends('layouts.app')

@section('container')
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('img/slide4.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/slide1.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/slide5.png')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Logos e informacion -->
<section class="container-fluid">
    <div class="row w-80 mx-auto fila mt-4 border-top border-1">
      <div class="my-2 col-lg-6 col-md-12 col-sm-12 d-flex align-items-center wrap">
        <img src="{{asset('img/logoporcelagos.png')}}" width="150" height="120" alt="">
        <div>
          <p class="px-4 fs-4">Somos distribuidores Castel Élite,
            con más de 20 años de experiencia
            en el mercado.</p>
        </div>
      </div>

      <div class="my-2 col-lg-6 col-md-12 col-sm-12 d-flex align-items-center wrap">
        <img src="{{asset('img/logocastel.png')}}" width="150" height="120" alt="">
        <div>
          <p class="px-4 fs-4">Castel es una experiencia extraordinaria
            en diseño, innovación y vanguardia.
            Tenemos materiales exclusivos con 
            posibilidades técnicas únicas en el mercado.</p>
        </div>
      </div>
    </div>
</section>
 
<!-- Video Sucursal -->
<section id="video" class="d-flex flex-column justify-content-center pt-4 text-center w-50 m-auto video">
    <h1 class="p-3 fs-2">Encuentra tu estilo</h1>
    <!-- <video src="" height="360" autoplay></video> -->
    <iframe src="https://drive.google.com/file/d/1ZvaKiGV9qeGzNAP7hXLH5mkiaKKwBrR_/preview" width="100%" height="450" allow="autoplay"></iframe>
</section>


<!-- Cards -->
<section class="container-fluid text-center mt-5">
    <h1 class="p-3 fs-2">Inspira tus ideas</h1>
    <div class="row w-75 mx-auto row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col">
          <div class="card">
            <img src="{{asset('img/sanitario.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Sanitarios</h4>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('img/griferia.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Grifería</h4>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('img/hidroducha.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Hidroduchas</h4>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('img/lavabo.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Lavabos</h4>
            </div>
          </div>
        </div>
    </div>
</section>

<!-- Fondo curvo -->
<section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#5e1510" fill-opacity="1" d="M0,96L120,106.7C240,117,480,139,720,133.3C960,128,1200,96,1320,80L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
  </section>

  <!-- Footer -->

  <footer class="container-fluid">
    <div class="row w-100 mx-auto fila">
        <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
            <p class="fs-4">&nbsp;&nbsp;(477)-519-2525</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
              </svg>
            <p class="fs-4">&nbsp;&nbsp;porcelagos@gmail.com </p>
        </div>
            
        <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
            <p class="fs-4">&nbsp;&nbsp;Elena de Troya #308 b. Santa Elena</p>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center wrap">
            <a href="https://www.facebook.com/Porcelagos" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg>
            </a>
            <a href="https://www.instagram.com/porcelagos_tienda/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg>
            </a>
        </div>
    </div>
    <div class="row w-100 mt-2 text-center">
        <div class="col">
            <p class="fs-4 px-3 pt-3">Porcelagos &copy; 2023. Todos los derechos reservados.</p>
        </div>
    </div>
  </footer>
@endsection