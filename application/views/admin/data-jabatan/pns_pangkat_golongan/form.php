<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">

				<h4 class="card-title">Tambah Data PNS menurut Pangkat dan Golongan</h4>
				<p class="card-title-desc">Jumlah PNS menurut Pangkat dan Golongan.</p>
				<form action="<?= site_url('logicposition/saveJabatan/'.$type) ?>" method="POST">
					<div class="row">
						<div class="col-6">
							<div class="mt-3">
								<label for="example-text-input" class="col-md-2 col-form-label"></label>
								<div class="">
									<input class="form-control" type="text" value="Gol. I" name="name[]" id="example-text-input" required readonly>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="mb-3">
								<label for="example-search-input" class="col-md-2 col-form-label">L</label>
								<div class="">
									<input class="form-control" type="number" value="" name="L[]" id="example-text-input"required >
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="mb-3">
								<label for="example-text-input" class="col-md-2 col-form-label">P</label>
								<div class="">
									<input class="form-control" type="number" value="" name="P[]" id="example-text-input"required>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="mt-3">
								<label for="example-text-input" class="col-md-2 col-form-label"></label>
								<div class="">
									<input class="form-control" type="text" value="Gol. II" name="name[]" id="example-text-input"required readonly>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="mb-3">
								<label for="example-text-input" class="col-md-2 col-form-label">L</label>
								<div class="">
									<input class="form-control" type="number" value="" name="L[]" id="example-text-input"required >
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="mb-3">
								<label for="example-text-input" class="col-md-2 col-form-label">P</label>
								<div class="">
									<input class="form-control" type="number" value="" name="P[]" id="example-text-input"required >
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="mt-3">
								<label for="example-text-input" class="col-md-2 col-form-label"></label>
								<div class="">
									<input class="form-control" type="text" value="Gol. III" name="name[]" id="example-text-input"required readonly>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="mb-3">
								<label for="example-text-input" class="col-md-2 col-form-label">L</label>
								<div class="">
									<input class="form-control" type="number" value="" name="L[]" id="example-text-input"required >
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="mb-3">
								<label for="example-text-input" class="col-md-2 col-form-label">P</label>
								<div class="">
									<input class="form-control" type="number" value="" name="P[]" id="example-text-input"required >
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="mt-3">
								<label for="example-text-input" class="col-md-2 col-form-label"></label>
								<div class="">
									<input class="form-control" type="text" value="Gol. IV" name="name[]" id="example-text-input"required readonly>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="mb-3">
								<label for="example-text-input" class="col-md-2 col-form-label">L</label>
								<div class="">
									<input class="form-control" type="number" value="" name="L[]" id="example-text-input"required >
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="mb-3">
								<label for="example-text-input" class="col-md-2 col-form-label">P</label>
								<div class="">
									<input class="form-control" type="number" value="" name="P[]" id="example-text-input"required >
								</div>
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="example-text-input" class="col-md-2 col-form-label">Tahun</label>
						<div class="">
							<input class="form-control" type="text" value="" name="year" id="example-search-input" placeholder="Masukan Tahun.."required >
						</div>
					</div>
					<div class="footer-form bg-red">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end col -->
</div>
