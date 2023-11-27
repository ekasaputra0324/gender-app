
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				
				<div class="title-description">
					
				<h4 class="card-title">Data Admin OPD ( Organisasi Perangkat Daerah )</h4>
				<p class="card-title-desc">Data Admin organisasi daerah.</p>
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
					<button class="btn btn-primary mb-3 add-adminodp" data-action="<?= base_url("adminopd/tambahAdminOPD") ?>"  data-bs-toggle="modal" data-bs-target="#myModal">Tambah Data</button>
				</div>
				<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title mt-0" id="myModalLabel">Tambah Admin OPD 
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								
								<form id="formopd" action="<?= base_url('adminopd/tambahAdminOPD') ?>" method="POST">
									<div class="mb-3">
										<label for="" class="form-label">Nama</label>
										<input type="text" name="name" id="name" class="form-control" placeholder="Masukan Nama..." required>
									</div>
									<div class="mb-3">
										<label for="" class="form-label">Username</label>
										<input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username..." required>
									</div>
									<div class="mb-3">
										<label for="" class="form-label">Email</label>
										<input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email..." required>
									</div>
									<div class="mb-3">
										<label for="" class="form-label">OPD</label>
										<select name="agency_id" id="opd_id" class="form-control">
											<?php foreach ($opd as $value) {?>
												<option value="<?= $value->id ?>"><?= $value->name ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="mb-3" id="password">
										<label for="" class="form-label">Password</label>
										<input type="password" name="password"  class="form-control" placeholder="Masukan Password..." required>
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
				<table id="datatable" class="table table-bordered dt-responsive nowrap  table-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Email</th>
							<th>OPD</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($datas as $value) { ?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $value->name ?></td>
								<td><?= $value->username ?></td>
								<td><?= $value->email ?></td>
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
								<td>
									<button type="button" class="btn btn-danger" data-url="<?= base_url("adminopd/deleteAdminOpd/$value->id") ?>"><i class="mdi mdi-trash-can-outline"></i></button>
									<button type="button" class="btn btn-secondary update-adminopd" data-action="<?= base_url("adminopd/updateAdminOpd/$value->id") ?>"  data-url="<?= base_url("adminopd/show/$value->id") ?>" data-bs-toggle="modal" data-bs-target="#myModal"><i class="mdi mdi-pencil-box-multiple-outline"></i></button>
								</td>
							</tr>
							<?php $no++?>
							<?php	} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- end col -->
</div>

