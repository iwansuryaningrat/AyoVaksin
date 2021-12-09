<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO Meta Tags -->
    <meta name="description" content="Website AyoVaksin menyediakan..." />
    <meta name="author" content="AyoVaksin" />
    <meta name="keywords" content="AyoVaksin,ayovaksin,vaksin,vaksinindonesia,covid19,vaksincovid19" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="AyoVaksin" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="AyoVaksin" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Website AyoVaksin menyediakan" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image" />
    <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title><?= $title; ?></title>

    <!-- apple touch icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/icon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/icon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/icon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/icon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/icon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/icon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icon/apple-touch-icon-180x180.png" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- bootstrap styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" integrity="sha512-xnP2tOaCJnzp2d2IqKFcxuOiVCbuessxM6wuiolT9eeEJCyy0Vhcwa4zQvdrZNVqlqaxXhHqsSV1Ww7T2jSCUQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- animate animation styles -->
    <link rel="stylesheet" href="/assets/vendor/uicons-bold-rounded/css/uicons-bold-rounded.css" />
    <!-- flaticon bold rounded icon styles -->
    <link rel="stylesheet" href="/assets/vendor/icofont/icofont.css" />
    <!-- icofont styles icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font-awesome styles icon -->

    <!-- custom styles -->
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <link rel="stylesheet" href="/assets/css/alur-styles.css" />
    <link rel="stylesheet" href="/assets/css/daftar-vaksin-styles.css" />
    <link rel="stylesheet" href="/assets/css/kebijkan-privasi-styles.css" />
    <link rel="stylesheet" href="/assets/css/periksa-belum-styles.css" />
    <link rel="stylesheet" href="/assets/css/periksa-sudah-styles.css" />

    <!-- Favicon  -->
    <link rel="icon" href="/assets/img/icon/favicon.ico" />
</head>

<body>
    <!-- navigation -->
    <div class="nav__section position-sticky">
        <nav class="navbar navbar-expand-lg navbar-light navbar__expand">
            <div class="container-fluid nav__fluid">
                <a class="navbar-brand" href="/"> <img src="/assets/img/logo-nav.svg" alt="ayo-vaksin-logo-nav" class="brand__logo" /></a>
                <!-- end navbar brand -->

                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fi fi-br-menu-burger"></i>
                </button>
                <!-- end menu btn -->

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav navbar__nav ms-auto">
                        <li class="nav-item nav__item">
                            <a class="nav-link nav__link <?php if ($tab == 'home') : echo 'active';
                                                            endif; ?>" aria-current="page" href="/"><span>Home</span></a>
                        </li>
                        <li class="nav-item nav__item">
                            <a class="nav-link nav__link <?php if ($tab == 'alur') : echo 'active';
                                                            endif; ?>" href="/home/alur"><span>Alur</span></a>
                        </li>
                        <li class="nav-item nav__item">
                            <a class="nav-link nav__link <?php if ($tab == 'vaksin') : echo 'active';
                                                            endif; ?>" href="/home/daftarvaksin"><span>Daftar Vaksin</span></a>
                        </li>
                        <li class="nav-item nav__item">
                            <a class="nav-link nav__link <?php if ($tab == 'privasi') : echo 'active';
                                                            endif; ?>" href="/home/kebijakanprivasi"><span>Kebijakan Privasi</span></a>
                        </li>
                    </ul>
                    <!-- end navbar nav -->

                    <div class="navbar-nav">
                        <a href="/home/login" class="nav-link nav__link btn__nav">Login</a>
                    </div>
                    <!-- end navbar nav btn nav -->
                </div>
                <!-- end nav collapse -->
            </div>
            <!-- end container -->
        </nav>
        <!-- end nav -->
    </div>
    <!-- end nav section -->

    <?= $this->renderSection('users'); ?>

    <!-- footer -->
    <footer class="foot" style="background: linear-gradient(0deg, rgba(38, 86, 190, 08), rgba(38, 86, 190, 0.9)), url(/assets/img/bg-footer.png)">
        <div class="container">
            <div class="footer__section">
                <div class="row foot__top">
                    <div class="col-sm-4 col-12 flex">
                        <a href="/" class="d-flex align-items-center justify-content-start">
                            <img class="foot__img" src="/assets/img/logo-foot.svg" alt="..." />
                        </a>
                    </div>
                    <!-- end img foot -->

                    <div class="col-sm-8 col-12 d-flex justify-content-end">
                        <div class="foot__content">
                            <p>AyoVaksin dikembangkan untuk melayani masyarakat dalam rangka menghentikan rantai Coronavirus Disease (COVID-19). Kami membantu instansi-instansi yang terkait dalam program vaksinasi di Indonesia. Menjadikan proses vaksinasi berjalan lancar dan merata demi terwujudnya Indonesia bebas corona.</p>
                            <a class="main__btn btn__saran mt-3" href="/home/saran">Kotak Saran</a>
                        </div>
                    </div>
                    <!-- end desc foot -->
                </div>
                <!-- end foot top -->

                <hr style="border: 1px solid rgba(242, 244, 248, 1)" />

                <div class="row pt-2 foot__bottom">
                    <div class="col-md-6 col-sm-12 flex__left">
                        <ul class="foot__navlink">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/home/alur">Alur</a>
                            </li>
                            <li>
                                <a href="/home/daftarvaksin">Daftar Vaksin</a>
                            </li>
                            <li>
                                <a href="/home/kebijakanprivasi">Kebijakan Privasi</a>
                            </li>
                        </ul>
                        <p class="font__second">Save yourself to save others.</p>
                    </div>
                    <!-- end left -->

                    <div class="col-md-6 col-sm-12 flex__right">
                        <div class="foot__icon mb-3">
                            <a href="#" class="d-flex align-items-center">
                                <img src="/assets/img/instagram-icon.svg" height="20px" alt="..." />
                            </a>
                            <a href="#" class="d-flex align-items-center ms">
                                <i class="icofont-linkedin"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center ms">
                                <i class="icofont-youtube-play"></i>
                            </a>
                        </div>
                        <p class="font__second" style="font-size: 14px">© AyoVaksin. All rights reserved.</p>
                    </div>
                    <!-- end right -->
                </div>
                <!-- end foot bottom -->
            </div>
            <!-- end footer section -->
        </div>
        <!-- end container -->
    </footer>
    <!-- end footer -->

    <!-- scroll up button -->
    <i class="bi bi-caret-up-fill scroll__up"></i>
    <!-- end scroll up button -->

    <!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- jquery 3.5.1 Gcdn scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- bootstrap scripts -->

    <script src="/assets/js/scripts.js"></script>
    <!-- Custom scripts -->
    <!-- Custom scripts -->
    <script>
        // zoom
        mediumZoom(".zoom", {});
    </script>

    <?php if ($tab == 'register') : ?>
        <script>
            // categoryAccount
            function categoryAccount() {
                var categry = $("#selectCategory").val();

                if (categry == "2") {
                    $(".instansi").removeClass('d-none');
                    $(".nama__peserta").addClass('d-none');
                } else {
                    $(".nama__peserta").removeClass('d-none');
                    $(".instansi").addClass('d-none');
                }
            }

            $("#selectCategory").change(categoryAccount);
        </script>
    <?php endif; ?>
</body>

</html>