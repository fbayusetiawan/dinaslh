<?php
$no = 1;
$now = date('Y-m-d');

?>

<script type="text/javascript">
    window.print();
</script>

<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN</title>
    <link rel="shortcut icon" href="<?= base_url() ?>/upload/dinaslh.png">
</head>

<body>
    <p align="center">
        <b>
            <img src="<?= base_url() ?>/upload/dinaslh.png" align="left" width="65">
            <font size="4">PEMERINTAH KOTA BANJARMASIN</font> <br>
            <font size="5">DINAS LINGKUNGAN HIDUP</font> <br>
            Jl. RE Martadinata No.1, Kertak Baru Ilir, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70231
        </b><br>
    </p>
    <hr size="1px" color="black">
    <hr size="4px" color="black">

    <h3>
        <center>
            DATA ADUAN YANG MASUK
        </center>
    </h3>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
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
                                <td style="width: 100;"><?= fd_verify1($row->verifyLaporan) ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <br>

    <br>
    <table width="100%">
        <tr>
            <td width="40%"></td>
            <td width="20%"></td>
            <td align="center">Banjarmasin, <?= tgl_indo($now) ?></td>
        </tr>
        <tr>
            <td align="center"><br><br><br></td>
            <td></td>
            <td align="center">Kepala Dinas<br><br><br></td>
        </tr>
        <tr>
            <td align="center"></td>
            <td></td>
            <td align="center"><u>Adi Royan Pratama, ST</u><br> NIP. 198011252000121003</td>
        </tr>
    </table>
</body>

</html>