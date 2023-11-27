
<?php

?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				
				<div class="title-description">
					
				<h4 class="card-title"><?= $title_table ?></h4>
				<p class="card-title-desc"><?= $desc ?>.</p>
				</div>
				<?php if (!empty($this->session->flashdata('failed'))) { ?>
					<div class="alert alert-danger col-3" role="alert">
						<?= $this->session->flashdata('failed') ?>
					</div>
				<?php } ?>
				<?php if (!empty($this->session->flashdata('success'))) { ?>
					<div class="alert alert-success col-3" role="alert">
						<?= $this->session->flashdata('success') ?>
					</div>
				<?php } ?>
				<?php if ($role != 'SUPER_ADMIN') {?>
					<div class="d-flex gap-2">
						<button  data-url="<?= base_url("logicemployee/getChart/$type/$user->agency_id") ?>" class="btn btn-secondary grafik-button mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Grafik</button>
						<a href="<?= base_url("datapegawai/form/$type") ?>" class="btn btn-primary mb-3 ">Tambah Data</a>
					</div>
				<?php } ?>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Grafik Data</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					    <div class="" id="data-chart"></div>
					</div>
					
					</div>
				</div>
				</div>

				<table id="datatable" class="table table-bordered dt-responsive nowrap table-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th>No</th>
							<th  class="text-center">Tahun</th>
							<?php if ($role == 'SUPER_ADMIN') {?>
								<th  class="text-center">OPD</th>
							<?php } ?>
							<th  class="text-center">Status</th>
							<th  class="text-center">Action</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1;?>
						<?php foreach($datas as $data){  ?>
							<tr>
								<td><?= $no ?></td>
								<td  class="text-center"><?= $data->year ?></td>
								<?php if ($role == 'SUPER_ADMIN') {?>
								<td  class="text-center">
								<?php
									$ci =& get_instance(); 
									$query = $ci->db->query("SELECT * FROM agencies WHERE id = $data->agency_id"); 
									$result = $query->row(); 
									if ($result) {
										echo $result->name; 
									}
								?>
								</td>
								<?php } ?>
								<td  class="text-center <?= $data->is_acc == 0 ? 'text-danger' : 'text-success' ?>"><?= $data->is_acc == 0 ? 'Belum Terverifikasi' : 'Sudah Terverifikasi' ?></td>
								<td  class="text-center">
									<?php if ($role == 'ADMIN_OPD') {?>
										<a class="btn btn-secondary " href="<?= base_url("datapegawai/formEdit/$type/$data->year") ?>" ><i class=" <?= $data->is_acc == 1 ? 'mdi mdi-eye-circle-outline' : 'mdi mdi-pencil-box-multiple-outline' ?>"></i></a>
										<button class="btn btn-danger" data-url="<?= site_url("logicemployee/deletePegawai/$type/$data->year") ?>" type="button"  ><i class="mdi mdi-trash-can-outline "></i></button>
										<?php }elseif($role == 'SUPER_ADMIN') {?>
											<a href="<?= base_url("superadmin/show/$data->year/$data->agency_id/$data->user_id/$data->type/pegawai") ?>" class="btn btn-secondary"><i class="mdi mdi-eye-circle-outline"></i></a>
									<?php } ?>
								</td>
							</tr>
							
						<?php $no++;?>
					    <?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
	<!-- end col -->
</div>

