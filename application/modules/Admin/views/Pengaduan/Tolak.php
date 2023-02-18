<?php
$linkin = $this->uri->segment(1) . '/' . $this->uri->segment(2);
?>

<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <!-- <ol class="breadcrumb">
                <li><a href="<?= base_url($ctrl . '/add') ?>" class="btn btn-success">Tambah Data</a></li>
            </ol> -->
        </nav>
        <h4 class="mb-1 mt-0"><?= $title ?></h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" novalidate="" action="<?= base_url($linkin . '/editDitolak/' . $this->uri->segment(4)) ?>" method="post">
                <div class="form-group mb-3">
                        <label for="validationCustom01">Judul Laporan </label>
                        <input type="text" class="form-control" value="<?= $row->judulLaporan ?>" disabled>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Isi Laporan </label>
                        <input type="text" class="form-control"  value="<?= $row->isiLaporan ?>" disabled>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Tanggal Kejadian </label>
                        <input type="date" class="form-control"  value="<?= $row->tanggalLaporan ?>" disabled>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Lokasi Kejadian </label>
                        <input type="text" class="form-control"  value="<?= $row->lokasiLaporan ?>" disabled>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Instansi Tujuan </label>
                        <input type="text" class="form-control" value="<?= $row->instansiLaporan ?>" disabled>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="validationCustom01">Alasan Ditolak </label>
                        <input type="text" class="form-control" name="alasanDitolak" required>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <button class="btn-sm btn btn-primary" type="submit">Simpan</button>
                    <a href="<?= base_url($linkin) ?>" class="btn-sm btn btn-danger">Kembali</a>
                </form>
            </div> <!-- end card-body-->
        </div>
    </div>
</div>