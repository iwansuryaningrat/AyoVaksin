<?= $this->extend('users/template/layout'); ?>

<?= $this->section('users'); ?>

<!-- header section -->
<div class="header__section">
  <div class="container">
    <div class="header__content">
      <h1 class="header__mb">Kotak Saran</h1>
      <p class="desc__header">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate veritatis quod doloremque aut iure corporis perspiciatis pariatur quaerat, optio, voluptatibus harum quidem.</p>
    </div> <!-- end header content -->
  </div> <!-- end container -->
</div>
<!-- end header section -->

<!-- saran section -->
<div class="av__b">
  <div class="container">
    <div class="saran__section">
      <form action="" method="post" class="row g-3">
        <div class="col-sm-6 my-2">
          <input type="text" class="me-lg-2 me-sm-1 me-0 form-control form__control shadow-none" id="name" placeholder="Nama Lengkap" required>
        </div>
        <div class="col-sm-6 my-2">
          <input type="email" class="ms-lg-2 ms-sm-1 ms-0 form-control form__control shadow-none" id="email" placeholder="Email" required>
        </div>
        <div class="col-sm-6 my-2">
          <input type="text" class="me-lg-2 me-sm-1 me-0 form-control form__control shadow-none" id="phone" placeholder="Nomor Telepon" required>
        </div>
        <div class="col-sm-6 my-2">
          <select class="ms-lg-2 ms-sm-1 ms-0 form-select shadow-none form__control">
            <option selected>Pilih Subjek</option>
            <option value="Saran">Saran</option>
            <option value="Vaksinasi">Vaksinasi</option>
            <option value="Partnership">Partnership</option>
            <option value="Lainnya">Lainnya</option>
          </select>
        </div>
        <div class="col-12 my-2 pe-sm-0 pe-auto">
          <textarea name="pesan" id="pesan" cols="30" rows="5" class="form-control form__control shadow-none" placeholder="Pesan Anda..." required></textarea>
        </div>
        <div class="col-12 mt-4 d-flex justify-content-center align-items-center">
          <input type="submit" class="btn kp__btn" value="Kirim Pesan">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end saran section -->

<?= $this->endSection(); ?>