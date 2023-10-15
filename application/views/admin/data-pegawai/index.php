<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
								<div class="title-description mt-3">
									<h4 class="card-title"><?= $title_table ?></h4>
									<p class="card-title-desc">
										<?= $description ?>
									</p>
								</div>
								<div class="d-flex ">
								    <a href="<?= base_url("datapegawai/form/$type") ?>" class="btn btn-primary mb-3">Tambah Data</a>
								</div>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Tahun</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
											<tr>
												<td></td>
												<td></td>
											</tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
