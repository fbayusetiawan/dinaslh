<?php
$this->db->where('username', $this->session->userdata('username'));
$user = $this->db->get('user')->row();
?>
<div class="row">
    <div class="col">

        <div class="card">

            <div class="card-body p-0">

                <h6 class="card-title border-bottom p-3 mb-0 header-title">Selamat Datang <i> </i>di Website Pelayanan Pengaduan Dinas Lingkungan Hidup Kota Banjarmasin</h6>
                <div class="row py-1">
                    <div class="col-xl-3 col-sm-6">
                        <!-- stat 1 -->
                        <div class="media p-3">
                            <i data-feather="users" class="align-self-center icon-dual icon-lg mr-4"></i>
                            <div class="media-body">
                                <h4 class="mt-0 mb-0"><?= $pengaduan ?></h4>
                                <span class="text-muted font-size-13">Jumlah Laporan Pengaduan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <!-- stat 1 -->
                        <div class="media p-3">
                            <i data-feather="users" class="align-self-center icon-dual icon-lg mr-4"></i>
                            <div class="media-body">
                                <h4 class="mt-0 mb-0"><?= $pengaduanProses ?></h4>
                                <span class="text-muted font-size-13">Jumlah Approve Aduan Masyarakat</span>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-xl-3 col-sm-6">
                        <div class="media p-3">
                            <i data-feather="grid" class="align-self-center icon-dual icon-lg mr-4"></i>
                            <div class="media-body">
                                <h4 class="mt-0 mb-0"><?= $pengadu ?></h4>
                                <span class="text-muted">Jumlah Pengadu Terdaftar</span>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="inbox-rightbar p-4">
                    <div class="mt-2">
                        <hr>

                        <div class="media mb-4 mt-1">
                            <img class="d-flex mr-2 rounded-circle avatar-sm" src="<?= base_url() ?>assets/images/users/avatar-2.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                                <span class="float-right">
                                    <p><span id="tanggalwaktu"></span></p>
                                </span>
                                <script>
                                    var tw = new Date();
                                    if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
                                    else(a = tw.getTime());
                                    tw.setTime(a);
                                    var tahun = tw.getFullYear();
                                    var hari = tw.getDay();
                                    var bulan = tw.getMonth();
                                    var tanggal = tw.getDate();
                                    var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
                                    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
                                    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;
                                </script>

                                <h6 class="m-0 font-14"><?= $user->namaLengkap ?></h6>
                                <small class="text-muted"><?= $user->email ?></small>
                            </div>
                        </div>


                        <div class="text-muted">
                            <img src="<?= base_url() ?>upload/kantordinaslh.jpg" height="400" class="mx-auto d-block" alt="...">
                            <br>
                            <p>Dinas Lingkungan Hidup Kota
Banjarmasin, adalah instansi yang
bertanggung jawab di bagian udara, air, dan
tanah di kota Banjarmasin. Dinas
Lingkungan Hidup kota Banjarmasin
memiliki tugas untuk mengamati kualitas
udara, air, dan tanah, sebagaimana cara
pengamatannya mengunakan metode –
metode yang sudah ada di dalam Dinas
Lingkungan Hidup Kota Banjarmasin
tersebut
                            </p>
                        </div>

                        <hr>


                    </div> <!-- end reply-box -->
                </div> <!-- end media-body -->
            </div> <!-- end medi-->



        </div>
    </div>
</div>
</div>
</div>