@extends('layouts.main1')

@section('container')
    <div class="container text-light">
        <h1 class="text-center py-4 judul">About Us</h1>
        <div class="row pb-5">
            <div class="col-lg-6 col-md-6 col-sm-12 align-self-center fs-4 px-4" id="deskripsi">
                <div class="card border-0">
                    <div class="card-header">
                        <div class="text-end" id="item">
                            <i class="bi bi-circle-fill" id="merah"></i>
                            <i class="bi bi-circle-fill" id="cream"></i>
                            <i class="bi bi-circle-fill" id="hitam"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Selamat Datang di Shinakamana!!!</p>
                        <p>Website Shinakamana adalah website yang memberikan info platform menonton anime apapun secara legal dengan mudah dan cepat!</p>
                        <p>Website Shinakamana dibuat dan dikelola oleh Tim Etherious.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <img src="img/about/Shinakamana.png" width="300rem" class="mb-3 img-thumbnail border-0 rounded-circle" id="gambar" alt="">
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <img src="img/about/Etherious.png" width="300rem" class="mb-3 img-thumbnail border-0 rounded-circle" id="gambar" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 align-self-center fs-4 px-4" id="deskripsi">
                <div class="card border-0">
                    <div class="card-header">
                        <div class="text-end" id="item">
                            <i class="bi bi-circle-fill" id="merah"></i>
                            <i class="bi bi-circle-fill" id="cream"></i>
                            <i class="bi bi-circle-fill" id="hitam"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        Tim Etherious adalah tim Web Developer yang beranggotakan 4 Mahasiswa Teknik Informatika Universitas Pasundan Bandung yang terdiri dari 1 orang Project Leader, 1 orang Front-End Web Developer, dan 2 orang Back-End Web Developer.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-4">
                <img src="/img/about/hilmy.jpg" width="200" class="img-thumbnail border-0 rounded-circle" id="gambar">
                <h3 class="pt-3 judul">Dhaifullah Hilmy</h3>
                <h4 class="judul">Project Manager</h4>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.instagram.com/si_hilmy" target="_blank"><i class="bi bi-instagram"></i> Instagram</a></p>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.github.com/vo55my" target="_blank"><i class="bi bi-github"></i> Github</a></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-4">
                <img src="/img/about/dimas2.jpeg" width="200" class="img-thumbnail border-0 rounded-circle" id="gambar">
                <h3 class="pt-3 judul">Dimas Prayuda</h3>
                <h4 class="judul">Front-End Web Developer</h4>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.instagram.com/dimspryda_" target="_blank"><i class="bi bi-instagram"></i> Instagram</a></p>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.github.com/dimasprayuda212" target="_blank"><i class="bi bi-github"></i> Github</a></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-4">
                <img src="/img/about/fresa.jpg" width="200" class="img-thumbnail border-0 rounded-circle" id="gambar">
                <h3 class="pt-3 judul">Fresabayu Anggoro</h3>
                <h4 class="judul">Back-End Web Developer</h4>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.instagram.com/fresa.ba" target="_blank"><i class="bi bi-instagram"></i> Instagram</a></p>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.github.com/fresaaaaa" target="_blank"><i class="bi bi-github"></i> Github</a></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-4">
                <img src="/img/about/Andrie.jpg" width="200" class="img-thumbnail border-0 rounded-circle" id="gambar">
                <h3 class="pt-3 judul">Moch. Andrie Firmansyah</h3>
                <h4 class="judul">Back-End Web Developer</h4>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.instagram.com/herox02_" target="_blank"><i class="bi bi-instagram"></i> Instagram</a></p>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.github.com/Andriefir" target="_blank"><i class="bi bi-github"></i> Github</a></p>
            </div>
        </div>
    </div>
@endsection