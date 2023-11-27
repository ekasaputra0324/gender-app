<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Urusan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container  table-responsive">
        <h3 class="text-center"><?= $title ?></h3>
        <br>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Urusan</th>
                    <th>Status</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
				<?php foreach ($datas as $key => $value) { ?>
					<tr>
						<td><?= $key += 1 ?></td>
						<td><?= $value->indikator ?></td>
						<td><?= $value->is_acc == 1 ? 'Sudah Terverifikasi' : 'Belum Terverifikasi' ?></td>
						<td><?= $value->L  ?></td>
						<td><?= $value->P  ?></td>
					</tr>
				<?php } ?>
            </tbody>
        </table>
		<p id="url" style="text-align: center;"><?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?></p>
    </div>
	
</body>
</html>
