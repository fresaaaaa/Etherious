@extends('layouts.main1')

@section('container')
      <div class="container">
        <h1 class="my-4 judul text-center">Anime Terpopuler</h1>
        <div class="row d-grid gap-3">
            <div class="card border-0">
              <div class="card-body">
                <div class="row align-items-center d-flex justify-content-center">
                  <div class="col-lg-1 col-md-2 col-sm-12 text-center">
                    <p class="display-3">#1</p>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                    <img src="img/anime/spy_x_family.webp" width="400rem" class="rounded img-fluid" alt="">
                  </div>
                  <div class="col-lg-5 col-md-6 col-sm-12 fs-6">
                    <p class="pt-2 fs-5">
                      <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                    </p>
                    <div class="row row-cols-4 row-cols-md-1 row-cols-sm-12 d-flex justify-content-center">
                      <p id="icon"><i class="bi bi-person-fill"></i> 858rb</p>
                      <p id="icon"><i class="bi bi-camera-video-fill"></i> TV</p>
                      <p id="icon"><i class="bi bi-star-fill"></i> 8.84</p>
                      <p id="icon"><i class="bi bi-collection-fill"></i> 12 Eps</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12 col-sm-12 mt-3 text-center fs-2 flex-grow-1">
                    <a href="#" class="anime"><i class="bi bi-instagram px-2"></i></a>
                    <a href="#" class="anime"><i class="bi bi-twitter px-2"></i></a>
                    <a href="#" class="anime"><i class="bi bi-twitch px-2"></i></a>
                    <a href="#" class="anime"><i class="bi bi-youtube px-2"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card border-0">
              <div class="card-body">
                <div class="row align-items-center d-flex justify-content-center">
                  <div class="col-lg-1 col-md-2 col-sm-12 text-center">
                    <p class="display-3">#2</p>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                    <img src="img/anime/aot.webp" width="400rem" class="rounded img-fluid" alt="">
                  </div>
                  <div class="col-lg-5 col-md-6 col-sm-12 fs-6">
                    <p class="pt-2 fs-5">
                      <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                    </p>
                    <div class="row row-cols-4 row-cols-md-1 row-cols-sm-12 d-flex justify-content-center">
                      <p id="icon"><i class="bi bi-person-fill"></i> 858rb</p>
                      <p id="icon"><i class="bi bi-camera-video-fill"></i> TV</p>
                      <p id="icon"><i class="bi bi-star-fill"></i> 8.84</p>
                      <p id="icon"><i class="bi bi-collection-fill"></i> 12 Eps</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12 col-sm-12 mt-3 text-center fs-2 flex-grow-1">
                    <a href="#" class="anime"><i class="bi bi-instagram px-2"></i></a>
                    <a href="#" class="anime"><i class="bi bi-twitter px-2"></i></a>
                    <a href="#" class="anime"><i class="bi bi-twitch px-2"></i></a>
                    <a href="#" class="anime"><i class="bi bi-youtube px-2"></i></a>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>

    <nav class="mt-5">
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link border-0" href="#" id="page"><i class="bi bi-caret-left-fill"></i></a></li>
        <li class="page-item"><a class="page-link border-0" href="#" id="page">1</a></li>
        <li class="page-item"><a class="page-link border-0" href="#" id="page">2</a></li>
        <li class="page-item"><a class="page-link border-0" href="#" id="page"><i class="bi bi-caret-right-fill"></i></a></li>
      </ul>
    </nav>
@endsection
