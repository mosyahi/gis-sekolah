<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="<?= base_url('vendors/images/school.png') ?>" style="width: 40px; height: 40px;" alt="" class="dark-logo" />
            <img src="<?= base_url('vendors/images/school.png') ?>" style="width: 40px; height: 40px;" alt="" class="light-logo" />
            <h4 class="light-logo text-white">Maps School</h4>
            <h4 class="dark-logo text-black">Maps School</h4>
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <div class="sidebar-small-cap">HOME</div>
                </li>
                <li>
                    <a href="<?= base_url('admin/dashboard') ?>" class="dropdown-toggle no-arrow <?= ($activePage == 'home') ? 'active' : '' ?>">
                        <span class="micon bi bi-house-door-fill"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li>
                    <div class="sidebar-small-cap">DATA MASTER</div>
                </li>
                <li>
                    <a href="<?= base_url('admin/kategori') ?>" class="dropdown-toggle no-arrow <?= ($activePage == 'kategori' || $activePage == 'tambah_kategori' || $activePage == 'edit_kategori') ? 'active' : '' ?>">
                        <span class="micon bi bi-journals"></span><span class="mtext">Data Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/kecamatan') ?>" class="dropdown-toggle no-arrow <?= ($activePage == 'kecamatan' || $activePage == 'tambah_kecamatan' || $activePage == 'edit_kategori') ? 'active' : '' ?>">
                        <span class="micon bi bi-journal-text"></span><span class="mtext">Data Kecamatan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/sekolah') ?>" class="dropdown-toggle no-arrow <?= ($activePage == 'sekolah' || $activePage == 'tambah_sekolah' || $activePage == 'edit_sekolah') ? 'active' : '' ?>">
                        <span class="micon bi bi-easel2-fill"></span><span class="mtext">Data Sekolah</span>
                    </a>
                </li>
                <li>
                    <div class="sidebar-small-cap">RUTE MAPS</div>
                </li>
                <li>
                    <a href="<?= base_url('admin/peta') ?>" class="dropdown-toggle no-arrow <?= ($activePage == 'peta' || $activePage == 'tambah_peta' || $activePage == 'edit_peta') ? 'active' : '' ?>">
                        <span class="micon bi bi-geo-alt-fill"></span><span class="mtext">Peta Sekolah</span>
                    </a>
                </li>
                <li>
                    <div class="sidebar-small-cap">ADMIN ACCESS</div>
                </li>
                <li>
                    <a href="<?= base_url('admin/administrator') ?>" class="dropdown-toggle no-arrow <?= ($activePage == 'administrator' || $activePage == 'tambah_administrator' || $activePage == 'edit_administrator') ? 'active' : '' ?>">
                        <span class="micon bi bi-person"></span><span class="mtext">Administrator</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/reset') ?>" class="dropdown-toggle no-arrow <?= ($activePage == 'reset' || $activePage == 'tambah_reset' || $activePage == 'edit_reset') ? 'active' : '' ?>">
                        <span class="micon bi bi-lock"></span><span class="mtext">Reset Password</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>