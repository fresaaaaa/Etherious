@extends('layouts.main1')

@section('container')
  <div class="container-fluid mt-4">
    @foreach ($animes as $anime)
    <div class="row mx-2">
      <div class="col-lg-4 col-md-5 col-sm-12">
        <img src="{{ asset('storage/' . $anime->image) }}" width="300rem" class="rounded mb-3" alt="">
        <div class="card border-0" style="width: 20rem; height: 4rem;">
          <a href="#" class="text-decoration-none">
          <div class="card-body">
            <div class="row fs-5 info">
              <div class="col-10"><p>MyAnimeList</p></div>
              <div class="col-2"><i class="bi bi-box-arrow-up-right"></i></div>
            </div>
          </div>
        </a>
        </div>
        <div class="col mt-3 d-grid gap-2">
          <div>
            <p class="fs-5 judul">Tipe Anime</p>
            <p class="isi">{{ $anime->tipe_anime }}</p>
          </div>
          <div>
            <p class="fs-5 judul">Status</p>
            <p class="isi">{{ $anime->status }}</p>
          </div>
          <div>
            <p class="fs-5 judul">Tanggal Tayang</p>
            <p class="isi">{{ $anime->tanggal_tayang }}</p>
          </div>
          <div>
            <p class="fs-5 judul">Studio</p>
            <p class="isi">{{ $anime->studio }}</p>
          </div>
          <div>
            <p class="fs-5 judul">Musim</p>
            <p><a href="#" class="text-decoration-none isi-link">{{ $anime->musim }}</a></p>
          </div>
          <div>
            <p class="fs-5 judul">Genre</p>
            <p><a href="#" class="text-decoration-none isi-link">{{ $anime->genre }}</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-7 col-sm-12">
        <h1 class="judul">{{ $anime->judul }}</h1>
        <p class="fs-5 judul">{{ $anime->judul }}</p>
        <p class="isi">{{ $anime->sinopsis }}</p>
        <p class="fs-5 judul">Tersedia di</p>
          <div class="row">
            <div class="col-lg-6 col-sm-12 d-grid gap-2 fs-5 mt-2">
              <div class="card border-0">
                <a href="https://www.bilibili.tv/id/play/1005426" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info align-items-center">
                    <div class="col-2">
                      <img src="img/link/bilibili.webp" width="50rem">
                    </div>
                    <div class="col-8">
                      Bilibili
                    </div>
                    <div class="col-2">
                      <i class="bi bi-box-arrow-up-right"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
              <div class="card border-0">
                <a href="#" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info align-items-center">
                    <div class="col-2">
                      <img src="img/link/catchplay-plus.webp" width="50rem">
                    </div>
                    <div class="col-8">
                      Catchplay+
                    </div>
                    <div class="col-2">
                      <i class="bi bi-box-arrow-up-right"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
              <div class="card border-0">
                <a href="#" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info align-items-center">
                    <div class="col-2">
                      <img src="img/link/crunchyroll.webp" width="50rem">
                    </div>
                    <div class="col-8">
                      Crunchyroll
                    </div>
                    <div class="col-2">
                      <i class="bi bi-box-arrow-up-right"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
              <div class="card border-0">
                <a href="#" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info align-items-center">
                    <div class="col-2">
                      <img src="img/link/hotstar.webp" width="50rem">
                    </div>
                    <div class="col-8">
                      Hotstar
                    </div>
                    <div class="col-2">
                      <i class="bi bi-box-arrow-up-right"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12 d-grid gap-2 fs-5 mt-2">
              <div class="card border-0">
                <a href="#" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info align-items-center">
                    <div class="col-2">
                      <img src="img/link/iflix.webp" width="50rem">
                    </div>
                    <div class="col-8">
                      Iflix
                    </div>
                    <div class="col-2">
                      <i class="bi bi-box-arrow-up-right"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
              <div class="card border-0">
                <a href="#" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info align-items-center">
                    <div class="col-2">
                      <img src="img/link/iqiyi.webp" width="50rem">
                    </div>
                    <div class="col-8">
                      Iqiyi
                    </div>
                    <div class="col-2">
                      <i class="bi bi-box-arrow-up-right"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
              <div class="card border-0">
                <a href="#" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info align-items-center">
                    <div class="col-2">
                      <img src="img/link/netflix.webp" width="50rem">
                    </div>
                    <div class="col-8">
                      Netflix
                    </div>
                    <div class="col-2">
                      <i class="bi bi-box-arrow-up-right"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
              <div class="card border-0">
                <a href="#" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info align-items-center">
                    <div class="col-2">
                      <img src="img/link/prime.webp" width="50rem">
                    </div>
                    <div class="col-8">
                      Prime Video
                    </div>
                    <div class="col-2">
                      <i class="bi bi-box-arrow-up-right"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>
          </div>
        <p class="fs-5 mt-4 judul">Tema Lagu</p>
          <div class="row">
            <div class="col-lg-6 col-sm-12 isi">
              <p class="">Opening</p>
              <p><a href="#" class="text-decoration-none isi-link">"{{ $anime->link_lagu }}</a></p>
            </div>
            <div class="col-lg-6 col-sm-12 isi">
              <p class="">Ending</p>
              <p><a href="" class="text-decoration-none isi-link">"{{ $anime->link_lagu_2 }}</a></p>
            </div>
          </div>
        <p class="fs-5 mt-4 judul">Review</p>
        <form action="">
          <textarea type="text" class="form-control profil border-0" id="exampleFormControlInput1"></textarea>
        </form>
      </div>
    </div>
    @endforeach
  </div>
@endsection
