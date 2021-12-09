<?= $this->extend('users/template/layout'); ?>

<?= $this->section('users'); ?>

<!-- header section -->
<div class="header__section">
  <div class="container">
    <div class="header__content">
      <h1 class="header__mb">Cari Sentra Vaksin di Dekatmu</h1>
      <p class="desc__header">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi exercitationem fugiat temporibus culpa ratione in libero quas accusantium ea iusto, facere ullam eos.</p>
    </div>
    <!-- end header content -->
  </div>
  <!-- end container -->
</div>
<!-- end header section -->

<!-- daftar vaksin section -->
<div class="av__y">
  <div class="container">
    <div class="daftar__section">
      <div class="row">
        <!-- daftar 1 -->
        <div class="col-lg-4 col-md-6 col-12 kartu__mb">
          <div class="kartu">
            <div class="bg__img kartu__img" style="background-image: url(assets/img/sentra_vaksin1.svg)"></div>
            <div class="kartu__body">
              <p class="kartu__title">
                <span class="hyphens__auto">UPTD Puskesmas Grobogan</span>
                <span class="kuota__status s__blue" data-bs-toggle="tooltip" data-bs-placement="top" title="Kuota : 93/300"></span>
              </p>
              <div class="kartu__desc">
                <p class="kdesc"><i class="fas fa-calendar-week"></i><span>14 - 17 September 2021</span></p>
                <p class="kdesc"><i class="fas fa-shield-virus"></i><span>Vaksin Sinovac</span></p>
                <p class="kdesc"><i class="fas fa-user"></i><span>12 Tahun Keatas</span></p>
              </div>
              <!-- end kartu desc -->
              <div class="kartu__btn">
                <a href="#modal1" class="kbtn" data-bs-toggle="modal" data-bs-target="#modal1">Lihat Detail</a>
              </div>
              <!-- end kartu btn -->
            </div>
            <!-- end kartu body -->
          </div>
          <!-- end kartu -->
        </div>
        <!-- end daftar 1 -->
        <!-- Modal1 -->
        <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal__content">
              <!-- modal header -->
              <div class="modal-header">
                <h5 class="modal-title">Detail Vaksinasi</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- modal body -->
              <div class="modal-body">
                <!-- jadwal section -->
                <div class="jadwal__section mt-3">
                  <div class="jadwal__content">
                    <p>UPTD Puskesmas Grobogan</p>
                  </div>
                  <div class="tabel__section">
                    <div class="tabel__content">
                      <table>
                        <tr>
                          <td>Hari/Tanggal</td>
                          <td style="width: 40px" class="text-center">:</td>
                          <td>Sabtu, 12 September 2021</td>
                        </tr>
                        <tr>
                          <td>Jam</td>
                          <td class="text-center">:</td>
                          <td>08.00 - 12.00 WIB</td>
                        </tr>
                        <tr>
                          <td>Jenis Vaksin</td>
                          <td class="text-center">:</td>
                          <td>Sinovac</td>
                        </tr>
                        <tr>
                          <td>Kuota Vaksin</td>
                          <td class="text-center">:</td>
                          <td>93/100</td>
                        </tr>
                        <tr>
                          <td>Persyaratan</td>
                          <td class="text-center">:</td>
                          <td>1. Usia 12 tahun keatas</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>2. Belum melakukan vaksin dosis 1</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>3. Membawa KTP atau KK</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- end jadwal section -->
              </div>

              <!-- modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn__av btn-secondary shadow-none" data-bs-dismiss="modal">Batal</button>
                <a href="" class="btn btn__av btn-primary ms-4 shadow-none">Daftar</a>
              </div>

            </div> <!-- end modal content -->
          </div> <!-- end modal dialog -->
        </div>
        <!-- end modal1 -->

        <!-- daftar 2 -->
        <div class="col-lg-4 col-md-6 col-12 kartu__mb">
          <div class="kartu">
            <div class="bg__img kartu__img" style="background-image: url(assets/img/sentra_vaksin2.svg)"></div>
            <div class="kartu__body">
              <p class="kartu__title">
                <span class="hyphens__auto">UPTD Puskesmas Pemalang</span>
                <span class="kuota__status s__orange" data-bs-toggle="tooltip" data-bs-placement="top" title="Kuota : 198/300"></span>
              </p>
              <div class="kartu__desc">
                <p class="kdesc"><i class="fas fa-calendar-week"></i><span>14 - 17 September 2021</span></p>
                <p class="kdesc"><i class="fas fa-shield-virus"></i><span>Vaksin Sinovac</span></p>
                <p class="kdesc"><i class="fas fa-user"></i><span>12 Tahun Keatas</span></p>
              </div>
              <!-- end kartu desc -->
              <div class="kartu__btn">
                <div class="kartu__btn">
                  <a href="#modal2" class="kbtn" data-bs-toggle="modal" data-bs-target="#modal2">Lihat Detail</a>
                </div>
              </div>
              <!-- end kartu btn -->
            </div>
            <!-- end kartu body -->
          </div>
          <!-- end kartu -->
        </div>
        <!-- end daftar 2 -->
        <!-- Modal2 -->
        <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal__content">
              <!-- modal header -->
              <div class="modal-header">
                <h5 class="modal-title">Detail Vaksinasi</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- modal body -->
              <div class="modal-body">
                <!-- jadwal section -->
                <div class="jadwal__section mt-3">
                  <div class="jadwal__content">
                    <p>UPTD Puskesmas Pemalang</p>
                  </div>
                  <div class="tabel__section">
                    <div class="tabel__content">
                      <table>
                        <tr>
                          <td>Hari/Tanggal</td>
                          <td style="width: 40px" class="text-center">:</td>
                          <td>Sabtu, 12 September 2021</td>
                        </tr>
                        <tr>
                          <td>Jam</td>
                          <td class="text-center">:</td>
                          <td>08.00 - 12.00 WIB</td>
                        </tr>
                        <tr>
                          <td>Jenis Vaksin</td>
                          <td class="text-center">:</td>
                          <td>Sinovac</td>
                        </tr>
                        <tr>
                          <td>Kuota Vaksin</td>
                          <td class="text-center">:</td>
                          <td>198/100</td>
                        </tr>
                        <tr>
                          <td>Persyaratan</td>
                          <td class="text-center">:</td>
                          <td>1. Usia 12 tahun keatas</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>2. Belum melakukan vaksin dosis 1</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>3. Membawa KTP atau KK</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- end jadwal section -->
              </div>

              <!-- modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn__av btn-secondary shadow-none" data-bs-dismiss="modal">Batal</button>
                <a href="" class="btn btn__av btn-primary ms-4 shadow-none">Daftar</a>
              </div>

            </div> <!-- end modal content -->
          </div> <!-- end modal dialog -->
        </div>
        <!-- end modal2 -->

        <!-- daftar 3 -->
        <div class="col-lg-4 col-md-6 col-12 kartu__mb">
          <div class="kartu">
            <div class="bg__img kartu__img" style="background-image: url(assets/img/sentra-vaksin-3.png)"></div>
            <div class="kartu__body">
              <p class="kartu__title">
                <span class="hyphens__auto">UPTD Puskesmas Brebes</span>
                <span class="kuota__status s__red" data-bs-toggle="tooltip" data-bs-placement="top" title="Kuota : 297/300"></span>
              </p>
              <div class="kartu__desc">
                <p class="kdesc"><i class="fas fa-calendar-week"></i><span>14 - 17 September 2021</span></p>
                <p class="kdesc"><i class="fas fa-shield-virus"></i><span>Vaksin Sinovac</span></p>
                <p class="kdesc"><i class="fas fa-user"></i><span>12 Tahun Keatas</span></p>
              </div>
              <!-- end kartu desc -->
              <div class="kartu__btn">
                <div class="kartu__btn">
                  <a href="#modal3" class="kbtn" data-bs-toggle="modal" data-bs-target="#modal3">Lihat Detail</a>
                </div>
              </div>
              <!-- end kartu btn -->
            </div>
            <!-- end kartu body -->
          </div>
          <!-- end kartu -->
        </div>
        <!-- end daftar 3 -->
        <!-- Modal3 -->
        <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal__content">
              <!-- modal header -->
              <div class="modal-header">
                <h5 class="modal-title">Detail Vaksinasi</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- modal body -->
              <div class="modal-body">
                <!-- jadwal section -->
                <div class="jadwal__section mt-3">
                  <div class="jadwal__content">
                    <p>UPTD Puskesmas Brebes</p>
                  </div>
                  <div class="tabel__section">
                    <div class="tabel__content">
                      <table>
                        <tr>
                          <td>Hari/Tanggal</td>
                          <td style="width: 40px" class="text-center">:</td>
                          <td>Sabtu, 12 September 2021</td>
                        </tr>
                        <tr>
                          <td>Jam</td>
                          <td class="text-center">:</td>
                          <td>08.00 - 12.00 WIB</td>
                        </tr>
                        <tr>
                          <td>Jenis Vaksin</td>
                          <td class="text-center">:</td>
                          <td>Sinovac</td>
                        </tr>
                        <tr>
                          <td>Kuota Vaksin</td>
                          <td class="text-center">:</td>
                          <td>297/100</td>
                        </tr>
                        <tr>
                          <td>Persyaratan</td>
                          <td class="text-center">:</td>
                          <td>1. Usia 12 tahun keatas</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>2. Belum melakukan vaksin dosis 1</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>3. Membawa KTP atau KK</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- end jadwal section -->
              </div>

              <!-- modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn__av btn-secondary shadow-none" data-bs-dismiss="modal">Batal</button>
                <a href="" class="btn btn__av btn-primary ms-4 shadow-none">Daftar</a>
              </div>

            </div> <!-- end modal content -->
          </div> <!-- end modal dialog -->
        </div>
        <!-- end modal3 -->

        <!-- daftar 4 -->
        <div class="col-lg-4 col-md-6 col-12 kartu__mb">
          <div class="kartu">
            <div class="bg__img kartu__img" style="background-image: url(assets/img/sentra_vaksin2.svg)"></div>
            <div class="kartu__body">
              <p class="kartu__title">
                <span class="hyphens__auto">UPTD Puskesmas Batang</span>
                <span class="kuota__status s__red" data-bs-toggle="tooltip" data-bs-placement="top" title="Kuota : 299/300"></span>
              </p>
              <div class="kartu__desc">
                <p class="kdesc"><i class="fas fa-calendar-week"></i><span>14 - 17 September 2021</span></p>
                <p class="kdesc"><i class="fas fa-shield-virus"></i><span>Vaksin Sinovac</span></p>
                <p class="kdesc"><i class="fas fa-user"></i><span>12 Tahun Keatas</span></p>
              </div>
              <!-- end kartu desc -->
              <div class="kartu__btn">
                <a href="#modal4" class="kbtn" data-bs-toggle="modal" data-bs-target="#modal4">Lihat Detail</a>
              </div>
              <!-- end kartu btn -->
            </div>
            <!-- end kartu body -->
          </div>
          <!-- end kartu -->
        </div>
        <!-- end daftar 4 -->
        <!-- Modal4 -->
        <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="modal4" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal__content">
              <!-- modal header -->
              <div class="modal-header">
                <h5 class="modal-title">Detail Vaksinasi</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- modal body -->
              <div class="modal-body">
                <!-- jadwal section -->
                <div class="jadwal__section mt-3">
                  <div class="jadwal__content">
                    <p>UPTD Puskesmas Batang</p>
                  </div>
                  <div class="tabel__section">
                    <div class="tabel__content">
                      <table>
                        <tr>
                          <td>Hari/Tanggal</td>
                          <td style="width: 40px" class="text-center">:</td>
                          <td>Sabtu, 12 September 2021</td>
                        </tr>
                        <tr>
                          <td>Jam</td>
                          <td class="text-center">:</td>
                          <td>08.00 - 12.00 WIB</td>
                        </tr>
                        <tr>
                          <td>Jenis Vaksin</td>
                          <td class="text-center">:</td>
                          <td>Sinovac</td>
                        </tr>
                        <tr>
                          <td>Kuota Vaksin</td>
                          <td class="text-center">:</td>
                          <td>299/100</td>
                        </tr>
                        <tr>
                          <td>Persyaratan</td>
                          <td class="text-center">:</td>
                          <td>1. Usia 12 tahun keatas</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>2. Belum melakukan vaksin dosis 1</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>3. Membawa KTP atau KK</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- end jadwal section -->
              </div>

              <!-- modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn__av btn-secondary shadow-none" data-bs-dismiss="modal">Batal</button>
                <a href="" class="btn btn__av btn-primary ms-4 shadow-none">Daftar</a>
              </div>

            </div> <!-- end modal content -->
          </div> <!-- end modal dialog -->
        </div>
        <!-- end modal4 -->

        <!-- daftar 5 -->
        <div class="col-lg-4 col-md-6 col-12 kartu__mb">
          <div class="kartu">
            <div class="bg__img kartu__img" style="background-image: url(assets/img/sentra-vaksin-3.png)"></div>
            <div class="kartu__body">
              <p class="kartu__title">
                <span class="hyphens__auto">UPTD Puskesmas Purworejo</span>
                <span class="kuota__status s__blue" data-bs-toggle="tooltip" data-bs-placement="top" title="Kuota : 67/300"></span>
              </p>
              <div class="kartu__desc">
                <p class="kdesc"><i class="fas fa-calendar-week"></i><span>14 - 17 September 2021</span></p>
                <p class="kdesc"><i class="fas fa-shield-virus"></i><span>Vaksin Sinovac</span></p>
                <p class="kdesc"><i class="fas fa-user"></i><span>12 Tahun Keatas</span></p>
              </div>
              <!-- end kartu desc -->
              <div class="kartu__btn">
                <a href="#modal5" class="kbtn" data-bs-toggle="modal" data-bs-target="#modal5">Lihat Detail</a>
              </div>
              <!-- end kartu btn -->
            </div>
            <!-- end kartu body -->
          </div>
          <!-- end kartu -->
        </div>
        <!-- end daftar 5 -->
        <!-- Modal5 -->
        <div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="modal5" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal__content">
              <!-- modal header -->
              <div class="modal-header">
                <h5 class="modal-title">Detail Vaksinasi</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- modal body -->
              <div class="modal-body">
                <!-- jadwal section -->
                <div class="jadwal__section mt-3">
                  <div class="jadwal__content">
                    <p>UPTD Puskesmas Purworejo</p>
                  </div>
                  <div class="tabel__section">
                    <div class="tabel__content">
                      <table>
                        <tr>
                          <td>Hari/Tanggal</td>
                          <td style="width: 40px" class="text-center">:</td>
                          <td>Sabtu, 12 September 2021</td>
                        </tr>
                        <tr>
                          <td>Jam</td>
                          <td class="text-center">:</td>
                          <td>08.00 - 12.00 WIB</td>
                        </tr>
                        <tr>
                          <td>Jenis Vaksin</td>
                          <td class="text-center">:</td>
                          <td>Sinovac</td>
                        </tr>
                        <tr>
                          <td>Kuota Vaksin</td>
                          <td class="text-center">:</td>
                          <td>67/100</td>
                        </tr>
                        <tr>
                          <td>Persyaratan</td>
                          <td class="text-center">:</td>
                          <td>1. Usia 12 tahun keatas</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>2. Belum melakukan vaksin dosis 1</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>3. Membawa KTP atau KK</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- end jadwal section -->
              </div>

              <!-- modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn__av btn-secondary shadow-none" data-bs-dismiss="modal">Batal</button>
                <a href="" class="btn btn__av btn-primary ms-4 shadow-none">Daftar</a>
              </div>

            </div> <!-- end modal content -->
          </div> <!-- end modal dialog -->
        </div>
        <!-- end modal5 -->

        <!-- daftar 6 -->
        <div class="col-lg-4 col-md-6 col-12 kartu__mb">
          <div class="kartu">
            <div class="bg__img kartu__img" style="background-image: url(assets/img/sentra-vaksin-4.png)"></div>
            <div class="kartu__body">
              <p class="kartu__title">
                <span class="hyphens__auto">UPTD Puskesmas Cirebon</span>
                <span class="kuota__status s__orange" data-bs-toggle="tooltip" data-bs-placement="top" title="Kuota : 173/300"></span>
              </p>
              <div class="kartu__desc">
                <p class="kdesc"><i class="fas fa-calendar-week"></i><span>14 - 17 September 2021</span></p>
                <p class="kdesc"><i class="fas fa-shield-virus"></i><span>Vaksin Sinovac</span></p>
                <p class="kdesc"><i class="fas fa-user"></i><span>12 Tahun Keatas</span></p>
              </div>
              <!-- end kartu desc -->
              <div class="kartu__btn">
                <a href="#modal6" class="kbtn" data-bs-toggle="modal" data-bs-target="#modal6">Lihat Detail</a>
              </div>
              <!-- end kartu btn -->
            </div>
            <!-- end kartu body -->
          </div>
          <!-- end kartu -->
        </div>
        <!-- end daftar 6 -->
        <!-- Modal6 -->
        <div class="modal fade" id="modal6" tabindex="-1" aria-labelledby="modal6" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal__content">
              <!-- modal header -->
              <div class="modal-header">
                <h5 class="modal-title">Detail Vaksinasi</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- modal body -->
              <div class="modal-body">
                <!-- jadwal section -->
                <div class="jadwal__section mt-3">
                  <div class="jadwal__content">
                    <p>UPTD Puskesmas Cirebon</p>
                  </div>
                  <div class="tabel__section">
                    <div class="tabel__content">
                      <table>
                        <tr>
                          <td>Hari/Tanggal</td>
                          <td style="width: 40px" class="text-center">:</td>
                          <td>Sabtu, 12 September 2021</td>
                        </tr>
                        <tr>
                          <td>Jam</td>
                          <td class="text-center">:</td>
                          <td>08.00 - 12.00 WIB</td>
                        </tr>
                        <tr>
                          <td>Jenis Vaksin</td>
                          <td class="text-center">:</td>
                          <td>Sinovac</td>
                        </tr>
                        <tr>
                          <td>Kuota Vaksin</td>
                          <td class="text-center">:</td>
                          <td>173/100</td>
                        </tr>
                        <tr>
                          <td>Persyaratan</td>
                          <td class="text-center">:</td>
                          <td>1. Usia 12 tahun keatas</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>2. Belum melakukan vaksin dosis 1</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>3. Membawa KTP atau KK</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- end jadwal section -->
              </div>

              <!-- modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn__av btn-secondary shadow-none" data-bs-dismiss="modal">Batal</button>
                <a href="" class="btn btn__av btn-primary ms-4 shadow-none">Daftar</a>
              </div>

            </div> <!-- end modal content -->
          </div> <!-- end modal dialog -->
        </div>
        <!-- end modal6 -->

        <!-- daftar 7 -->
        <div class="col-lg-4 col-md-6 col-12 kartu__mb">
          <div class="kartu">
            <div class="bg__img kartu__img" style="background-image: url(assets/img/sentra_vaksin1.svg)"></div>
            <div class="kartu__body">
              <p class="kartu__title">
                <span class="hyphens__auto">UPTD Puskesmas Purwokerto</span>
                <span class="kuota__status s__blue" data-bs-toggle="tooltip" data-bs-placement="top" title="Kuota : 21/300"></span>
              </p>
              <div class="kartu__desc">
                <p class="kdesc"><i class="fas fa-calendar-week"></i><span>14 - 17 September 2021</span></p>
                <p class="kdesc"><i class="fas fa-shield-virus"></i><span>Vaksin Sinovac</span></p>
                <p class="kdesc"><i class="fas fa-user"></i><span>12 Tahun Keatas</span></p>
              </div>
              <!-- end kartu desc -->
              <div class="kartu__btn">
                <a href="#modal7" class="kbtn" data-bs-toggle="modal" data-bs-target="#modal7">Lihat Detail</a>
              </div>
              <!-- end kartu btn -->
            </div>
            <!-- end kartu body -->
          </div>
          <!-- end kartu -->
        </div>
        <!-- end daftar 7 -->
        <!-- Modal7 -->
        <div class="modal fade" id="modal7" tabindex="-1" aria-labelledby="modal7" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal__content">
              <!-- modal header -->
              <div class="modal-header">
                <h5 class="modal-title">Detail Vaksinasi</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- modal body -->
              <div class="modal-body">
                <!-- jadwal section -->
                <div class="jadwal__section mt-3">
                  <div class="jadwal__content">
                    <p>UPTD Puskesmas Purwokerto</p>
                  </div>
                  <div class="tabel__section">
                    <div class="tabel__content">
                      <table>
                        <tr>
                          <td>Hari/Tanggal</td>
                          <td style="width: 40px" class="text-center">:</td>
                          <td>Sabtu, 12 September 2021</td>
                        </tr>
                        <tr>
                          <td>Jam</td>
                          <td class="text-center">:</td>
                          <td>08.00 - 12.00 WIB</td>
                        </tr>
                        <tr>
                          <td>Jenis Vaksin</td>
                          <td class="text-center">:</td>
                          <td>Sinovac</td>
                        </tr>
                        <tr>
                          <td>Kuota Vaksin</td>
                          <td class="text-center">:</td>
                          <td>21/100</td>
                        </tr>
                        <tr>
                          <td>Persyaratan</td>
                          <td class="text-center">:</td>
                          <td>1. Usia 12 tahun keatas</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>2. Belum melakukan vaksin dosis 1</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>3. Membawa KTP atau KK</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- end jadwal section -->
              </div>

              <!-- modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn__av btn-secondary shadow-none" data-bs-dismiss="modal">Batal</button>
                <a href="" class="btn btn__av btn-primary ms-4 shadow-none">Daftar</a>
              </div>

            </div> <!-- end modal content -->
          </div> <!-- end modal dialog -->
        </div>
        <!-- end modal7 -->

      </div>
      <!-- end row -->
    </div>
    <!-- end daftar section -->
  </div>
  <!-- end container -->
</div>
<!-- end daftar vaksin section -->

<?= $this->endSection(); ?>