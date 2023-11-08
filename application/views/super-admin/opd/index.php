<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">

				<div class="title-description">

					<h4 class="card-title">Data OPD ( Organisasi Perangkat Daerah )</h4>
					<p class="card-title-desc">Data organisasi daerah.</p>
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
					<button class="btn btn-primary mb-3 add-odp" data-action="<?= base_url("opd/tambahOPD") ?>"  data-bs-toggle="modal" data-bs-target="#myModal">Tambah Data</button>
				</div>
				<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title mt-0" id="myModalLabel">Tambah OPD 
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								
								<form id="formopd" action="<?= base_url('opd/tambahOPD') ?>" method="POST">
									<div class="mb-3">
										<label for="" class="form-label">Nama OPD</label>
										<input type="text" name="name" id="name" class="form-control" placeholder="Masukan Nama OPD...">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
									</div>
								</form>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th>No</th>
							<td>Name</td>
							<td>Action</td>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($datas as $value) { ?>
							<tr>
								<td><?= $no; ?></td>
								<td><?= $value->name ?></td>
								<td>
									<button type="button" class="btn btn-danger" data-url="<?= base_url("opd/deleteOpd/$value->id") ?>"><i class="mdi mdi-trash-can-outline"></i></button>
									<button type="button" class="btn btn-secondary update-opd" data-action="<?= base_url("opd/update/$value->id") ?>"  data-url="<?= base_url("opd/show/$value->id") ?>" data-bs-toggle="modal" data-bs-target="#myModal"><i class="mdi mdi-pencil-box-multiple-outline"></i></button>
								</td>
							</tr>
							<?php $no++; ?>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- end col -->
</div>
