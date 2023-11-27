
<?php
function gender_count($type,$data)
{
	$total = 0;
	if ($data) {
		foreach ($data as $value) {
			 // Ini bisa digunakan untuk debugging
			$total += $value->{$type};
		}
	}
	return $total;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Jabatan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Tabel 1.PNS Menurut Jabatan Struktural</h3>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jabatan Struktural</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Eselon II</td>
					<td><?= isset($pns_jabatan_struktural[0]->male) ? $pns_jabatan_struktural[0]->male : 0 ?></td>
                    <td><?= isset($pns_jabatan_struktural[0]->female) ? $pns_jabatan_struktural[0]->female : 0  ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Eselon III</td>
                    <td><?= isset($pns_jabatan_struktural[1]->male) ? $pns_jabatan_struktural[1]->male : 0 ?></td>
                    <td><?= isset($pns_jabatan_struktural[1]->female) ? $pns_jabatan_struktural[1]->female : 0  ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Eselon IV</td>
                    <td><?= isset($pns_jabatan_struktural[2]->male) ? $pns_jabatan_struktural[2]->male : 0 ?></td>
                    <td><?= isset($pns_jabatan_struktural[2]->female) ? $pns_jabatan_struktural[2]->female : 0  ?></td>
                </tr>
				<tr>
					<td colspan="2" style="text-align:center">Total:</td>
					<td><?=  gender_count('male',$pns_jabatan_struktural) ?></td>
					<td><?=  gender_count('female',$pns_jabatan_struktural) ?></td>
				</tr>
            </tbody>
        </table>
		<h3 class="text-center">Tabel 2.PNS Menurut Jabatan Fungsional</h3>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jabatan Fungsional</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Fungsional Umum</td>
					<td><?= isset($pns_jabatan_fungsional[0]->male) ? $pns_jabatan_fungsional[0]->male : 0 ?></td>
                    <td><?= isset($pns_jabatan_fungsional[0]->female) ? $pns_jabatan_fungsional[0]->female : 0  ?></td>
                </tr>
				<tr>
                    <td>2</td>
                    <td>Fungsional Tertentu</td>
					<td><?= isset($pns_jabatan_fungsional[1]->male) ? $pns_jabatan_fungsional[1]->male : 0 ?></td>
                    <td><?= isset($pns_jabatan_fungsional[1]->female) ? $pns_jabatan_fungsional[1]->female : 0  ?></td>
                </tr>
				<tr>
					<td colspan="2" style="text-align:center">Total:</td>
					<td><?=  gender_count('male',$pns_jabatan_fungsional) ?></td>
					<td><?=  gender_count('female',$pns_jabatan_fungsional) ?></td>
				</tr>
            </tbody>
        </table>
		<h3 class="text-center">Tabel 3.PNS Menurut Pangkat dan Golongan</h3>
		<br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pangkat Golongan</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Gol. I</td>
                    <td><?= isset($pns_pangkat_golongan[0]->male) ? $pns_pangkat_golongan[0]->male : 0 ?></td>
                    <td><?= isset($pns_pangkat_golongan[0]->female) ? $pns_pangkat_golongan[0]->female : 0  ?></td>
                </tr>
				<tr>
                    <td>2</td>
                    <td>Gol. II</td>
                    <td><?= isset($pns_pangkat_golongan[1]->male) ? $pns_pangkat_golongan[1]->male : 0 ?></td>
                    <td><?= isset($pns_pangkat_golongan[1]->female) ? $pns_pangkat_golongan[1]->female : 0  ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Gol. III</td>
                    <td><?= isset($pns_pangkat_golongan[2]->male) ? $pns_pangkat_golongan[2]->male : 0 ?></td>
                    <td><?= isset($pns_pangkat_golongan[2]->female) ? $pns_pangkat_golongan[2]->female : 0  ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Gol. IV</td>
                    <td><?= isset($pns_pangkat_golongan[3]->male) ? $pns_pangkat_golongan[3]->male : 0 ?></td>
                    <td><?= isset($pns_pangkat_golongan[3]->female) ? $pns_pangkat_golongan[3]->female : 0  ?></td>
                </tr>
				<tr>
					<td colspan="2" style="text-align:center">Total:</td>
					<td><?=  gender_count('male',$pns_pangkat_golongan) ?></td>
					<td><?=  gender_count('female',$pns_pangkat_golongan) ?></td>
				</tr>
            </tbody>
        </table>
		<br>
		<h3 class="text-center">Tabel 4.PNS Menurut Jabatan Lainya</h3>
		<br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Camat</td>
					<td><?= isset($pns_jabatan_lainnya[0]->male) ? $pns_jabatan_lainnya[0]->male : 0 ?></td>
                    <td><?= isset($pns_jabatan_lainnya[0]->female) ? $pns_jabatan_lainnya[0]->female : 0  ?></td>
                </tr>
				<tr>
                    <td>2</td>
                    <td>Lurah</td>
					<td><?= isset($pns_jabatan_lainnya[1]->male) ? $pns_jabatan_lainnya[1]->male : 0 ?></td>
                    <td><?= isset($pns_jabatan_lainnya[1]->female) ? $pns_jabatan_lainnya[1]->female : 0  ?></td>
                </tr>
				<tr>
					<td colspan="2" style="text-align:center">Total:</td>
					<td><?=  gender_count('male',$pns_jabatan_lainnya) ?></td>
					<td><?=  gender_count('female',$pns_jabatan_lainnya) ?></td>
				</tr>
            </tbody>
        </table>
		<br>
		<br>
		<h3 class="text-center">Tabel 5.Tim Badan Pertimbangan Jabatan dan Kepangkatan</h3>
		<br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tim Badan Pertimbangan Jabatan dan Kepangkatan</td>
					<td><?= isset($pertimbangan_jabatan_dan_kepangkatan[0]->male) ? $pertimbangan_jabatan_dan_kepangkatan[0]->male : 0 ?></td>
                    <td><?= isset($pertimbangan_jabatan_dan_kepangkatan[0]->female) ? $pertimbangan_jabatan_dan_kepangkatan[0]->female : 0  ?></td>
                </tr>
				<tr>
					<td colspan="2" style="text-align:center">Total:</td>
					<td><?=  gender_count('male',$pertimbangan_jabatan_dan_kepangkatan) ?></td>
					<td><?=  gender_count('female',$pertimbangan_jabatan_dan_kepangkatan) ?></td>
				</tr>
            </tbody>
        </table>
		
		<p id="url" style="text-align: center;"><?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?></p>
    </div>
</body>
</html>
