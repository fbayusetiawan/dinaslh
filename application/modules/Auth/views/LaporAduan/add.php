<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Pengaduan Pelayanan Dinas Lingkungan Hidup Banjarmasin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>upload/dinaslh.png">

    <!-- App css -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg">

    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12 p-5">
                                    <div class="mx-auto mb-5">
                                        <a href="<?= base_url() ?>">
                                        <img src="<?= base_url() ?>upload/dinaslh.png" class="mx-auto d-block" alt="" height="150" />
                                            <h3 class=" align-middle ml-1 text-center text-logo">PELAYANAN PENGADUAN</h3>
                                            <h5 class=" align-middle ml-1 text-center text-logo">DINAS LINGKUNGAN HIDUP KOTA BANJARMASIN</h5>
                                        </a>
                                    </div>

                                    <h6 class="h5 mb-0 mt-4">Selamat Datang</h6>
                                    <p class="text-muted mt-1 mb-4">Sampaikan laporan anda langsung kepada instansi pemerintah berwenang.</p>

                                    <form action="<?= base_url('Auth/LaporAduan/addAction') ?>" method="Post" class="needs-validation" enctype="multipart/form-data" novalidate>
                                    <div class="form-group mb-3">
                                        <label for="validationCustom01">Nama Lengkap </label>
                                            <input type="text" class="form-control" autofocus name="namaLengkap" required>
                                        <div class="invalid-feedback">
                                            Harus diisi!
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="validationCustom01">No Telepon </label>
                                            <input type="text" class="form-control" name="noTelp" required>
                                        <div class="invalid-feedback">
                                            Harus diisi!
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="validationCustom01">Alamat </label>
                                        <textarea class="form-control" rows="5" name="alamat" required id="example-textarea"></textarea>
                                        <div class="invalid-feedback">
                                            Harus diisi!
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="validationCustom01">Judul Laporan </label>
                                            <input type="text" class="form-control" name="judulLaporan" required>
                                        <div class="invalid-feedback">
                                            Harus diisi!
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="validationCustom01">Isi Laporan </label>
                                        <textarea class="form-control" rows="5" name="isiLaporan" required id="example-textarea"></textarea>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Tanggal Kejadian </label>
                        <input type="date" class="form-control" name="tanggalLaporan" required>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Lokasi Kejadian </label>
                        <input type="text" class="form-control" name="lokasiLaporan" required>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Instansi Tujuan </label>
                        <input type="text" class="form-control" name="instansiLaporan" required>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Kategori Laporan </label>
                        <select name="idKategoriLaporan" required class="form-control">
                            <option value="">Pilih Kategori Laporan</option>
                            <?php foreach (callTable('kategorilaporan')->result() as $kat) : ?>
                                <option value="<?= $kat->idKategoriLaporan ?>"><?= $kat->namaKategori ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            Harus dipilih!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Upload Foto Kejadian</label>
                        <input type="file" class="form-control" name="fotoLaporan" >
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                                        <div class="form-group mb-4">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                                <label class="custom-control-label" for="checkbox-signup">
                                                    I accept <a href="javascript: void(0);">Terms and Conditions</a>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-primary btn-block" type="submit">Laporkan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Sudah punya akun ?<a href="<?= base_url('auth/login') ?>" class="text-primary font-weight-bold ml-1">Masuk</a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="<?= base_url() ?>assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>assets/js/app.min.js"></script>

    <script src="<?= base_url() ?>assets/js/pages/form-validation.init.js"></script>

</body>

</html>