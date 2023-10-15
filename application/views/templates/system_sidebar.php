<div class="vertical-menu">

	<div class="h-100">

		<div class="user-wid text-center py-4">
			<div class="user-img">
				<img src="<?= base_url('assets/images/users.png') ?>" alt="" class="avatar-md mx-auto rounded-circle">
			</div>

			<div class="mt-3">

				<a href="#" class="text-reset fw-medium font-size-16">Patrick Becker</a>
				<p class="text-muted mt-1 mb-0 font-size-13">UI/UX Designer</p>

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

				<li>
					<a href="#" class="has-arrow waves-effect">
					<i class="mdi mdi-account-circle-outline"></i>
						<span>Master Data</span>
					</a>
					<ul class="sub-menu" aria-expanded="true">
						<li><a href="#" class="has-arrow">Data Pegawai</a>
							<ul class="sub-menu" aria-expanded="true">
								<li><a href="<?=base_url('datapegawai/jumpebes') ?>">JUMPEBES</a></li>
								<li><a href="<?= base_url('datapegawai/jumpbeje') ?>">JUMPBEJE</a></li>
								<li><a href="<?= base_url('datapegawai/jumnpbeje') ?>">JUMNPBEJE</a></li>
								<li><a href="<?= base_url('datapegawai/jumpdbeje') ?>">JUMPDBEJE</a></li>
								<li><a href="<?= base_url('datapegawai/jumnpdbeje') ?>">JUMNPDBEJE</a></li>
								<li><a href="<?= base_url('datapegawai/jumpbej') ?>">JUMPBEJ</a></li>
								<li><a href="<?= base_url('datapegawai/jumnpbej') ?>">JUMNPBEJ</a></li>
								<li><a href="<?= base_url('datapegawai/jumpbk') ?>">JUMPBK</a></li>
							</ul>
						</li>

						<li><a href="#" class="has-arrow">Data Jabatan</a>
							<ul class="sub-menu" aria-expanded="true">
								<li><a href="layouts-horizontal.html">Horizontal</a></li>
								<li><a href="layouts-hori-topbarlight.html">Topbar Light</a></li>
								<li><a href="layouts-hori-boxed.html">Boxed Layout</a></li>
								<li><a href="layouts-hori-preloader.html">Preloader</a></li>
							</ul>
						</li>
					</ul>

				</li>

				<li>
			</li>


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
