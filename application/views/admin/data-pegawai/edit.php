<?php 
$card_title = '';
$readOnly = 'readonly';
$button_save = 'd-none';
if ($role == 'ADMIN_OPD') { 				
	$card_title = 'Edit';
	$readOnly = '';
	$button_save = '';
	} 
?>
<div class="row">

	<div class="col-12">
		<div class="card">
			<div class="card-body">

			  <?php if ($role != 'VERIFIKATOR' && $role !=  'SUPER_ADMIN') { ?>
					<h4 class="card-title text-capitalize"><?= $title_table ?></h4>
					<p class="card-title-desc text-capitalize"><?= $desc ?>.</p>
				<?php } ?>
				<form action="<?= site_url('logicemployee/editPegawai/'.$type.'/'.$year) ?>" method="POST">
				<?php foreach ($datas as  $value) { ?>
					
					<div class="row">
						<div class="col-6">
							<div class="mt-3">
								<label for="example-text-input" class="col-md-2 col-form-label"></label>
								<div class="">
									<input class="form-control" type="text" value="<?= $value->name ?>" name="name[]" id="example-text-input" required readonly>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="mb-3">
								<label for="example-search-input" class="col-md-2 col-form-label">L</label>
								<div class="">
									<input class="form-control" type="number" value="<?= $value->male ?>" name="L[]" id="example-text-input"required <?= $readOnly ?> <?= $value->is_acc == 1 ?'readonly' : ''?>>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="mb-3">
								<label for="example-text-input" class="col-md-2 col-form-label">P</label>
								<div class="">
									<input class="form-control" type="number" value="<?= $value->female ?>" name="P[]" id="example-text-input"required <?= $readOnly ?> <?= $value->is_acc == 1 ?'readonly' : ''?>>
								</div>
							</div>
						</div>
					</div>
					<?php }?>
				
					<div class="mb-3">
						<label for="example-text-input" class="col-md-2 col-form-label">Tahun</label>
						<div class="">
							<input class="form-control" type="text" value="<?=  $year ?>" name="year" id="example-search-input" placeholder="Masukan Tahun.."required readonly>
						</div>
					</div>
					<?php  if ($datas[0]->is_acc == 0) {?>
						<div class="footer-form bg-red">
							<button type="submit" class="btn btn-primary <?= $button_save ?> ">Save</button>
						</div>
					<?php }?>
				</form>
			</div>
		</div>
	</div>
	<!-- end col -->
</div>
