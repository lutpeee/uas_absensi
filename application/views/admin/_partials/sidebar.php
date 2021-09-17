<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/karyawan/dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active' : '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-calendar"></i>
            <span>Attandance</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo base_url('karyawan/absensi/inputabsen')  ?>">IN</a>
            <a class="dropdown-item" href="<?php echo base_url('karyawan/absensi/keluarabsen') ?>">OUT</a>
        </div>
    </li>
    <?php if ($this->session->userdata('level') == '1') {
    ?>
        <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active' : '' ?>">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-book"></i>
                <span>Data Attandance</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo base_url('karyawan/absensi/tampilmasuk') ?>">IN</a>
                <a class="dropdown-item" href="<?php echo base_url('karyawan/absensi/tampilkeluar') ?>">OUT</a>
            </div>
        </li>

    <?php
    }
    ?>
    <?php if ($this->session->userdata('level') == '2') {
    ?>
        <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active' : '' ?>">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-book"></i>
                <span>Data Absen </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo base_url('karyawan/absensi/tampilbyidmasuk') ?>">IN</a>
                <a class="dropdown-item" href="<?php echo base_url('karyawan/absensi/tampilbyidkeluar/') ?>">OUT</a>

            </div>
        </li>
        <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo site_url('admin/karyawan/editprofile') ?>">
                <i class="fa fa-user-md" aria-hidden="true"></i>
                <span>My Profile</span>
            </a>
        </li>

    <?php
    }
    ?>
    <?php if ($this->session->userdata('level') == '1') {
    ?>
        <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo site_url('admin/karyawan') ?>">
                <i class="fa fa-address-book" aria-hidden="true"></i>
                <span>Data Karyawan</span>
            </a>
        </li>
    <?php
    }
    ?>
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo site_url('karyawan/absensi/aboutus') ?>">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>About US</span>
        </a>
    </li>

</ul>