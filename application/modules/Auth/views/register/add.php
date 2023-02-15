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
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12 p-5">
                                    <div class="mx-auto mb-5">
                                        <a href="#">
                                        <img src="<?= base_url() ?>upload/dinaslh.png" class="mx-auto d-block" alt="" height="150" />
                                            <h3 class=" align-middle ml-1 text-center text-logo">PELAYANAN PENGADUAN</h3>
                                            <h5 class=" align-middle ml-1 text-center text-logo">DINAS LINGKUNGAN HIDUP KOTA BANJARMASIN</h5>
                                        </a>
                                    </div>

                                    <h6 class="h5 mb-0 mt-4">Selamat Datang</h6>
                                    <p class="text-muted mt-1 mb-4">Silahkan daftar akun, untuk melakukan pengaduan ke Dinas Lingkungan Hidup Kota Banjarmasin.</p>

                                    <form action="<?= base_url('auth/register/addAction') ?>" method="Post" class="needs-validation authentication-form" novalidate>
                                            <div class="form-group mb-3">
                                                <label for="validationCustom01">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="namaPengadu" required>
                                                <div class="invalid-feedback">
                                                    Harus diisi!
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="validationCustom01">NIK </label>
                                                    <input type="text" class="form-control" name="nikPengadu" required>
                                                <div class="invalid-feedback">
                                                    Harus diisi!
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="validationCustom01">No Telepon</label>
                                                    <input type="text" class="form-control" name="noTelp" required>
                                                <div class="invalid-feedback">
                                                    Harus diisi!
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="validationCustom01">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat" required>
                                                <div class="invalid-feedback">
                                                    Harus diisi!
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="validationCustom01">Email</label>
                                                    <input type="text" class="form-control" name="email" required>
                                                <div class="invalid-feedback">
                                                    Harus diisi!
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="validationCustom01">Username</label>
                                                    <input type="text" class="form-control" name="username" required>
                                                <div class="invalid-feedback">
                                                    Harus diisi!
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="validationCustom01">Password</label>
                                                    <input type="text" class="form-control" name="password" required>
                                                <div class="invalid-feedback">
                                                    Harus diisi!
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="validationCustom01">Ulangi Password</label>
                                                    <input type="text" class="form-control" name="password1" required>
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
                                            <button class="btn btn-primary btn-block" type="submit">Daftar</button>
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