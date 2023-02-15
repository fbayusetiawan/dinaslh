<?php
$linkin = $this->uri->segment(1) . '/' . $this->uri->segment(2);
$no = '1';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dinas Lingkungan Hidup Kota Banjarmasin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>upload/dinaslh.png" rel="icon">
    <link href="<?= base_url() ?>upload/dinaslh.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/ss/ss/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/ss/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/ss/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/ss/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/ss/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/ss/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/ss/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/ss/css/style.css" rel="stylesheet">

    <!-- plugin Datatables -->
    <link href="<?= base_url() ?>assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <!-- <a href="index.html" class="logo me-auto"><img src="<?= base_url() ?>upload/dinaslh.png" alt="" class="img-fluid"></a> -->
            <h1 class="logo me-auto"><a href="index.html">Layanan Pengaduan</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Laporan</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('Auth/Login') ?>">Login</a></li>
                    <li><a class="getstarted scrollto" href="#contact">Laporkan</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>DINAS LINGKUNGAN HIDUP</h1>
                    <h2>KOTA BANJARMASIN</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#contact" class="btn-get-started scrollto">Laporkan</a>
                        <a href="https://youtu.be/luheGTca7y0" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="<?= base_url() ?>upload/yes.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container ">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url() ?>upload/dinasslh.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url() ?>upload/dinasslh.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url() ?>upload/logoo.png" width="60px" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url() ?>upload/dinaslh.png" class="img-fluid" alt="">
                    </div>

                    <!-- <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url() ?>upload/dinaslh.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url() ?>upload/dinaslh.png" class="img-fluid" alt="">
                    </div> -->

                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-12">
                        <p>
                            Dinas Lingkungan Hidup Kota Banjarmasin merupakan salah satu Satuan Kerja Perangkat Daerah (SKPD) yang ada dikota Banjarmasin. Adapun tugas pokok Dinas Lingkungan Hidup adalah menyusun perencanaan dan melaksanakan kebijakan daerah dalam bidang penataan lingkungan, pengawasan dan pengendalian perencanaan lingkungan, serta pelayanan dan pengelohan kebersihan.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Laporan</h2>
                    <p>Laporan anda akan masuk ke Dinas Lingkungan Hidup Kota Banjarmasin, silahkan lihat "status" untuk melihat perkembangan laporan anda.</p>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <table id="basic-datatable" class="table nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th class="text-center">Judul Laporan</th>
                                            <th class="text-center">Lokasi</th>
                                            <th class="text-center">Instansi</th>
                                            <th class="text-center">Kategori</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $row) : ?>
                                            <tr>
                                                <td width="50"><?= $no++ ?></td>
                                                <td class="text-center" style="width: 100;"><?= $row->judulLaporan ?></td>
                                                <td class="text-center" style="width: 100;"><?= $row->lokasiLaporan ?></td>
                                                <td class="text-center" style="width: 100;"><?= $row->instansiLaporan ?></td>
                                                <td class="text-center" style="width: 100;"><?= $row->namaKategori ?></td>
                                                <td class="text-center" style="width: 100;"><?= fd_verify1($row->verifyLaporan) ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Layanan Pengaduan</h3>
                        <p>Pengelolaan pengaduan pelayanan publik di setiap organisasi penyelenggara di Indonesia belum terkelola secara efektif dan terintegrasi. Masing-masing organisasi penyelenggara mengelola pengaduan secara parsial dan tidak terkoordinir dengan baik. Akibatnya terjadi duplikasi penanganan pengaduan, atau bahkan bisa terjadi suatu pengaduan tidak ditangani oleh satupun organisasi penyelenggara, dengan alasan pengaduan bukan kewenangannya. Oleh karena itu, untuk mencapai visi dalam good governance maka perlu untuk mengintegrasikan sistem pengelolaan pengaduan pelayanan publik dalam satu pintu. Tujuannya, masyarakat memiliki satu saluran pengaduan secara Nasional..</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#contact">Laporkan</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Layanan Pengaduan Online Rakyat</h2>
                    <p>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p>Jl. RE Martadinata No.1, Kertak Baru Ilir, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70231</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>dinaslhkotabanjarmasin@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon:</h4>
                                <p>(0511) 3363811</p>
                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.4222547930567!2d114.82597431462698!3d-3.4892216429797926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de686be6eafc7ef%3A0xecb826b3f3685765!2sDinas%20Lingkungan%20Hidup%20Provinsi%20Kalimantan%20Selatan%20(DLH%20Provinsi%20Kalimantan%20Selatan)!5e0!3m2!1sid!2sid!4v1676355408441!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.4222547930567!2d114.82597431462698!3d-3.4892216429797926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de686be6eafc7ef%3A0xecb826b3f3685765!2sDinas%20Lingkungan%20Hidup%20Provinsi%20Kalimantan%20Selatan%20(DLH%20Provinsi%20Kalimantan%20Selatan)!5e0!3m2!1sid!2sid!4v1676355408441!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="<?= base_url('Auth/dashboard/AddAction') ?>" method="post" class="php-email-form" enctype="multipart/form-data">
                        
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="namaLengkap" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">No Telepon</label>
                                    <input type="text" class="form-control" name="noTelp" id="noTelp" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Judul Laporan</label>
                                <input type="text" class="form-control" name="judulLaporan" id="judul" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Isi Laporan</label>
                                <textarea class="form-control" name="isiLaporan" rows="6" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Tanggal Laporan</label>
                                <input type="date" class="form-control" name="tanggalLaporan" id="tanggal" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Lokasi Laporan</label>
                                <input type="text" class="form-control" name="lokasiLaporan" id="lokasi" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Instansi Tujuan</label>
                                <input type="text" class="form-control" name="instansiLaporan" id="instantsi" required>
                            </div>
                            <div class="form-group">
                                <label for="validationCustom01">Kategori Laporan </label>
                                <select name="idKategoriLaporan" required class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    <?php foreach (callTable('kategorilaporan')->result() as $kateg) : ?>
                                        <option value="<?= $kateg->idKategoriLaporan ?>"><?= $kateg->namaKategori ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Harus dipilih!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Foto</label>
                                <input type="file" class="form-control" name="fotoLaporan" id="fotoLaporan" required>
                            </div>
                            <div class="text-center">
                                <button class="btn-sm btn btn-primary" type="submit">Laporkan</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Dinas Lingkungan Hidup Kota Banjarmasin</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            </div>
        </div>
    </footer>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/ss/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/ss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/ss/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/ss/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/ss/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/ss/vendor/waypoints/noframework.waypoints.js"></script>
    <!-- <script src="<?= base_url() ?>assets/ss/vendor/php-email-form/validate.js"></script> -->

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/ss/js/main.js"></script>

    <!-- datatable js -->
    <script src="<?= base_url() ?>assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/datatables/responsive.bootstrap4.min.js"></script>

    <script src="<?= base_url() ?>assets/libs/datatables/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/datatables/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/datatables/buttons.flash.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/datatables/buttons.print.min.js"></script> -->

    <script src="<?= base_url() ?>assets/libs/datatables/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/datatables/dataTables.select.min.js"></script>

    <!-- Datatables init -->
    <script src="<?= base_url() ?>assets/js/pages/datatables.init.js"></script>

</body>

</html>