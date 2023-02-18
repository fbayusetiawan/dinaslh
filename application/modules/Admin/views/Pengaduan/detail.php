<?php
$linkin = $this->uri->segment(1) . '/' . $this->uri->segment(2);
?>

        <div class="email-container">
            <div class="inbox p-4">
                <div class="mt-2">
                    <h5><?= $row->judulLaporan ?></h5>
                        <hr>
                            <div class="media mb-4 mt-1">
                                <img class="d-flex mr-2 rounded-circle avatar-sm" src="<?= base_url() ?>assets/images/users/avatar-7.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <span class="float-right">Tanggal Laporan : <?= tgl_indo($row->tanggalLaporan)  ?></span>
                                    <h6 class="m-0 font-14"><?= $row->namaLengkap ?></h6>
                                    <small class="text-muted"><?= $row->noTelp ?></small>
                                </div>
                            </div>
                        
                            <div class="text-muted">
                                <p><b>Instansi Bersangkutan :</b> <?= $row->instansiLaporan ?></p>
                                <p><b>Kategori :</b> <?= $row->namaKategori ?></p>
                                <p><?= $row->isiLaporan ?></p>
                            </div>
                        </hr>
                    <h6> <i class="fa fa-paperclip mb-2"></i>Dokumentasi Terlampir</h6>
                        <div class="row">
                            <div class="col-xl-2 col-sm-4">
                                <img src="<?= base_url('upload/' . $row->fotoLaporan) ?>" width="200px" class="img-thumbnail img-responsive">
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="<?= base_url($linkin . '/accProses/' . $this->uri->segment(4)) ?>" class="btn btn-primary btn-rounded width-sm">Approve</a>
                            <a href="<?= base_url($linkin) ?>" class="btn btn-danger btn-rounded width-sm">Kembali</a>
                        </div>
                </div>
            </div>
                               
        </div>