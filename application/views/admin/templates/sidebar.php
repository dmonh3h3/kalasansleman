<!-- Page Wrapper -->
<div id="wrapper">

	<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
			<div class="sidebar-brand-icon">
				<!-- <img src="<?= base_url('assets/img/muh.png') ?>" width="40" heigth="40"> -->
			</div>
			<div class="sidebar-brand-text mx-3">Dashboard
			</div>

		</a>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Admin
		</div>

		<!-- Nav Item - Dashboard -->
		<li class=" nav-item <?php if ($this->uri->segment(1) == "dashboard") echo "active"; ?>">
			<a class="nav-link" href="<?= base_url('dashboard'); ?>">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Dashboard</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			User
		</div>

		<!-- Nav Item - Charts -->
		<!-- <li class="nav-item <?php if ($this->uri->segment(1) == "user") echo "active"; ?>">
            <a class="nav-link" href="<?= base_url('user'); ?>">
                <i class="fas fa-fw fa-user"></i>
                <span>My Profile</span></a>
        </li> -->

		<?php if($this->session->userdata('level') < 3) {?>
		<!-- Nav Item - Charts -->
		<li class="nav-item <?php if ($this->uri->segment(1) == "kd" || $this->uri->segment(1) == "mapel") echo "active"; ?>">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseposting"
				aria-expanded="true" aria-controls="collapseTwo">
				<i class="fas fa-fw fa-folder"></i>
				<span>Posting</span>
			</a>
			<div id="collapseposting" class="collapse">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Opsi :</h6>
					<a class="collapse-item" href="<?= base_url('posting'); ?>/tambah">Tambah Posting</a>
					<a class="collapse-item" href="<?= base_url('posting'); ?>">Data Posting</a>
				</div>
			</div>
		</li>
		<?php } ?>
		<!-- Nav Item - Pages Collapse Menu Data Penilaian -->
		<li
			class="nav-item <?php if ($this->uri->segment(1) == "kd" || $this->uri->segment(1) == "mapel") echo "active"; ?>">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
				aria-expanded="true" aria-controls="collapseTwo">
				<i class="fas fa-fw fa-folder"></i>
				<span>Kategori</span>
			</a>
			<div id="collapseTwo" class="collapse">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Opsi :</h6>
					<a class="collapse-item" href="<?= base_url('kategori'); ?>/">Lihat Kategori</a>
				</div>
			</div>
		</li>

		<!-- Nav Item - Pages Collapse Menu Rencana Penilaian -->
		<!-- <li
			class="nav-item <?php if ($this->uri->segment(1) == "rencana" || $this->uri->segment(1) == "k2" || $this->uri->segment(1) == "k3") echo "active"; ?>">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#rencana" aria-expanded="true"
				aria-controls="rencana">
				<i class="fas fa-fw fa-map"></i>
				<span>Akun</span>
			</a>
			<div id="rencana" class="collapse">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Opsi :</h6>
					<a class="collapse-item" href="<?= base_url(''); ?>">Edit</a>
				</div>
			</div>
		</li> -->

		<!-- Nav Item - Pages Collapse Menu Input Nilai -->
		<li
			class="nav-item <?php if ($this->uri->segment(2) == "jurnal" || $this->uri->segment(1) == "nilai") echo "active"; ?>">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tampilnilai"
				aria-expanded="true" aria-controls="nilai">
				<i class="fas fa-fw fa-pen"></i>
				<span>Informasi</span>
			</a>
			<div id="tampilnilai" class="collapse">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Opsi :</h6>
					<a class="collapse-item" href="<?= base_url('informasi'); ?>">Edit</b></a>
				</div>
			</div>
		</li>

		<!-- Nav Item - Database Guru -->
		<!-- <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-users"></i>
                <span>Data Guru</span></a>
        </li> -->

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Nav Item - Charts -->
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('auth/logout'); ?>">
				<i class="fas fa-sign-out-alt"></i>
				<span>Logout</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">

		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

	</ul>
	<!-- End of Sidebar -->
