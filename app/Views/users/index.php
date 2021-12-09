<?= $this->extend('users/template/layout'); ?>

<?= $this->section('users'); ?>

<!-- jumbotron section -->
<div class="jumbotron__section">
  <div class="container">
    <div class="body__content">
      <div class="row">
        <div class="col-lg-7 col-12">
          <h1>Wujudkan Indonesia Bebas <span class="txt__second">Covid-19</span></h1>
          <p class="desc__header">Hentikan penyebaran virus dengan vaksinasi untuk memutus mata rantai penularan Coronaviruse Disease (COVID-19), sehingga anda dan orang disekitar anda terlindungi.</p>
          <div class="jumbotron__btn row">
            <div class="col-md-6 col-12 mb-lg-0 mb-sm-4">
              <div class="d-flex align-items-center">
                <a class="main__btn" href="daftar-vaksin.html">Saya ingin vaksinasi</a>
              </div>
            </div>
            <!-- end btn left -->
            <div class="col-md-6 col-12 mb-lg-0 mb-sm-4">
              <div class="d-flex align-items-center">
                <a class="ideas__btn" href="alur.html">
                  <i class="fi fi-br-bulb d-flex"></i>
                  <span>Cara kerja AyoVaksin</span>
                </a>
              </div>
            </div>
            <!-- end btn right -->
          </div>
          <!-- end jumbotron btn -->
        </div>
        <!-- end left -->
        <div class="col-lg-5 col-12 d-flex align-items-end">
          <img class="jumbotron__img" src="/assets/img/jumbotron-img.png" alt="..." />
        </div>
        <!-- end right -->
      </div>
      <!-- end row -->

      <!-- <div class="circle c1"></div>
				<div class="circle c2"></div> -->
    </div>
    <!-- end body content -->
  </div>
  <!-- end container -->
</div>
<!-- end jumbotron section -->

<!-- check card -->
<div class="av__y">
  <div class="container">
    <div class="check__card">
      <h4 class="text-center title__mb">Periksa apakah anda sudah melakukan vaksinasi!</h4>
      <form action="" method="post" class="check__form">
        <div class="check__form__content">
          <!-- left -->
          <div class="left__card">
            <div class="row g-3">
              <div class="col-md-4 col-12">
                <input type="text" class="form-control form__control shadow-none" name="namaLengkap" placeholder="Nama Lengkap" required />
              </div>
              <div class="col-md-4 col-12">
                <input type="text" class="form-control form__control shadow-none" name="nik" placeholder="NIK" required />
              </div>
              <div class="col-md-4 col-12">
                <div class="inr"></div>
              </div>
            </div>
          </div>

          <!-- right -->
          <div class="right__card">
            <input type="submit" name="checkSubmit" class="check__submit" value="Periksa" />
          </div>
        </div>
        <!-- end check form contact -->
      </form>
      <!-- end form -->
    </div>
    <!-- end check card -->
  </div>
  <!-- end container -->
</div>
<!-- end check card -->

<!-- news card -->
<div class="av__y">
  <div class="container">
    <div class="row news__section">
      <div class="col-lg-6 col-12">
        <div class="news__img bg__img" style="background-image: url(/assets/img/news-photo.png)"></div>
      </div>
      <div class="col-lg-6 col-12">
        <h2 class="title__mb">Vaksin itu <span class="txt__second">Penting</span></h2>
        <p class="fz__news">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Penatibus interdum interdum malesuada vitae, bibendum pellentesque tristique elementum. Sed augue in et mauris urna vitae fringilla ridiculus lorem. Aliquet morbi
          posuere tortor, mattis est justo sed etiam enim. Vitae fringilla id quisque nulla. Purus et tincidunt sollicitudin morbi ornare ac velit blandit sit. Aliquet at integer adipiscing sit augue sit ac odio.
        </p>
      </div>
    </div>
    <!-- end news section -->
  </div>
  <!-- end container -->
</div>
<!-- end news card -->

<!-- vaksin -->
<div class="av__y">
  <div class="vaksin">
    <figure class="vaksin__img">
      <img src="/assets/img/astrazeneca.svg" alt="..." class="vaksin__tt" data-bs-toggle="tooltip" data-bs-placement="top" title="AstraZeneca Vaccine">
    </figure>
    <figure class="vaksin__img">
      <img src="/assets/img/sinovac.svg" alt="..." class="vaksin__tt" data-bs-toggle="tooltip" data-bs-placement="top" title="Sinovac-CoronaVac">
    </figure>
    <figure class="vaksin__img">
      <img src="/assets/img/pfizer.svg" alt="..." class="vaksin__tt" data-bs-toggle="tooltip" data-bs-placement="top" title="Pfizer-BioNTech">
    </figure>
    <figure class="vaksin__img">
      <img src="/assets/img/moderna.svg" alt="..." class="vaksin__tt" data-bs-toggle="tooltip" data-bs-placement="top" title="Moderna Vaccine">
    </figure>
  </div> <!-- end vaksin -->
