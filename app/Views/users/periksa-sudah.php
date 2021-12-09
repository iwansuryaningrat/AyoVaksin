<?= $this->extend('users/template/layout'); ?>

<?= $this->section('users'); ?>

<!-- header section -->
<div class="header__section">
  <div class="container">
    <div class="header__content__kiri">
      <h1 class="header__mb">Selamat anda telah melakukan vaksinasi!</h1>
    </div>
  </div>
</div>
<!-- end header section -->

<!-- status section -->
<div class="av__y">
  <div class="container">
    <div class="status__section">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12 mb-5">
          <h4 class="mb-4">Vaksin 1</h4>
          <div class="sertif__card">
            <div class="sertif">
              <img src="/assets/img/bg-footer.png" class="zoom" alt="" />
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-5">
          <h4 class="mb-4">Vaksin 2</h4>
          <div class="sertif__card">
            <div class="sertif">
              <img src="/assets/img/bg-footer.png" class="zoom" alt="" />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-5">
          <h4 class="mb-4">Vaksin 3</h4>
          <div class="sertif__card">
            <div class="sertif">
              <img src="/assets/img/bg-footer.png" class="zoom" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end status section -->

<?= $this->endSection(); ?>