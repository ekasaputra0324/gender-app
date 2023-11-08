<div class="vertical-menu">

	<div class="h-100">

		<div class="user-wid text-center py-4">
			<div class="user-img">
				<img src="<?= base_url('assets/images/users.png') ?>" alt="" class="avatar-md mx-auto rounded-circle">

			</div>
			<div class="mt-3">
				<a href="#" class="text-reset fw-medium font-size-16 text-capitalize"><?= $user->name ?></a>
				<?php if ($user->role == 'ADMIN_OPD') { ?>
					<p class="text-muted mt-1 mb-0 font-size-13 text-capitalize">Admin OPD                               </p>
				<?php } ?>
				<?php if ($user->role == 'VERIFIKATOR') { ?>
					<p class="text-muted mt-1 mb-0 font-size-13 text-capitalize">Verifikator</p>
				<?php } ?>
				<?php if ($user->role == 'SUPER_ADMIN') { ?>
					<p class="text-muted mt-1 mb-0 font-size-13 text-capitalize">Super Admin</p>
				<?php } ?>
			</div>
		</div>

		<!--- Sidemenu -->
		<div id="sidebar-menu">
			<!-- Left Menu Start -->
			<ul class="metismenu list-unstyled" id="side-menu">
				<li class="menu-title">Menu</li>

				<li>
					<a href="<?= base_url('/') ?>" class="waves-effect <?= $page == 'dashboard' ? 'active' : '' ?>">
						<i class="mdi mdi-airplay"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<?php if ($role == 'ADMIN_OPD') { ?>
					<li>
						<a href="#" class="has-arrow waves-effect">
							<i class="mdi mdi-account-circle-outline"></i>
							<span>Master Data</span>
						</a>
						
						<ul class="sub-menu" aria-expanded="true">
							<li>
								<a href="<?= base_url('/urusan') ?>" class="waves-effect <?= $page == 'urusan' ? 'active' : '' ?>">
									<span>Data Urusan</span>
								</a>
							</li>
							<li><a href="#" class="has-arrow">Data Pegawai</a>
								<ul class="sub-menu text-capitalize" aria-expanded="true">
									<li><a href="<?= base_url('datapegawai/status') ?>">Status</a></li>
									<li><a href="<?= base_url('datapegawai/pns_jenjang_pendidikan') ?>">pns jenjang pendidikan</a></li>
									<li><a href="<?= base_url('datapegawai/non_pns_jenjang_pendidikan') ?>">non pns jenjang pendidikan</a></li>
									<li><a href="<?= base_url('datapegawai/pns_disabilitas_jenjang_pendidikan') ?>">pns disabilitas jenjang pendidikan</a></li>
									<li><a href="<?= base_url('datapegawai/non_pns_disabilitas_jenjang_pendidikan') ?>">non pns disabilitas jenjang pendidikan</a></li>
									<li><a href="<?= base_url('datapegawai/pns_jabatan') ?>">pns jabatan</a></li>
									<li><a href="<?= base_url('datapegawai/non_pns_jabatan') ?>">non pns jabatan</a></li>
									<li><a href="<?= base_url('datapegawai/pns_kepangkatan') ?>">pns kepangkatan</a></li>
								</ul>
							</li>

							<li><a href="#" class="has-arrow">Data Jabatan</a>
								<ul class="sub-menu text-capitalize" aria-expanded="true">
									<li><a href="<?= base_url('datajabatan/pertimbangan_jabatan_dan_kepangkatan') ?>">jabatan dan kepangkatan</a></li>
									<li><a href="<?= base_url('datajabatan/pns_jabatan_fungsional') ?>">pns jabatan fungsional</a></li>
									<li><a href="<?= base_url('datajabatan/pns_jabatan_lainnya') ?>">pns jabatan lainya</a></li>
									<li><a href="<?= base_url('datajabatan/pns_jabatan_struktural') ?>">pns jabatan struktural</a></li>
									<li><a href="<?= base_url('datajabatan/pns_pangkat_golongan') ?>">pns pangkat golongan</a></li>
								</ul>
							</li>
						</ul>

					</li>
				<?php	} ?>
				<?php if ($role == 'VERIFIKATOR') { ?>
					<li>
						<a href="javascript: void(0);" class="has-arrow waves-effect">
						<i class="mdi mdi-check-underline"></i>
							<span>Verifikasi Data</span>
						</a>
						<ul class="sub-menu" aria-expanded="false">
							<li>
								<a href="<?= base_url('/urusan/verifikator') ?>" class="waves-effect <?= $page == 'urusan' ? 'active' : '' ?>">
									<span>Data Urusan</span>
								</a>
							</li>
							<li><a href="<?= base_url('verifikator/pegawai') ?>">Data Pegawai</a></li>
							<li><a href="<?= base_url('verifikator/jabatan') ?>">Data Jabatan</a></li>
							
						</ul>
					</li>
				<?php	} ?>
				<li>
				</li>
				<?php  if ($role == 'SUPER_ADMIN') { ?>
					<li>
						<a href="#" class="has-arrow waves-effect">
							<i class="mdi mdi-account-circle-outline"></i>
							<span>Master Data</span>
						</a>
						<ul class="sub-menu" aria-expanded="true">
						<li>
								<a href="<?= base_url('/urusan/superadmin') ?>" class="waves-effect <?= $page == 'urusan' ? 'active' : '' ?>">
									<span>Data Urusan</span>
								</a>
							</li>
						<li><a href="#" class="has-arrow">OPD</a>
								<ul class="sub-menu text-capitalize" aria-expanded="true">
									<li><a href="<?= base_url('opd') ?>">Data OPD</a></li>
									<li><a href="<?= base_url('adminopd/') ?>">Admin OPD</a></li>
								</ul>
							</li>
							<li><a href="#" class="has-arrow">Data Pegawai</a>
								<ul class="sub-menu text-capitalize" aria-expanded="true">
									<li><a href="<?= base_url('datapegawai/status') ?>">Status</a></li>
									<li><a href="<?= base_url('datapegawai/pns_jenjang_pendidikan') ?>">pns jenjang pendidikan</a></li>
									<li><a href="<?= base_url('datapegawai/non_pns_jenjang_pendidikan') ?>">non pns jenjang pendidikan</a></li>
									<li><a href="<?= base_url('datapegawai/pns_disabilitas_jenjang_pendidikan') ?>">pns disabilitas jenjang pendidikan</a></li>
									<li><a href="<?= base_url('datapegawai/non_pns_disabilitas_jenjang_pendidikan') ?>">non pns disabilitas jenjang pendidikan</a></li>
									<li><a href="<?= base_url('datapegawai/pns_jabatan') ?>">pns jabatan</a></li>
									<li><a href="<?= base_url('datapegawai/non_pns_jabatan') ?>">non pns jabatan</a></li>
									<li><a href="<?= base_url('datapegawai/pns_kepangkatan') ?>">pns kepangkatan</a></li>
								</ul>
							</li>

							<li><a href="#" class="has-arrow">Data Jabatan</a>
								<ul class="sub-menu text-capitalize" aria-expanded="true">
									<li><a href="<?= base_url('datajabatan/pertimbangan_jabatan_dan_kepangkatan') ?>">jabatan dan kepangkatan</a></li>
									<li><a href="<?= base_url('datajabatan/pns_jabatan_fungsional') ?>">pns jabatan fungsional</a></li>
									<li><a href="<?= base_url('datajabatan/pns_jabatan_lainnya') ?>">pns jabatan lainya</a></li>
									<li><a href="<?= base_url('datajabatan/pns_jabatan_struktural') ?>">pns jabatan struktural</a></li>
									<li><a href="<?= base_url('datajabatan/pns_pangkat_golongan') ?>">pns pangkat golongan</a></li>
								</ul>
							</li>
						</ul>

					</li>
					<li>
						<a href="javascript: void(0);" class="has-arrow waves-effect">
						<i class="mdi mdi-book-search-outline"></i>
							<span>Laporan</span>
						</a>
						<ul class="sub-menu" aria-expanded="false">
							<li><a href="<?= base_url('laporan/pegawai') ?>">Data Pegawai</a></li>
							<li><a href="<?= base_url('laporan/jabatan') ?>">Data Jabatan</a></li>
							
						</ul>
					</li>
				<?php }?>

			</ul>
		</div>
		<!-- Sidebar -->
	</div>
</div>
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
	<div class="page-content">
