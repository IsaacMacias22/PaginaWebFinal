@extends('layouts.app')

@section('container')
     <!-- Título -->
     <section class="d-flex justify-content-center text-center">
        <h1 class="fs-1">CATÁLOGO 2024</h1>
    </section>

    <!-- Catalogo -->
    <section class="container-fluid">
        <div class="row w-100 fila mt-2 mx-auto text-center">
            <div class="col-lg-9 col-md-12 col-sm-12 d-flex align-items-center wrap p-0" id="contenedor-img">
                <img src="./img/fonfocatalogo.png" style="height: 400px; width: 100%; opacity: 50%;" class="imagen">
                <img src="./img/catalogo.png" style="height: 75%;" id="catalogo">
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 d-flex align-items-center wrap p-0" id="contenedor-img">
                <div style="background-color: #BAA676; height: 400px; width: 100%;" class="imagen"></div>
                <a class="btn btn-outline-light" id="boton" href="https://castel.com.mx/catalogos/CatalogoCastel24.pdf" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                      </svg>&nbsp;&nbsp;<span class="fs-2 text-white">Descargar</span></a>
            </div>
        </div>
    </section>


    {{-- Desgloce de Productos --}}
    <section class="container-fluid text-center mt-5">
        <div class="row w-75 mx-auto row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach ($productos as $index => $producto)
                @if($index > 0 && $index % 4 == 0)
                  </div><div class="row w-75 mx-auto row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                @endif
                <div class="col">
                    <div class="card d-flex align-items-center">
                      <img src="{{asset('storage/images/' . $producto->imagen)}}" alt="Imagen" width="50" style="width:150px; height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title">{{$producto->categoria}}</h4>
                            <p class="card-text">{{$producto->descripcion}}</p>
                            <p class="card-text">${{$producto->precio}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
    </section>

    <!-- Promociones -->
    <section>
        <div class="row w-50 mx-auto text-center mt-3 p-3" id="promociones">
            <h1 class="mb-3 fs-2">Promociones</h1>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner carousel-tamanio">
                  <div class="carousel-item active" data-bs-interval="5000">
                    <img src="{{asset('img/promociones1.jpg')}}" class="d-block w-100" alt="..." style="height: 500px;">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img src="{{asset('img/promociones4.jpg')}}" class="d-block w-100" alt="..." style="height: 500px;">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img src="{{asset('img/promociones5.jpg')}}" class="d-block w-100" alt="..." style="height: 500px;">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img src="{{asset('img/promociones2.jpg')}}" class="d-block w-100" alt="..." style="height: 500px;">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img src="{{asset('img/promociones6.jpg')}}" class="d-block w-100" alt="..." style="height: 500px;">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img src="{{asset('img/promociones7.jpg')}}" class="d-block w-100" alt="..." style="height: 500px;">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img src="{{asset('img/promociones3.jpg')}}" class="d-block w-100" alt="..." style="height: 500px;">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
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