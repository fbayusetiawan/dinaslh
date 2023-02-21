<!-- ========== Left Sidebar Start ========== -->
<?php
$tglkemarin = date('Y-m-d', strtotime("-1 day", strtotime(date("Y-m-d"))));
$tglA = date('d');
$getTgl = $tglA - 1;
$kurangTgl        = mktime(0, 0, 0, date("n"), date("j") - $getTgl, date("Y"));
$hasilTgl = date('Y-m-d', $kurangTgl);
?>
<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        <img src="<?= base_url() ?>assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
        <img src="<?= base_url() ?>assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

        <div class="media-body">
            <h6 class="pro-user-name mt-0 mb-0"><?= $this->session->userdata('namaLengkap'); ?></h6>
            <?php if ($this->session->userdata('roleId') == '1') : ?>
                <span class="pro-user-desc">Administrator</span>
            <?php elseif ($this->session->userdata('roleId') == '2') : ?>
                <span class="pro-user-desc">Pimpinan</span>
            <?php elseif ($this->session->userdata('roleId') == '3') : ?>
                <span class="pro-user-desc">Pengadu</span>
            <?php endif ?>
        </div>
        <div class="dropdown align-self-center profile-dropdown-menu">
            <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <span data-feather="chevron-down"></span>
            </a>
            <div class="dropdown-menu profile-dropdown">




                <a href="<?= base_url('Auth/Logout') ?>" class="dropdown-item notify-item">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li class="menu-title">Navigation</li>
                <?php if ($this->session->userdata('roleId') == '1') : ?>
                    <li>
                        <a href="<?= base_url('Admin/Dashboard') ?>">
                            <i data-feather="home"></i>
                            <!-- <span class="badge badge-success float-right">1</span> -->
                            <span> Dashboard </span>
                        </a>
                    </li>                    
                    <li class="menu-title">Pelayanan</li>
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="inbox"></i>
                            <span> Pengaduan </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?= base_url('Admin/Pengaduan') ?>">Masuk</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Admin/Pengaduan/Proses') ?>">Proses</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Admin/Pengaduan/Ditolak') ?>">Ditolak</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Admin/Pengaduan/Selesai') ?>">Selesai</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title">Master Data</li>
                    <li>
                        <!-- <a href="<?= base_url('Datamaster/Pengadu') ?>">
                            <i data-feather="users"></i>
                            <span> Data Pengadu </span>
                        </a> -->
                    </li>
                    <li>
                        <a href="<?= base_url('Datamaster/Users') ?>">
                            <i data-feather="user"></i>
                            <span> User </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Datamaster/KategoriL') ?>">
                            <i data-feather="tool"></i>
                            <span> Kategori Laporan </span>
                        </a>
                    </li>
                    <li class="menu-title">Report</li>
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="file-text"></i>
                            <span> Laporan </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="#m_masuk" data-toggle="modal">Laporan Masuk</a>
                            </li>
                            <li>
                                <a href="#m_proses" data-toggle="modal">Laporan Diproses</a>
                            </li>
                            <li>
                                <a href="#m_ditolak" data-toggle="modal">Laporan Ditolak</a>
                            </li>
                            <li>
                                <a href="#m_selesai" data-toggle="modal">Laporan Selesai</a>
                            </li>
                            <li>
                                <a href="#m_kategori" data-toggle="modal">Laporan Kategori</a>
                            </li>
                            
                        </ul>
                    </li>
                <?php elseif ($this->session->userdata('roleId') == '2') : ?>
                    <li>
                        <a href="<?= base_url('Admin/Dashboard') ?>">
                            <i data-feather="home"></i>
                            <!-- <span class="badge badge-success float-right">1</span> -->
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li class="menu-title">Report</li>
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="file-text"></i>
                            <span> Laporan </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="#m_masuk" data-toggle="modal">Laporan Masuk</a>
                            </li>
                            <li>
                                <a href="#m_proses" data-toggle="modal">Laporan Diproses</a>
                            </li>
                            <li>
                                <a href="#m_ditolak" data-toggle="modal">Laporan Ditolak</a>
                            </li>
                            <li>
                                <a href="#m_selesai" data-toggle="modal">Laporan Selesai</a>
                            </li>
                            <li>
                                <a href="#m_kategori" data-toggle="modal">Laporan Kategori</a>
                            </li>
                            
                        </ul>
                    </li>
                <?php elseif ($this->session->userdata('roleId') == '3') : ?>
                    <li>
                        <a href="<?= base_url('Home/Dash') ?>">
                            <i data-feather="home"></i>
                            <!-- <span class="badge badge-success float-right">1</span> -->
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Home/Pengaduan') ?>">
                            <i data-feather="book"></i>
                            <span> Pengaduan </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="book"></i>
                            <span> Pengaturan </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="#">Ubah Profil</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Auth/Logout') ?>">Log out</a>
                            </li>
                        </ul>
                    </li>
                <?php endif ?>




            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
<div class="modal fade" id="m_masuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter Laporan Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('laporan/Masuk') ?>" method="post" target="_blank">
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Dari</label>
                        <input type="date" name="dari" value="<?= $hasilTgl ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Sampai</label>
                        <input type="date" name="sampai" value="<?= $tglkemarin ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Print</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="m_proses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter Laporan Proses</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('laporan/Proses') ?>" method="post" target="_blank">
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Dari</label>
                        <input type="date" name="dari" value="<?= $hasilTgl ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Sampai</label>
                        <input type="date" name="sampai" value="<?= $tglkemarin ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Print</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="m_ditolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter Laporan Ditolak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('laporan/Ditolak') ?>" method="post" target="_blank">
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Dari</label>
                        <input type="date" name="dari" value="<?= $hasilTgl ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Sampai</label>
                        <input type="date" name="sampai" value="<?= $tglkemarin ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Print</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="m_selesai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter Laporan Selesai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('laporan/Selesai') ?>" method="post" target="_blank">
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Dari</label>
                        <input type="date" name="dari" value="<?= $hasilTgl ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Sampai</label>
                        <input type="date" name="sampai" value="<?= $tglkemarin ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Print</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="m_kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('laporan/kategori') ?>" method="post" target="_blank">
                <div class="form-group mb-3">
                        <label for="validationCustom01">Pilih Kategori </label>
                        <select name="idKategoriLaporan" id="idKategoriLaporan" required class="form-control">
                            <option value="">Pilih Kategori</option>
                            <?php foreach (callTable('kategorilaporan')->result() as $kategori) : ?>
                                <option value="<?= $kategori->idKategoriLaporan ?>"><?= $kategori->namaKategori ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            Harus dipilih!
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Print</button>
                </form>
            </div>
        </div>
    </div>
</div>
