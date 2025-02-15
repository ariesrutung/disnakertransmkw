<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $page->title ?> | <?php echo $page->site_title ?> </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>/assets/frontend/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>/assets/frontend/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/assets/frontend/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo base_url(); ?>/assets/frontend/favicon/site.webmanifest">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>/assets/frontend/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.7.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    li.py-1::marker {
      color: #47b2e4;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
  defined('BASEPATH') or exit('No direct script access allowed'); ?>

  <?php include viewPath('web/template/header'); ?>
  <!-- End Header -->
  <style>
    .portfolio #portfolio-flters {
      list-style: none;
      padding: 0;
      display: flex !important;
      margin-bottom: 20px;
      overflow: visible;
      white-space: nowrap !important;
      width: 100% !important;
      overflow-x: auto !important;
      overflow-y: hidden !important;
      -webkit-overflow-scrolling: touch !important;
      justify-content: flex-start !important;
    }

    .faq-list .collapse {
      padding: 0 30px;
    }

    .faq-list .collapse a {
      padding: 0;
      margin-top: 10px;
    }
  </style>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Selamat Datang</h1>
          <h2> di Website Resmi Dinas Tenaga Kerja dan Transmigrasi Kabupaten Manokwari</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/manpower.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a target="_blank" href="https://kemnaker.go.id"><img src="<?php echo base_url(); ?>/assets/frontend/assets/img/clients/logokemenaker.png" class="img-fluid" alt="Kementerian Ketenagakerjaan RI"></a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a target="_blank" href="https://papuabaratprov.go.id"><img src="<?php echo base_url(); ?>/assets/frontend/assets/img/clients/logoprovpabar.png" class="img-fluid" alt="Pemerintah Provinsi Papua Barat"></a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a target="_blank" href="https://www.manokwarikab.go.id"><img src="<?php echo base_url(); ?>/assets/frontend/assets/img/clients/logopemkabmanokwari.png" class="img-fluid" alt="Pemerintah Kabupaten Manokwari"></a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a target="_blank" href="https://lpse.kemnaker.go.id/eproc4"><img src="<?php echo base_url(); ?>/assets/frontend/assets/img/clients/lpse-logo.png" class="img-fluid" alt="LPSE Kementerian Ketenagakerjaan RI"></a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a target="_blank" href="https://jdih.kemnaker.go.id"><img src="<?php echo base_url(); ?>/assets/frontend/assets/img/clients/jdih.png" class="img-fluid" alt="JDIH Kementerian Ketenagakerjaan RI"></a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a target="_blank" href="https://jobfair.kemnaker.go.id/web"><img src="<?php echo base_url(); ?>/assets/frontend/assets/img/clients/jobfair.png" class="img-fluid" alt="Jobfair Kementerian Ketenagakerjaan RI"></a>
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-5 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/tujuan.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Tujuan</h3>
            <p class="fst">
              Dengan berpedoman pada Visi dan Misi tersebut di atas maka Tujuan Dinas Tenaga Kerja dan Transmigrasi Kabupaten Manokwari dapat dirumuskan sebagai berikut:
            </p>

            <div class="skills-content">
              <ol type="a">
                <li class="py-1">Meningkatkan perluasan dan kesempatan kerja;</li>
                <li class="py-1">Meningkatkan kerjasama hubungan industrial dan Perlindungn tenaga kerja dengan pihak terkait;</li>
                <li class="py-1">Terbangunnya rumah layak huni bagi transmigrasi lokal;</li>
                <li class="py-1">Meningkatkan infrastruktur lokasi transmigrasi;</li>
                <li class="py-1">Meingkatkan profesionalisme aparatur;</li>
                <li class="py-1">Meningkatkan sarana dan prasarana aparat;</li>
                <li class="py-1">Meningkatkan kualitas administrasi keuangan, teknis perencanaan dan pelaporan.</li>
              </ol type="a">
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Sasaran Strategis</h3>
            <p class="fst">
              Dinas Tenaga Kerja dan Transmigrasi Kabupaten Manokwari telah merumuskan tujuan yang merupakan bagian integral dalam proses Rencana Strategis Dinas Tenaga Kerja Dan Transmigrasi Kabupaten Manokwari Tahun 2021 – 2025 untuk mencapai visi.
            </p>

            <div class="skills-content">
              <ol type="a">
                <li class="py-1">Mendidik dan melatih para pencari kerja agar dapat mencari nafkahnya sendiri sehingga dapat mengurangi angka pengangguran dan mengurangi angka kemiskinan;</li>
                <li class="py-1">Meningkatkan kerja sama hubungan industrial dan perlindungan Tenaga Kerja dengan pihak terkait;</li>
                <li class="py-1">Meningkatnya Kualitas pemukiman yang layak huni, layak usaha, layak berkembang serta layak lingkungan;</li>
                <li class="py-1">Meningkatkan kualitas Aparatur Dinas Nakertrans;</li>
                <li class="py-1">Meningkatkan kualitas dan Kuantitas administrasi keuangan, perencanaan serta pelaporan Program dan Data.</li>
              </ol>

            </div>

          </div>

          <div class="col-lg-5 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/sasaran.webp" class="img-fluid">
          </div>

        </div>
    </section><!-- End Skills Section -->



    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Kartu Pencari Kerja (Kartu Ak/1)</h3>
            <p>Proses pembuatan kartu kuning dimulai dengan pendaftaran akun untuk selanjutnya mengisi formulir Ak/1 dan mengunggah dokumen. Adapun dokumen yang dibutuhkan diantaranya: Pas Foto, KTP, Ijazah Terakhir, Transkrip Nilai, Riwayat Hidup, SKCK dan Suket. Sehat</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php echo site_url('web/registrasi'); ?>">Buat Akun</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Skills Section ======= -->

    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Statistik Pencari Kerja</h2>
          <p class="fst-italic">
            Berikut ini ditampilkan statistik pencari kerja di Kab. Manokwari.
          </p>
        </div>
        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <div class="skills-content">
              <h4>Berdasarkan Jenjang Pendidikan Terakhir</h4>
              <?php foreach ($c_pendidikan_terakhir as $pt) : ?>
                <div class="progress">
                  <span class="skill"><?php echo $pt->jenjang; ?> <i class="val"><?php echo $pt->total; ?> orang</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $pt->total; ?>" aria-valuemin="0" aria-valuemax="<?php echo $max_umur; ?>"></div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <div class="skills-content">
              <h4>Berdasarkan rentang umur</h4>
              <?php
              $u1 = 0;
              $u2 = 0;
              $u3 = 0;
              $u4 = 0;
              $u5 = 0;
              $u6 = 0;
              foreach ($c_umur as $u) :
                if ($u->umur < 15) {
                  $u1 += $u->jumlah;
                }
                if ($u->umur >= 15 && $u->umur < 24) {
                  $u2 += $u->jumlah;
                }
                if ($u->umur >= 25 && $u->umur < 34) {
                  $u3 += $u->jumlah;
                }
                if ($u->umur >= 35 && $u->umur < 44) {
                  $u4 += $u->jumlah;
                }
                if ($u->umur >= 45 && $u->umur < 54) {
                  $u5 += $u->jumlah;
                }
                if ($u->umur > 54) {
                  $u6 += $u->jumlah;
                }
              endforeach;
              ?>

              <div class="progress">
                <span class="skill">
                  < 15 th <i class="val"><?php echo $u1; ?> orang</i>
                </span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $u1; ?>" aria-valuemin="0" aria-valuemax="<?php echo $max_umur; ?>"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">15 - 24 th <i class="val"><?php echo $u2; ?> orang</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $u2; ?>" aria-valuemin="0" aria-valuemax="<?php echo $max_umur; ?>"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">25 - 34 th<i class="val"><?php echo $u3; ?> orang</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $u3; ?>" aria-valuemin="0" aria-valuemax="<?php echo $max_umur; ?>"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">35 - 44 th<i class="val"><?php echo $u4; ?> orang</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $u4; ?>" aria-valuemin="0" aria-valuemax="<?php echo $max_umur; ?>"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">45 - 54 th <i class="val"><?php echo $u5; ?> orang</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $u5; ?>" aria-valuemin="0" aria-valuemax="<?php echo $max_umur; ?>"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">> 54 th<i class="val"><?php echo $u6; ?> orang</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $u6; ?>" aria-valuemin="0" aria-valuemax="<?php echo $max_umur; ?>"></div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>

        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-id-card"></i></div>
              <h4>Kartu Pencari Kerja</h4>
              <p>Kartu Ak/1 adalah kartu tanda pencari kerja yang sering disebut pula dengan kartu kuning. Kartu ini dikeluarkan oleh lembaga pemerintah, Dinas Ketenagakerjaan atau Disnaker, yang dibuat dengan tujuan untuk pendataan para pencari kerja.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user-voice"></i></div>
              <h4>Pengaduan</h4>
              <p>Layanan ini diperuntukkan bagi anda pekerja/buruh/karyawan yang mendapati terjadinya pelanggaran terkait masalah ketenagakerjaan, seperti Upah, Pesangon, Jaminan Kesehatan, PHK dan masalah terkait lainnya di instansi/perusahaan tempat bekerja.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-buildings"></i></div>
              <h4>Pemagangan</h4>
              <p>Melalui program pemagangan, pemerintah berupaya agar angkatan kerja bisa memiliki keterampilan dan mudah terserap dunia kerja. </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-certification"></i></div>
              <h4>Pelatihan & Sertifikasi</h4>
              <p>Layanan ini diharapkan dapat memberikan bekal keterampilan profesional bagi angkatan kerja sehingga dapat membuka peluang kerja sendiri dan berwirausaha secara mandiri</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri</h2>
        </div>
        <?php
        $tenaker = directory_map('./assets/frontend/assets/img/tenagakerja/all', 1);
        $trans = directory_map('./assets/frontend/assets/img/transmigrasi/all', 1);
        ?>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-tenaker">Tenaga Kerja</li>
          <li data-filter=".filter-trans">Transmigrasi</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php foreach ($tenaker as $ten) : ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-tenaker">
              <div class="portfolio-img"><img src="<?php echo base_url('assets/frontend/assets/img/tenagakerja/all/') . $ten; ?>" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <a href="<?php echo base_url('assets/frontend/assets/img/tenagakerja/all/') . $ten; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          <?php endforeach; ?>
          <?php foreach ($trans as $tra) : ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-trans">
              <div class="portfolio-img"><img src="<?php echo base_url('assets/frontend/assets/img/transmigrasi/all/') . $tra ?>" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <a href="<?php echo base_url('assets/frontend/assets/img/transmigrasi/all/') . $tra ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team Work</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/team/kadis.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Yusak Dowansiba, SH.,MA</h4>
                <span>Kepala Dinas</span>
                <div class="social">
                  <a href="tel:+6281247319475"><i class="ri-phone-fill"></i></a>
                  <a target="_blank" href="https://wa.me/6281247319475"><i class="ri-whatsapp-fill"></i></a>
                  <a href="mailto:yusakdowansiba041975@gmail.com"><i class="ri-mail-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/team/sekdis.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Jolanda Herlani Kwa, SE., M.Si</h4>
                <span>Sekretaris</span>
                <div class="social">
                  <a href="tel:+6285254515133"><i class="ri-phone-fill"></i></a>
                  <a target="_blank" href="https://wa.me/6285254515133"><i class="ri-whatsapp-fill"></i></a>
                  <a href="mailto:jolandahkwa@gmail.com"><i class="ri-mail-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/team/kabid_pentaker.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ema Alberthina M. Rumsayor, S.STP</h4>
                <span>Kabid. PENTAKER</span>
                <p>Bidang Pelatihan dan Penempatan Tenaga Kerja</p>
                <div class="social">
                  <a href="tel:+6281315220583"><i class="ri-phone-fill"></i></a>
                  <a target="_blank" href="https://wa.me/6281315220583"><i class="ri-whatsapp-fill"></i></a>
                  <a href="mailto:emarumsayor1983@gmail.com"><i class="ri-mail-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/team/kabid_hubin.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dra. Sarah Sambara</h4>
                <span>Kabid. HUBIN</span>
                <p>Bidang Hubungan Industri dan Syarat Syarat Kerja</p>
                <div class="social">
                  <a href="tel:+6281344012295"><i class="ri-phone-fill"></i></a>
                  <a target="_blank" href="https://wa.me/6281344012295"><i class="ri-whatsapp-fill"></i></a>
                  <a href="mailto:ssambara64@gmail.com"><i class="ri-mail-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/team/kabid_p2kt.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hadi Eka Putra, SE</h4>
                <span>Kabid. P2KT</span>
                <p>Bidang Perencanaan dan Pembangunan Kawasan Transmigrasi</p>
                <div class="social">
                  <a href="tel:+628124864153"><i class="ri-phone-fill"></i></a>
                  <a target="_blank" href="https://wa.me/628124864153"><i class="ri-whatsapp-fill"></i></a>
                  <a href="mailto:hadiekaputra67@gmail.com"><i class="ri-mail-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/team/user.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Willem Ramhat Jaya Rumbrawer, S.Ip</h4>
                <span>Kabid. PKT</span>
                <p>Bidang Pengembangan Kawasan Transmigrasi</p>
                <div class="social">
                  <a href="tel:+6281247083142"><i class="ri-phone-fill"></i></a>
                  <a target="_blank" href="https://wa.me/6281247083142"><i class="ri-whatsapp-fill"></i></a>
                  <a href="mailto:"><i class="ri-mail-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Paling Sering Ditanyakan</h2>
          <p>Berikut kami himpun beberapa pertanyaan yang paling sering ditanyakan ke kantor Disnakertrans Kab. Manokwari</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Bagaimana caranya membuat kartu pencari kerja (Kartu Ak/1)? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Pada website disnakertransmkw.com, pilih menu Layanan - Kartu Pencari Kerja (Kartu Ak/1), kemudian membuat akun dan menyiapkan berkas berupa file Ijazah terakhir, KTP, Riwayat Hidup, SKCK, Suket. Sehat<br><a href="#">Selengkapnya...</a>
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Bagaimana cara memperoleh informasi terkait lowongan pekerjaan di wilayah Kab. Manokwari? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Apakah setelah mendapatkan pekerjaan, harus melapor ke Disnakertrans? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Apakah ada program pelatihan/magang yang diselenggarakan Disnakertrans? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>



          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Alamat:</h4>
                <p>Jl. Percetakan Negara, Manokwari - Papua Barat</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@disnakertransmkw.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telp:</h4>
                <p>0986-211934, 0986-211738</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.365973316296!2d134.0611203153388!3d-0.8627819355555999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d540a8f6fc1391d%3A0xca53166126f4e07f!2sDisnakertrans%20Kabupaten%20Manokwari!5e0!3m2!1sid!2sid!4v1658212862305!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0">
            <?php echo $this->session->flashdata('msg'); ?>
            <?php $attributes = array("id" => "contactform");
            echo form_open("web/kirim_email", $attributes); ?>
            <div class="col-12">
              <h4 class="m-0 px-0">Kirim Pesan</h4>
              <p class="px-0 py-2 text-secondary">Punya pertanyaan lebih lanjut? Hubungi kami melalui kontak yang tercantum di halaman ini, atau klik di sini untuk akses ke halaman pusat bantuan.</p>
            </div>
            <div class="form-group mt-4">
              <div class="col-md-12 mt-2 mb-1">
                <label for="name" class="control-label">Nama Lengkap</label>
              </div>
              <div class="col-md-12 mt-2 mb-1">
                <input class="form-control" name="name" placeholder="Ketik nama lengkap Anda di sini" type="text" value="<?php echo set_value('name'); ?>" />
                <span class="text-danger"><?php echo form_error('name'); ?></span>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 mt-2 mb-1">
                <label for="email" class="control-label">Email</label>
              </div>
              <div class="col-md-12 mt-2 mb-1">
                <input class="form-control" name="email" placeholder="Contoh: emailsaya@email.com" type="text" value="<?php echo set_value('email'); ?>" />
                <span class="text-danger"><?php echo form_error('email'); ?></span>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 mt-2 mb-1">
                <label for="subject" class="control-label">Judul Pesan</label>
              </div>
              <div class="col-md-12 mt-2 mb-1">
                <input class="form-control" name="subject" placeholder="Ketik judul pesan Anda di sini" type="text" value="<?php echo set_value('subject'); ?>" />
                <span class="text-danger"><?php echo form_error('subject'); ?></span>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 mt-2 mb-1">
                <label for="message" class="control-label">Isi Pesan</label>
              </div>
              <div class="col-md-12 mt-2 mb-1">
                <textarea class="form-control" name="message" rows="4" placeholder="Ketik isi pesan Anda di sini"><?php echo set_value('message'); ?></textarea>
                <span class="text-danger"><?php echo form_error('message'); ?></span>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 mt-2 mb-1">
                <input name="submit" type="submit" class="btn btn-primary w-25" value="Send" />
              </div>
            </div>
            <input type="hidden" value="welcome" name="page">
            <?php echo form_close(); ?>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        Copyright &copy; 2022 <strong><span>Disnakertrans Manokwari</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://manokwariweb.com/">ManokwariWeb</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/main.js"></script>

</body>

</html>