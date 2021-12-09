<?= $this->extend('users/template/layout'); ?>

<?= $this->section('users'); ?>

<!-- header section -->
<div class="header__section">
  <div class="container">
    <div class="header__content__kiri">
      <h1 class="header__mb">Maaf anda belum melakukan vaksinasi</h1>
    </div>
  </div>
</div>
<!-- end header section -->

<!-- status section -->
<div class="av__y">
  <div class="container">
    <div class="status__section">
      <div class="deskripsi">
        <p>Lakukan vaksinasi, agar dapat mempercepat pandemi Covid-19 dan selamatkan ribuan nyawa!</p>
      </div>
      <a href="/home/daftarvaksin">
        <div class="text-center mt-4">
          <div class="btn tombol">Saya ingin melakukan vaksinasi</div>
        </div>
      </a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>