</div>
<!-- end vaksin -->

<!-- help card -->
<div class="av__y">
  <div class="container">
    <div class="help__card bg__img" style="background: linear-gradient(0deg, rgba(38, 86, 190, 0.9), rgba(38, 86, 190, 0.9)), url(/assets/img/bg-help-card.png)">
      <div class="row">
        <div class="col-lg-8 col-12">
          <h1 class="title__mb text-white hyphens__auto">Bantu kami <span class="txt__second">memperluas</span> vaksinasi</h1>
          <p class="mb-4 text-white">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et felis sed leo ut amet, egestas. Dolor ipsum nunc quam amet, sociis sed. In aliquam fermentum dolor facilisi non maecenas accumsan magna. Faucibus ut blandit
            ipsum scelerisque velit.
          </p>
          <div class="d-flex align-items-center">
            <a href="penyedia-vaksin.html" class="s__btn">
              <span>Selengkapnya</span>
              <i class="bi bi-arrow-right-short"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <img class="help__img" src="/assets/img/globe-help-card.png" alt="..." />
        </div>
      </div>
      <!-- end row -->
    </div>
    <!-- end help card -->
  </div>
  <!-- end container -->
</div>
<!-- end help card -->

<!-- our history -->
<div class="av__y">
  <div class="container">
    <div class="ourhis__head">
      <h2 class="title__mb">Riwayat Kami</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultrices enim adipiscing tincidunt nulla. Cras duis sed ultrices cursus pretium, auctor adipiscing nec. A nulla amet, volutpat, morbi at congue aliquam vitae consequat. Eu maecenas leo gravida dolor elit ut semper. In molestie quis turpis lectus. Odio in enim, ac amet, nunc. Consectetur sed nunc.</p>
    </div> <!-- end ourhis head -->

    <div class="ourhis__body">
      <!-- service1 -->
      <div class="service__card bg__img" style="background: linear-gradient(0deg, rgba(37, 44, 93, 0.75), rgba(93, 99, 151, 0.8)), url(/assets/img/service-1.png);">
        <h5 class="text-white">Penyelenggara Vaksin 1</h5>
        <!-- service body -->
        <div class="service__body">
          <div class="d-flex align-items-center"><i class="far fa-calendar-check"></i><span>01 September 2021</span></div>
          <div class="d-flex align-items-center"><i class="far fa-address-card"></i><span>456 orang</span></div>
        </div>
      </div> <!-- end service card -->

      <!-- service1 -->
      <div class="service__card bg__img" style="background: linear-gradient(0deg, rgba(37, 44, 93, 0.75), rgba(37, 44, 93, 0.8)), url(/assets/img/servoce-2.png);">
        <h5 class="text-white">Penyelenggara Vaksin 2</h5>
        <!-- service body -->
        <div class="service__body">
          <div class="d-flex align-items-center"><i class="far fa-calendar-check"></i><span>10 November 2021</span></div>
          <div class="d-flex align-items-center"><i class="far fa-address-card"></i><span>670 orang</span></div>
        </div>
      </div> <!-- end service card -->

      <!-- service1 -->
      <div class="service__card bg__img" style="background: linear-gradient(0deg, rgba(37, 44, 93, 0.75), rgba(37, 44, 93, 0.8)), url(/assets/img/news-photo.png);">
        <h5 class="text-white">Penyelenggara Vaksin 3</h5>
        <!-- service body -->
        <div class="service__body">
          <div class="d-flex align-items-center"><i class="far fa-calendar-check"></i><span>20 Desember 2021</span></div>
          <div class="d-flex align-items-center"><i class="far fa-address-card"></i><span>1000 orang</span></div>
        </div>
      </div> <!-- end service card -->

    </div> <!-- end ourhis body -->

    <div class="ourhis__btn">
      <a href="riwayat.html" class="d-flex align-items-center"><span>Lebih Banyak</span><i class="bi bi-arrow-right-short"></i></a>
    </div>
  </div> <!-- end container -->
</div>
<!-- end our history -->

<?= $this->endSection(); ?>