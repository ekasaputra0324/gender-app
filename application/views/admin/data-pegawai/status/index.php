
<?php

?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				
				<div class="title-description">
					
				<h4 class="card-title"> Data Status</h4>
				<p class="card-title-desc">Jumlah Pegawai Berdasarkan Status.</p>
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
				<div class="d-flex ">
					<a href="<?= base_url("datapegawai/form/$type") ?>" class="btn btn-primary mb-3">Tambah Data</a>
				</div>
				<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th>No</th>
							<th  class="text-center">Tahun</th>
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
								
								<td  class="text-center <?= $data->is_acc == 0 ? 'text-danger' : 'text-success' ?>"><?= $data->is_acc == 0 ? 'Belum Terverifikasi' : 'Sudah Terverifikasi' ?></td>
								<td  class="text-center">
									<a class="btn btn-secondary " href="<?= base_url("datapegawai/formEdit/$type/$data->year") ?>" ><i class="<?= $data->is_acc == 1 ? 'mdi mdi-eye-circle-outline' : 'mdi mdi-pencil-box-multiple-outline' ?>"></i></a>
									<button class="btn btn-danger" data-url="<?= site_url("logicemployee/deletePegawai/$type/$data->year") ?>" type="button"  ><i class="mdi mdi-trash-can-outline "></i></button>
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

