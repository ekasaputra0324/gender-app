<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Pegawai</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Jumlah Pegawai Berdasarkan Status</h3>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Status</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>PNS</td>
                    <td><?= isset($status[0]->male) ? $status[0]->male : 0  ?></td>
                    <td><?= isset($status[0]->female) ? $status[0]->female : 0  ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Non PNS</td>
                    <td><?= isset($status[1]->male) ? $status[1]->male : 0 ?></td>
                    <td><?= isset($status[1]->female) ? $status[1]->female : 0  ?></td>
                </tr>
                <tr>
					<td>3</td>
                    <td>PNS Disabilitas</td>
					<td><?= isset($status[2]->male) ? $status[2]->male : 0  ?></td>
                    <td><?= isset($status[2]->female) ? $status[2]->female : 0  ?></td>
                </tr>
				<tr>
					<td>4</td>
					<td>Non PNS Disabilitas</td>
					<td><?= isset($status[3]->male) ? $status[3]->male : 0  ?></td>
                    <td><?= isset($status[3]->female) ? $status[3]->female : 0  ?></td>
                </tr>
            </tbody>
        </table>
		<h3 class="text-center">Jumlah PNS Berdasarkan Jenjang Pendidikan</h3>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
					<th>No</th>
                    <th>Jenjang Pendidikan</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
                <tr>
					<td>1</td>
                    <td>SD Sederajat</td>
                    <td><?= isset($pns_jenjang_pendidikan[0]->male) ? $pns_jenjang_pendidikan[0]->male : 0 ?></td>
                    <td><?= isset($pns_jenjang_pendidikan[0]->female) ? $pns_jenjang_pendidikan[0]->female : 0  ?></td>
                </tr>
				<tr>
					<td>2</td>
                    <td>SMP Sederajat</td>
                    <td><?= isset($pns_jenjang_pendidikan[1]->male) ? $pns_jenjang_pendidikan[1]->male : 0 ?></td>
                    <td><?= isset($pns_jenjang_pendidikan[1]->female) ? $pns_jenjang_pendidikan[1]->female : 0  ?></td>
                </tr>
                <tr>
					<td>3</td>
                    <td>SMA Sederajat</td>
                    <td><?= isset($pns_jenjang_pendidikan[2]->male) ? $pns_jenjang_pendidikan[2]->male : 0 ?></td>
                    <td><?= isset($pns_jenjang_pendidikan[2]->female) ? $pns_jenjang_pendidikan[2]->female : 0  ?></td>
                </tr>
                <tr>
					<td>4</td>
                    <td>Diploma Sederajat</td>
					<td><?= isset($pns_jenjang_pendidikan[3]->male) ? $pns_jenjang_pendidikan[3]->male : 0 ?></td>
                    <td><?= isset($pns_jenjang_pendidikan[3]->female) ? $pns_jenjang_pendidikan[3]->female : 0  ?></td>
                </tr>
				<tr>
					<td>5</td>
                    <td>S1 Sederajat</td>
                    <td><?= isset($pns_jenjang_pendidikan[4]->male) ? $pns_jenjang_pendidikan[4]->male : 0 ?></td>
                    <td><?= isset($pns_jenjang_pendidikan[4]->female) ? $pns_jenjang_pendidikan[4]->female : 0  ?></td>
                </tr>
				<tr>
					<td>6</td>
                    <td>S2/S3 Sederajat</td>
					<td><?= isset($pns_jenjang_pendidikan[5]->male) ? $pns_jenjang_pendidikan[5]->male : 0 ?></td>
                    <td><?= isset($pns_jenjang_pendidikan[5]->female) ? $pns_jenjang_pendidikan[5]->female : 0  ?></td>
                </tr>
				
            </tbody>
        </table>
		<h3 class="text-center">Jumlah No PNS Berdasarkan Jenjang Pendidikan</h3>
		<br>
        <table class="table table-bordered">
            <thead>
                <tr>
					<th>No</th>
                    <th>Jenjang Pendidikan</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
			<tr>
					<td>1</td>
                    <td>SD Sederajat</td>
                    <td><?= isset($non_pns_jenjang_pendidikan[0]->male) ? $non_pns_jenjang_pendidikan[0]->male : 0 ?></td>
                    <td><?= isset($non_pns_jenjang_pendidikan[0]->female) ? $non_pns_jenjang_pendidikan[0]->female : 0  ?></td>
                </tr>
				<tr>
					<td>2</td>
                    <td>SMP Sederajat</td>
                    <td><?= isset($non_pns_jenjang_pendidikan[1]->male) ? $non_pns_jenjang_pendidikan[1]->male : 0 ?></td>
                    <td><?= isset($non_pns_jenjang_pendidikan[1]->female) ? $non_pns_jenjang_pendidikan[1]->female : 0  ?></td>
                </tr>
                <tr>
				<td>3</td>

                    <td>SMA Sederajat</td>
                    <td><?= isset($non_pns_jenjang_pendidikan[2]->male) ? $non_pns_jenjang_pendidikan[2]->male : 0 ?></td>
                    <td><?= isset($non_pns_jenjang_pendidikan[2]->female) ? $non_pns_jenjang_pendidikan[2]->female : 0  ?></td>
                </tr>
                <tr>
				<td>4</td>

                    <td>Diploma Sederajat</td>
					<td><?= isset($non_pns_jenjang_pendidikan[3]->male) ? $non_pns_jenjang_pendidikan[3]->male : 0 ?></td>
                    <td><?= isset($non_pns_jenjang_pendidikan[3]->female) ? $non_pns_jenjang_pendidikan[3]->female : 0  ?></td>
                </tr>
				<tr>
				<td>5</td>

                    <td>S1 Sederajat</td>
                    <td><?= isset($non_pns_jenjang_pendidikan[4]->male) ? $non_pns_jenjang_pendidikan[4]->male : 0 ?></td>
                    <td><?= isset($non_pns_jenjang_pendidikan[4]->female) ? $non_pns_jenjang_pendidikan[4]->female : 0  ?></td>
                </tr>
				<tr>
				<td>6</td>

                    <td>S2/S3 Sederajat</td>
					<td><?= isset($non_pns_jenjang_pendidikan[5]->male) ? $non_pns_jenjang_pendidikan[5]->male : 0 ?></td>
                    <td><?= isset($non_pns_jenjang_pendidikan[5]->female) ? $non_pns_jenjang_pendidikan[5]->female : 0  ?></td>
                </tr>
				
            </tbody>
        </table>
		<br>
		<h3 class="text-center">Jumlah PNS Disabilitas Berdasarkan Jenjang Pendidikan</h3>
		<br>
        <table class="table table-bordered">
            <thead>
                <tr>
					<td>No</td>
                    <th>Jenjang Pendidikan</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
			<tr>
				<td>1</td>
                    <td>SD Sederajat</td>
                    <td><?= isset($pns_disabilitas_jenjang_pendidikan[0]->male) ? $pns_disabilitas_jenjang_pendidikan[0]->male : 0 ?></td>
                    <td><?= isset($pns_disabilitas_jenjang_pendidikan[0]->female) ? $pns_disabilitas_jenjang_pendidikan[0]->female : 0  ?></td>
                </tr>
				<tr>
					<td>2</td>
                    <td>SMP Sederajat</td>
                    <td><?= isset($pns_disabilitas_jenjang_pendidikan[1]->male) ? $pns_disabilitas_jenjang_pendidikan[1]->male : 0 ?></td>
                    <td><?= isset($pns_disabilitas_jenjang_pendidikan[1]->female) ? $pns_disabilitas_jenjang_pendidikan[1]->female : 0  ?></td>
                </tr>
                <tr>
					<td>3</td>
                    <td>SMA Sederajat</td>
                    <td><?= isset($pns_disabilitas_jenjang_pendidikan[2]->male) ? $pns_disabilitas_jenjang_pendidikan[2]->male : 0 ?></td>
                    <td><?= isset($pns_disabilitas_jenjang_pendidikan[2]->female) ? $pns_disabilitas_jenjang_pendidikan[2]->female : 0  ?></td>
                </tr>
                <tr>
					<td>4</td>
                    <td>Diploma Sederajat</td>
					<td><?= isset($pns_disabilitas_jenjang_pendidikan[3]->male) ? $pns_disabilitas_jenjang_pendidikan[3]->male : 0 ?></td>
                    <td><?= isset($pns_disabilitas_jenjang_pendidikan[3]->female) ? $pns_disabilitas_jenjang_pendidikan[3]->female : 0  ?></td>
                </tr>
				<tr>
					<td>5</td>
                    <td>S1 Sederajat</td>
                    <td><?= isset($pns_disabilitas_jenjang_pendidikan[4]->male) ? $pns_disabilitas_jenjang_pendidikan[4]->male : 0 ?></td>
                    <td><?= isset($pns_disabilitas_jenjang_pendidikan[4]->female) ? $pns_disabilitas_jenjang_pendidikan[4]->female : 0  ?></td>
                </tr>
				<tr>
					<td>6</td>
                    <td>S2/S3 Sederajat</td>
					<td><?= isset($pns_disabilitas_jenjang_pendidikan[5]->male) ? $pns_disabilitas_jenjang_pendidikan[5]->male : 0 ?></td>
                    <td><?= isset($pns_disabilitas_jenjang_pendidikan[5]->female) ? $pns_disabilitas_jenjang_pendidikan[5]->female : 0  ?></td>
                </tr>
				
            </tbody>
        </table>
		<h3 class="text-center">Jumlah Non PNS Disabilitas Berdasarkan Jenjang Pendidikan</h3>
		<br>
        <table class="table table-bordered">
            <thead>
                <tr>
					<th>No</th>
                    <th>Jenjang Pendidikan</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
			<tr>
				<td>1</td>
                    <td>SD Sederajat</td>
                    <td><?= isset($non_pns_disabilitas_jenjang_pendidikan[0]->male) ? $non_pns_disabilitas_jenjang_pendidikan[0]->male : 0 ?></td>
                    <td><?= isset($non_pns_disabilitas_jenjang_pendidikan[0]->female) ? $non_pns_disabilitas_jenjang_pendidikan[0]->female : 0  ?></td>
                </tr>
				<tr>
					<td>2</td>
                    <td>SMP Sederajat</td>
                    <td><?= isset($non_pns_disabilitas_jenjang_pendidikan[1]->male) ? $non_pns_disabilitas_jenjang_pendidikan[1]->male : 0 ?></td>
                    <td><?= isset($non_pns_disabilitas_jenjang_pendidikan[1]->female) ? $non_pns_disabilitas_jenjang_pendidikan[1]->female : 0  ?></td>
                </tr>
                <tr>
					<td>3</td>
                    <td>SMA Sederajat</td>
                    <td><?= isset($non_pns_disabilitas_jenjang_pendidikan[2]->male) ? $non_pns_disabilitas_jenjang_pendidikan[2]->male : 0 ?></td>
                    <td><?= isset($non_pns_disabilitas_jenjang_pendidikan[2]->female) ? $non_pns_disabilitas_jenjang_pendidikan[2]->female : 0  ?></td>
                </tr>
                <tr>
					<td>4</td>
                    <td>Diploma Sederajat</td>
					<td><?= isset($non_pns_disabilitas_jenjang_pendidikan[3]->male) ? $non_pns_disabilitas_jenjang_pendidikan[3]->male : 0 ?></td>
                    <td><?= isset($non_pns_disabilitas_jenjang_pendidikan[3]->female) ? $non_pns_disabilitas_jenjang_pendidikan[3]->female : 0  ?></td>
                </tr>
				<tr>
					<td>5</td>
                    <td>S1 Sederajat</td>
                    <td><?= isset($non_pns_disabilitas_jenjang_pendidikan[4]->male) ? $non_pns_disabilitas_jenjang_pendidikan[4]->male : 0 ?></td>
                    <td><?= isset($non_pns_disabilitas_jenjang_pendidikan[4]->female) ? $non_pns_disabilitas_jenjang_pendidikan[4]->female : 0  ?></td>
                </tr>
				<tr>
					<td>6</td>
                    <td>S2/S3 Sederajat</td>
					<td><?= isset($non_pns_disabilitas_jenjang_pendidikan[5]->male) ? $non_pns_disabilitas_jenjang_pendidikan[5]->male : 0 ?></td>
                    <td><?= isset($non_pns_disabilitas_jenjang_pendidikan[5]->female) ? $non_pns_disabilitas_jenjang_pendidikan[5]->female : 0  ?></td>
                </tr>
				
            </tbody>
        </table>
		<h3 class="text-center"> Jumlah PNS berdasarkan Jabatan</h3>
		<br>
        <table class="table table-bordered">
            <thead>
                <tr>
					<th>No</th>
                    <th>Jabatan</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
                <tr>
					<td>1</td>
                    <td>Eselon II</td>
                   <td><?= isset($pns_jabatan[0]->male) ? $pns_jabatan[0]->male : 0 ?></td>
                    <td><?= isset($pns_jabatan[0]->female) ? $pns_jabatan[0]->female : 0  ?></td>
                </tr>
				<tr>
					<td>2</td>
                    <td>Eselon III</td>
                    <td><?= isset($pns_jabatan[1]->male) ? $pns_jabatan[1]->male : 0 ?></td>
                    <td><?= isset($pns_jabatan[1]->female) ? $pns_jabatan[1]->female : 0  ?></td>
                </tr>
                <tr>
					<td>3</td>
                    <td>Eselon IV</td>
					<td><?= isset($pns_jabatan[2]->male) ? $pns_jabatan[2]->male : 0 ?></td>
                    <td><?= isset($pns_jabatan[2]->female) ? $pns_jabatan[2]->female : 0  ?></td>
                </tr>
                <tr>
				<td>4</td>
                    <td>Fungsional Umum</td>
                    <td><?= isset($pns_jabatan[3]->male) ? $pns_jabatan[3]->male : 0 ?></td>
                    <td><?= isset($pns_jabatan[3]->female) ? $pns_jabatan[3]->female : 0  ?></td>
                </tr>
				<tr>
					<td>5</td>
                    <td>Fungsional Tertentu</td>
					<td><?= isset($pns_jabatan[4]->male) ? $pns_jabatan[4]->male : 0 ?></td>
                    <td><?= isset($pns_jabatan[4]->female) ? $pns_jabatan[4]->female : 0  ?></td>
                </tr>
            </tbody>
        </table>
		<h3 class="text-center">Jumlah Non PNS berdasarkan Jabatan</h3>
		<br>
        <table class="table table-bordered">
            <thead>
                <tr>
					<th>No</th>
                    <th>Jabatan</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
			<tr>
				<td>1</td>
                <td>Eselon II</td>
                   <td><?= isset($non_pns_jabatan[0]->male) ? $non_pns_jabatan[0]->male : 0 ?></td>
                    <td><?= isset($non_pns_jabatan[0]->female) ? $non_pns_jabatan[0]->female : 0  ?></td>
                </tr>
				<tr>
					<td>2</td>
                    <td>Eselon III</td>
                    <td><?= isset($non_pns_jabatan[1]->male) ? $non_pns_jabatan[1]->male : 0 ?></td>
                    <td><?= isset($non_pns_jabatan[1]->female) ? $non_pns_jabatan[1]->female : 0  ?></td>
                </tr>
                <tr>
					<td>3</td>
                    <td>Eselon IV</td>
					<td><?= isset($non_pns_jabatan[2]->male) ? $non_pns_jabatan[2]->male : 0 ?></td>
                    <td><?= isset($non_pns_jabatan[2]->female) ? $non_pns_jabatan[2]->female : 0  ?></td>
                </tr>
                <tr>
					<td>4</td>
                    <td>Fungsional Umum</td>
                    <td><?= isset($non_pns_jabatan[3]->male) ? $non_pns_jabatan[3]->male : 0 ?></td>
                    <td><?= isset($non_pns_jabatan[3]->female) ? $non_pns_jabatan[3]->female : 0  ?></td>
                </tr>
				<tr>
					<td>5</td>
                    <td>Fungsional Tertentu</td>
					<td><?= isset($non_pns_jabatan[4]->male) ? $non_pns_jabatan[4]->male : 0 ?></td>
                    <td><?= isset($non_pns_jabatan[4]->female) ? $non_pns_jabatan[4]->female : 0  ?></td>
                </tr>
            </tbody>
        </table>
		<h3 class="text-center">Jumlah PNS berdasarkan Pangkat</h3>
		<br>
        <table class="table table-bordered">
            <thead>
                <tr>
					<th>No</th>
                    <th>Jabatan</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
			<tr>
				<td>1</td>
                <td>Golongan I</td>
                   <td><?= isset($pns_kepangkatan[0]->male) ? $pns_kepangkatan[0]->male : 0 ?></td>
                    <td><?= isset($pns_kepangkatan[0]->female) ? $pns_kepangkatan[0]->female : 0  ?></td>
                </tr>
				<tr>
					<td>2</td>
                    <td>Golongan II</td>
                    <td><?= isset($pns_kepangkatan[1]->male) ? $pns_kepangkatan[1]->male : 0 ?></td>
                    <td><?= isset($pns_kepangkatan[1]->female) ? $pns_kepangkatan[1]->female : 0  ?></td>
                </tr>
                <tr>
					<td>3</td>
                    <td>Golongan III</td>
					<td><?= isset($pns_kepangkatan[2]->male) ? $pns_kepangkatan[2]->male : 0 ?></td>
                    <td><?= isset($pns_kepangkatan[2]->female) ? $pns_kepangkatan[2]->female : 0  ?></td>
                </tr>
                <tr>
					<td>4</td>
                    <td>Golongan IV</td>
                    <td><?= isset($pns_kepangkatan[3]->male) ? $pns_kepangkatan[3]->male : 0 ?></td>
                    <td><?= isset($pns_kepangkatan[3]->female) ? $pns_kepangkatan[3]->female : 0  ?></td>
                </tr>
            </tbody>
        </table>
    </div>
	
</body>
</html>
