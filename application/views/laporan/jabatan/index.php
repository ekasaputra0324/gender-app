<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title text-capitalize">Laporan Data Jabatan</h4>
				<p class="card-title-desc text-capitalize">cetak laporan data Jabatan.</p>
				<form action="<?= site_url('laporan/cetakJabatan/') ?>" method="GET">


					<div class="row">
						<div class="col-6">
							<div class="mt-3">
								<div class="">
									<label for="example-text-input" class="col-md-2 col-form-label">Tahun</label>
									<input class="form-control" type="text" value="" name="year" id="example-text-input" required >
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="mt-3">
								<div class="">
									<label for="example-text-input" class="col-md-2 col-form-label">OPD</label>
									<select name="agency_id" id="" class="form-control">
										<?php foreach ($opd as  $value) { ?>
											<option value="<?= $value->id ?>"><?= $value->name ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
					</div>


	
					<div class="footer-form mt-3">
						<button type="submit" class="btn btn-primary ">Cetak</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end col -->
</div>
