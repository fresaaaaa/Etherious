@extends('dashboard-admin.layouts.main2')

@section('container')
    <!-- {{-- Hero --}} -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
      </div>
      <div class="container-fluid my-4">
        <div class="carousel-inner">
        <div class="carousel-item active text-center">
          <img src="img/hero/hero-1.jpg" class="rounded" alt="">
          <div class="container">
            <div class="carousel-caption text-start">
              <p class="genre">Genre Anime</p>
              <h1>Judul Anime</h1>
              <p class="text-truncate">Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg hero shadow-lg" href="/detail">Tonton Sekarang</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item text-center">
          <img src="img/hero/hero-1.jpg" class="rounded" alt="">
          <div class="container">
            <div class="carousel-caption text-start">
              <p class="genre">Genre Anime</p>
              <h1>Judul Anime</h1>
              <p class="text-truncate">Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg hero shadow-lg" href="/detail">Tonton Sekarang</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item text-center">
          <img src="img/hero/hero-1.jpg" class="rounded" alt="">
          <div class="container">
            <div class="carousel-caption text-start">
              <p class="genre">Genre Anime</p>
              <h1>Judul Anime</h1>
              <p class="text-truncate">Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg hero shadow-lg" href="/detail">Tonton Sekarang</a></p>
            </div>
          </div>
        </div>
      </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- {{-- Hero End --}} -->

    <!-- {{-- Musim Anime --}} -->
    <div class="container">
    <a href="/musim" class="text-decoration-none" id="item">
      <h3 class="mb-2">Anime Fall 2022<i class="bi bi-chevron-right"></i></h3>
    </a>
    <div class="row">
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- {{-- Musim Anime End --}} -->

    <!-- {{-- Anime Sedang Tayang --}} -->
    <div class="container my-3">
    <a href="/animeongoing" class="text-decoration-none" id="item"><h3 class="mb-2">Anime Sedang Tayang<i class="bi bi-chevron-right"></i></h3></a>
    <div class="row">
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>
    <!-- {{-- Anime Sedang Tayang End --}} -->

    <!-- {{-- Anime Terpopuler --}} -->
    <div class="container">
    <a href="/animeterpopuler" class="text-decoration-none" id="item"><h3 class="mb-2">Anime Terpopuler<i class="bi bi-chevron-right"></i></h3></a>
    <div class="row">
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg border-0" style="width: 18rem;">
          <a href="/detail" class="anime text-decoration-none">
          <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Anime</h5>
          </a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>
    <!-- {{-- Anime Terpopuler End --}} -->
@endsection
