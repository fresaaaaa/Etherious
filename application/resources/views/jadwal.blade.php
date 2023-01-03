@extends('layouts.main1')

@section('container')
  <div class="container">
    <h1 id="merah" class="py-4 text-center">Jadwal Anime</h1>
    <div class="row mt-3">
      <h6 id="merah"><i class="bi bi-clock-fill"></i> Waktu yang ditampilkan adalah jadwal waktu perdana di Jepang</h6>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
              Senin
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                          <img src="img/anime/aot.webp" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5">
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                          <img src="img/anime/bleach.webp" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5">
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
              Selasa
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                          <img src="img/anime/blue_lock.webp" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5">
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                          <img src="img/anime/boku_no_hero.webp" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5">
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
              Rabu
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                          <img src="img/anime/naruto_shippuden.webp" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5">
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                          <img src="img/anime/one_piece.webp" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5">
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
              Kamis
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                          <img src="img/anime/spy_x_family.webp" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5">
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                          <img src="img/anime/tokyo_revengers.webp" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5">
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
              Jumat
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                          <img src="img/anime/aot.webp" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5">
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                          <img src="img/anime/bleach.webp" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5">
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
              Sabtu
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                          <img src="img/anime/blue_lock.webp" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5">
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                          <img src="img/anime/boku_no_hero.webp" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5">
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
              Minggu
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                          <img src="img/anime/naruto_shippuden.webp" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5">
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                          <img src="img/anime/one_piece.webp" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5">
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection