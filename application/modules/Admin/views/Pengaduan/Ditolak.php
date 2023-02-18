<?php
$linkin = $this->uri->segment(1) . '/' . $this->uri->segment(2);
$no = '1';
?>
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <!-- <ol class="breadcrumb">
                <li><a href="<?= base_url($linkin . '/add') ?>" class="btn btn-success">Tambah Data</a></li>
            </ol> -->
        </nav>
        <h4 class="mb-1 mt-0">Data <?= $title ?></h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <table id="basic-datatable" class="table  nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-center">Judul Laporan</th>
                            <th class="text-center">Tanggal Laporan</th>
                            <th class="text-center">Lokasi</th>
                            <th class="text-center">Instansi</th>
                            <th class="text-center">Kategori</th>
                            <th class="text-center">Pelapor</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Alasan Ditolak</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $row) : ?>
                            <tr>
                                <td width="50"><?= $no++ ?></td>
                                <td style="width: 100;"><?= $row->judulLaporan ?></td>
                                <!-- <td style="width: 100;"><?= $row->isiLaporan ?></td> -->
                                <td style="width: 100;"><?= tgl_indo($row->tanggalLaporan)  ?></td>
                                <td style="width: 100;"><?= $row->lokasiLaporan ?></td>
                                <td style="width: 100;"><?= $row->instansiLaporan ?></td>
                                <td style="width: 100;"><?= $row->namaKategori ?></td>
                                <td style="width: 100;"><?= $row->namaLengkap ?></td>
                                <td style="width: 100;"><?= fd_verify($row->verifyLaporan) ?></td>
                                <td style="width: 100;"><?= $row->alasanDitolak ?></td>
                                <td width="100" class="text-center">
                                    <div class="btn-group mb-0">
                                    <!-- <a href="<?= base_url($linkin . '/detail/' . $row->idPengaduan) ?>" class="btn btn-info btn-sm" data-toggle="tooltip" title="Lihat Laporan"><i class="uil uil-eye"></i></a>
                                        <a href="<?= base_url($linkin . '/edit/' . $row->idPengaduan) ?>" class="btn btn-info btn-sm" data-toggle="tooltip" title="Edit"><i class="uil uil-edit"></i></a> -->
                                        <a href="<?= base_url($linkin . '/delete/' . $row->idPengaduan) ?>" id="<?= $row->judulLaporan ?>" class="delete-data btn btn-info btn-sm" data-toggle="tooltip" title="Hapus"><i class="uil uil-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->