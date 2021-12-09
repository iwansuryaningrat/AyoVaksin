<?= $this->extend('users/template/layout'); ?>

<?= $this->section('users'); ?>

<!-- header section -->
<div class="header__section">
  <div class="container">
    <div class="header__content">
      <h1 class="header__mb">Daftar</h1>
      <p class="desc__header">Daftarkan akun baru Anda untuk mendapatkan vaksinasi yang mudah dan nyaman.</p>
    </div> <!-- end header content -->
  </div> <!-- end container -->
</div>
<!-- end header section -->

<!-- signin section -->
<div class="av__b">
  <div class="container">
    <div class="signin__section">
      <div class="row">
        <div class="col-12">
          <form action="" method="post" class="row g-3 mb-4">

            <div class="col-12 mt-2 mb-4">
              <div class="row">
                <div class="col-sm-4 col-12 m-auto">
                  <label for="namaInstansi" class="form-label form__label mt-2 mb-sm-3 mb-2 d-block text-center">Kategori Akun</label>
                  <select id="selectCategory" class="form-select form__control shadow-none">
                    <option selected value="except" disabled>Pilih Kategori Akun</option>
                    <option value="peserta">Peserta</option>
                    <option value="penyedia">Penyedia</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-sm-6 co-12 my-2 nama__peserta d-none">
              <label for="namaDepan" class="form-label form__label mt-2 mb-sm-3 mb-2">Nama Depan</label>
              <input type="text" class="form-control form__control shadow-none" id="namaDepan" placeholder="Masukkan Nama Depan" required>
            </div>

            <div class="col-sm-6 col-12 my-2 nama__peserta d-none">
              <label for="namaBelakang" class="form-label form__label mt-2 mb-sm-3 mb-2">Nama Belakang</label>
              <input type="text" class="form-control form__control shadow-none" id="namaBelakang" placeholder="Masukkan Nama Belakang" required>
            </div>

            <div class="col-12 my-2 instansi d-none">
              <label for="namaInstansi" class="form-label form__label mt-2 mb-sm-3 mb-2">Nama Instansi</label>
              <input type="text" class="form-control form__control shadow-none" id="namaInstansi" placeholder="Masukkan Nama Instansi" required>
            </div>

            <div class="col-12 my-2">
              <label for="email" class="form-label form__label mt-2 mb-sm-3 mb-2">Email</label>
              <input type="email" class="form-control form__control shadow-none" id="email" placeholder="Masukkan Alamat Email" required>
            </div>

            <div class="col-12 my-2">
              <label for="password" class="form-label form__label mt-2 mb-sm-3 mb-2">Password</label>
              <input type="password" class="form-control form__control shadow-none" id="password" placeholder="Masukkan Password" required>
            </div>

            <div class="col-12 my-2">
              <label for="konfirmPassword" class="form-label form__label mt-2 mb-sm-3 mb-2">Konfirmasi Password</label>
              <input type="password" class="form-control form__control shadow-none" id="confirmPassword" placeholder="Masukkan Konfirmasi Password" required>
            </div>

            <div class="col-12 mt-4 d-flex justify-content-center align-items-center">
              <input type="submit" class="btn kp__btn" value="Daftar">
            </div>
          </form>
          <p class="text-center">Sudah punya akun AyoVaksin? <a href="login-akun" class="masuk__btn">Masuk</a></p>
        </div>
      </div> <!-- end row -->
    </div> <!-- end sign in section -->
  </div> <!-- end container -->
</div>
<!-- end signin section -->

<?= $this->endSection(); ?>