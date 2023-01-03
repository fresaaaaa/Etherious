@extends('layouts.main1')

@section('container')
  <div class="container">
    <h1 id="merah" class="py-4 text-center">Fall 2022</h1>
    <div class="row">
      <div class="col">
        <div class="card border-0">
          <div class="card-body">
            <div class="row align-items-center d-flex justify-content-center">
              <div class="col-lg-3 col-md-6 col-sm-12 text-center pb-2">
                <img src="img/anime/aot.webp" width="400rem" class="rounded img-fluid" alt="">
              </div>
              <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                <p class="fs-5">
                  <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                </p>
                <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                  <div><i class="bi bi-person-fill"></i> 858rb</div>
                  <div><i class="bi bi-star-fill"></i> 8.84</div>
                  <div><i class="bi bi-collection-fill"></i> 12 Eps</div>
                  <div><i class="bi bi-calendar-fill"></i> 01 Okt 2022</div>
                  <div>
                    <a href="#" class="anime"><i class="bi bi-instagram pe-2"></i></a>
                    <a href="#" class="anime"><i class="bi bi-twitter pe-2"></i></a>
                    <a href="#" class="anime"><i class="bi bi-twitch pe-2"></i></a>
                    <a href="#" class="anime"><i class="bi bi-youtube pe-2"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-0">
          <div class="card-body">
            <div class="row align-items-center d-flex justify-content-center">
              <div class="col-lg-3 col-md-6 col-sm-12 text-center pb-2">
                <img src="img/anime/spy_x_family.webp" width="400rem" class="rounded img-fluid" alt="">
              </div>
              <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                <p class="fs-5">
                  <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                </p>
                <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                  <div><i class="bi bi-person-fill"></i> 858rb</div>
                  <div><i class="bi bi-star-fill"></i> 8.84</div>
                  <div><i class="bi bi-collection-fill"></i> 12 Eps</div>
                  <div><i class="bi bi-calendar-fill"></i> 01 Okt 2022</div>
                  <div>
                    <a href="#" class="anime"><i class="bi bi-instagram pe-2"></i></a>
                    <a href="#" class="anime"><i class="bi bi-twitter pe-2"></i></a>
                    <a href="#" class="anime"><i class="bi bi-twitch pe-2"></i></a>
                    <a href="#" class="anime"><i class="bi bi-youtube pe-2"></i></a>
                  </div>
                </div>
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
  </div>
@endsection