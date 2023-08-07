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
                    <a href="<?= base_url('admin/dashboard') ?>" class="dropdown-toggle no-arrow <?= ($activePage == 'home') ? 'active' : '' ?>">
                        <span class="micon bi bi-house-door-fill"></span><span class="mtext">Home</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/kategori') ?>" class="dropdown-toggle no-arrow <?= ($activePage == 'kategori' || $activePage == 'tambah_kategori' || $activePage == 'edit_kategori') ? 'active' : '' ?>">
                        <span class="micon bi bi-journals"></span><span class="mtext">Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/sekolah') ?>" class="dropdown-toggle no-arrow <?= ($activePage == 'sekolah' || $activePage == 'tambah_sekolah' || $activePage == 'edit_sekolah') ? 'active' : '' ?>">
                        <span class="micon bi bi-easel2-fill"></span><span class="mtext">Sekolah</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/peta') ?>" class="dropdown-toggle no-arrow <?= ($activePage == 'peta' || $activePage == 'tambah_peta' || $activePage == 'edit_peta') ? 'active' : '' ?>">
                        <span class="micon bi bi-geo-alt-fill"></span><span class="mtext">Peta</span>
                    </a>
                </li>



            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>