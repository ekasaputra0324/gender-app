
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
					<form action="">
						<div class="row">
							<div class="col-4">
								<div class="mb-3">
									<label for="" class="form-label">OPD</label>
									<select name="opd" id="opd" class="form-control get-bidang">
										<option selected>-- Pilih OPD --</option>
										<?php foreach ($opd as $value) {?>
											<option value="<?= $value->kode ?>"><?= $value->name ?></option>
										<?php } ?>	
									</select>
								</div>
							</div>
							<div class="col-4">
								<div class="mb-3">
									<label for="" class="form-label">Bidang</label>
									<select name="bidang" id="bidang" class="form-control get-year-veri" >
										<option selected>-- Pilih Bidang --</option>
									</select>
								</div>
							</div>
							<div class="col-4">
								<div class="mb-3">
									<label for="" class="form-label">Tahun</label>
									<select name="tahun" id="tahun" class="form-control" >
										<option selected>-- Pilih Tahun --</option>	
									</select>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-center">
							<div class="mt-4">
								<button  class="btn btn-primary get-data-superadmin">Tampilkan Data</button>
								<button   class="btn btn-secondary cetak-urusan">Cetak</button>
							</div>
						</div>
					</form>
					<br>
				<table id="datatable" class="table table-bordered dt-responsive nowrap table-urusan  table-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th>No</th>
							<th class="text-center">Indikator</th>
							<th  class="text-center">Bidang</th>
							<th class="text-center">Status</th>
							<th class="text-center">L</th>
							<th class="text-center">P</th>
						</tr>
					</thead>

					<tbody id="urusan-tbody" >
							
					</tbody>
				</table>

			</div>
		</div>
	</div>
	<!-- end col -->
</div>

