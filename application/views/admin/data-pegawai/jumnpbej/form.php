<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">

				<h4 class="card-title"><?= $title_table ?></h4>
				<p class="card-title-desc">
					<?= $description ?>
				</p>

				<div class="table-responsive">
					<table class="table table-editable table-nowrap align-middle table-edits">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>L</th>
								<th>P</th>
								<th>Edit</th>
							</tr>
						</thead>
						<tbody>
							<tr data-id="1">
								<td style="width: 80px">1</td>
								<td>Korlap</td>
								<td data-field="L">
									<input type="text" value="0">
								</td>
								<td data-field="P">
								<input type="text" value="0">
								</td>
								<td style="width: 100px">
									<a class="btn btn-outline-secondary btn-sm edit" title="Edit">
										<i class="fas fa-pencil-alt"></i>
									</a>
								</td>
							</tr>
							<tr data-id="2">
								<td >2</td>
								<td>Pengawas</td>
								
								<td data-field="L">
									<input type="text" value="0">
								</td>
								<td data-field="P">
								<input type="text" value="0">
								</td>
								<td>
									<a class="btn btn-outline-secondary btn-sm edit" title="Edit">
										<i class="fas fa-pencil-alt"></i>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div> <!-- end col -->
</div> <!-- end row -->
