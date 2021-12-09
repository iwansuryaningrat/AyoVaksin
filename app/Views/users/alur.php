<?= $this->extend('users/template/layout'); ?>

<?= $this->section('users'); ?>

<!-- header section -->
<div class="header__section">
  <div class="container">
    <div class="header__content">
      <h1 class="header__mb">Alur Pendaftaran Vaksin</h1>
      <p class="desc__header">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate veritatis quod doloremque aut iure corporis perspiciatis pariatur quaerat, optio, voluptatibus harum quidem.</p>
    </div>
    <!-- end header content -->
  </div>
  <!-- end container -->
</div>
<!-- end header section -->

<!-- alur section -->
<div class="av__y">
  <div class="container">
    <div class="alur__section">
      <!-- alur1 -->
      <div class="alur">
        <h2>Langkah 1</h2>
        <div class="alur__card">
          <div class="row">
            <!-- left -->
            <div class="col-md-5 col-12">
              <div class="alur__left">
                <i class="fas fa-user-circle"></i>
                <h4>Buat Akun</h4>
                <p>Buat akun AyoVaksin Anda!</p>
              </div>
            </div>

            <!-- right -->
            <div class="col-md-7 col-12">
              <div class="alur__right">
                <h5>Langkah - langkah:</h5>
                <ol>
                  <li>
                    Buat akun pada menu Login/Register atau melalui link <span><a href="#">disini.</a></span>
                  </li>
                  <li>Masukkan nama lengkap anda</li>
                  <li>Masukkan email</li>
                  <li>Masukkan password</li>
                  <li>Klik Daftar</li>
                  <li>Jika sudah memiliki akun, silahkan masuk dengan akun yang sudah ada</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end alur card -->
      </div>
      <!-- end alur1 -->

      <!-- alur2 -->
      <div class="alur">
        <h2>Langkah 2</h2>
        <div class="alur__card">
          <div class="row">
            <div class="col-md-5 col-12">
              <div class="alur__left">
                <i class="far fa-edit"></i>
                <h4>Lengkapi Data</h4>
                <p>Lengkapi data pribadi Anda!</p>
              </div>
            </div>
            <div class="col-md-7 col-12">
              <div class="alur__right">
                <h5>Langkah - langkah:</h5>
                <ol>
                  <li>Masukkan NIK (Nomor Induk Keluarga)</li>
                  <li>Masukkan nomor KK (Kartu Keluarga)</li>
                  <li>Masukkan tanggal lahir</li>
                  <li>Pilih jenis kelamin</li>
                  <li>Masukkan usia Anda</li>
                  <li>Masukkan alamat tempat tinggal saat ini</li>
                  <li>Isikan kode pos Anda</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end alur2 -->

      <!-- alur3 -->
      <div class="alur pb-0">
        <h2>Langkah 3</h2>
        <div class="alur__card">
          <div class="row">
            <div class="col-md-5 col-12">
              <div class="alur__left">
                <i class="fas fa-calendar-alt"></i>
                <h4>Atur Jadwal</h4>
                <p>Sesuaikan jadwal vaksin Anda!</p>
              </div>
            </div>
            <div class="col-md-7 col-12">
              <div class="alur__right">
                <h5>Langkah - langkah:</h5>
                <ol>
                  <li>Disediakan berbagai informasi mengenai pelaksanaan vaksinasi (sentra vaksin), silahkan pilih sesuai dengan kebutuhan Anda</li>
                  <li>Setiap sentra vaksin memuat informasi sebagai berikut :</li>
                  <ul>
                    <li>Tanggal pelaksaan vaksin</li>
                    <li>Nama vaksin</li>
                    <li>Target penerima vaksin</li>
                  </ul>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end alur3 -->
    </div>
    <!-- end alur section -->
  </div>
  <!-- end container -->
</div>
<!-- end alur section -->

<!-- faq section -->
<div class="av__y">
  <div class="container">
    <div class="head__av">
      <h2 class="header__mb">FAQ</h2>
      <p>Frequently Asked Questions</p>
    </div> <!-- end head av -->

    <div class="faq__section">
      <!-- qb1 -->
      <div class="question__box">
        <a class="qb__head" data-bs-toggle="collapse" href="#faq1" role="button" aria-expanded="false" aria-controls="collapseExample">
          <span>Ratione dolorum cupiditate culpa non harum?</span>
          <i class="fas fa-plus"></i>
        </a>
        <div class="collapse" id="faq1">
          <div class="qb__body">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, alias. Dolore quos ad quo. Et nostrum dolorum culpa esse dolores assumenda cupiditate voluptatibus aut tempora, rem distinctio libero natus. Illum.</p>
          </div>
        </div>
      </div>
      <!-- end qb1 -->

      <!-- qb2 -->
      <div class="question__box">
        <a class="qb__head" data-bs-toggle="collapse" href="#faq2" role="button" aria-expanded="false" aria-controls="collapseExample">
          <span>Lorem ipsum dolor sit amet?</span>
          <i class="fas fa-plus"></i>
        </a>
        <div class="collapse" id="faq2">
          <div class="qb__body">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, alias. Dolore quos ad quo. Et nostrum dolorum culpa esse dolores assumenda cupiditate voluptatibus aut tempora, rem distinctio libero natus. Illum.</p>
          </div>
        </div>
      </div>
      <!-- end qb2 -->

      <!-- qb3 -->
      <div class="question__box">
        <a class="qb__head" data-bs-toggle="collapse" href="#faq3" role="button" aria-expanded="false" aria-controls="collapseExample">
          <span>Numquam eos asperiores consequatur vero nam non debitis in?</span>
          <i class="fas fa-plus"></i>
        </a>
        <div class="collapse" id="faq3">
          <div class="qb__body">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, alias. Dolore quos ad quo. Et nostrum dolorum culpa esse dolores assumenda cupiditate voluptatibus aut tempora, rem distinctio libero natus. Illum.</p>
          </div>
        </div>
      </div>
      <!-- end qb3 -->

      <!-- qb4 -->
      <div class="question__box">
        <a class="qb__head" data-bs-toggle="collapse" href="#faq4" role="button" aria-expanded="false" aria-controls="collapseExample">
          <span>Fugit ipsum suscipit vel?</span>
          <i class="fas fa-plus"></i>
        </a>
        <div class="collapse" id="faq4">
          <div class="qb__body">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, alias. Dolore quos ad quo. Et nostrum dolorum culpa esse dolores assumenda cupiditate voluptatibus aut tempora, rem distinctio libero natus. Illum.</p>
          </div>
        </div>
      </div>
      <!-- end qb4 -->

    </div> <!-- end faq section -->
  </div> <!-- end container -->
</div>
<!-- end faq section -->

<?= $this->endSection(); ?>