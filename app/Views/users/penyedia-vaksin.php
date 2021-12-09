<?= $this->extend('users/template/layout'); ?>

<?= $this->section('users'); ?>

<!-- header section -->
<div class="header__section">
  <div class="container">
    <div class="header__content">
      <h1 class="header__mb">Perluas Vaksinasi</h1>
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
          <input type="text" class="me-lg-2 me-sm-1 me-0 form-control form__control shadow-none" id="phone" placeholder="Nama Perusahaan" required>
        </div>
        <div class="col-sm-6 my-2">
          <input type="text" class="ms-lg-2 ms-sm-1 ms-0 form-control form__control shadow-none" id="email" placeholder="Nomor Telepon" required>
        </div>
        <div class="col-12 my-2 ps-sm-0 ps-auto">
          <input type="text" class="ms-lg-2 ms-sm-1 ms-0 form-control form__control shadow-none" id="email" placeholder="Alamat" required>
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