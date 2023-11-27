
<?php

?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				
				<div class="title-description">
					
				<h4 class="card-title">Verikasi Data</h4>
				<p class="card-title-desc">Verifikasi data dari organisasi daerah.</p>
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
			
				<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th>No</th>
							<th class="text-center">Tahun</th>
							<th class="text-center">OPD</th>
							<th class="text-center">Kategori</th>
							<th class="text-center">Status</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>

					<tbody>
						<?php  $no = 1; ?>
						<?php foreach ($datas as $value) { ?>
							<tr>
								<td><?= $no; ?></td>
								<td><?= $value->year ?></td>
								<td>
								<?php
									$ci =& get_instance(); 
									$query = $ci->db->query("SELECT * FROM agencies WHERE id = $value->agency_id"); 
									$result = $query->row(); 
									if ($result) {
										echo $result->name; 
									}
								?>
								</td>
								<td><?= str_replace("_", " ", $value->type) ?></td>
								<td  class="text-center <?= $value->is_acc == 0 ? 'text-danger' : 'text-success' ?>"><?= $value->is_acc == 0 ? 'Belum Terverifikasi' : 'Sudah Terverifikasi' ?></td>
								<td class="<?= $value->is_acc == 1 ? 'text-center' : '' ?>">
									<button  class="btn btn-warning <?= $value->is_acc == 1 ? 'd-none' : '' ?>" data-url="<?= site_url("logicverifikator/verif/$value->year/$value->agency_id/$value->type/$value->user_id/$folder") ?>"><i class="mdi mdi-check-bold"></i></button>
									<a href="<?= base_url("verifikator/show/$value->year/$value->agency_id/$value->user_id/$value->type/$folder") ?>" class="btn btn-secondary"><i class="mdi mdi-eye-circle-outline"></i></a>
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

