$(document).ready(function() {
	const base_url = window.location.href;

	function deleted(){
	let	url = $(this).attr('data-url');
	console.log(url);
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "data akan di hapus secara permanent!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus!'
	  }).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				type: "GET",
				url: url,
				dataType: "JSON",
				success: function (response) {
					if (response > 0) {
						window.location.reload();
					}	
				}
			});
		}
	  })
}
function acc(){
	let	url = $(this).attr('data-url');
	console.log(url);
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Pastikan data sudah sesuai!",
		icon: 'info',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Verified!'
	  }).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				type: "GET",
				url: url,
				dataType: "JSON",
				success: function (response) {
					if (response > 0) {
						window.location.reload();
					}	
				}
			});
		}
	  })
}
function update(){
	$('.modal-title').text('Edit OPD');
	let	url = $(this).attr('data-url');
	let	action = $(this).attr('data-action');
	
	$.ajax({
		type: "GET",
		url: url,
		dataType: "JSON",
		success: function (response) {
			$('#name').val(response[0].name) 
			console.log(action);
			$('#formopd').attr('action', action); 
		}
	});
}
function add(){
	$('.modal-title').text('Tambah OPD');
	let	action = $(this).attr('data-action');
	$('#name').val(null) 
	$('#formopd').attr('action', action); 
}
function updateadminopd(){
	$('.modal-title').text('Edit Admin OPD');
	let	url = $(this).attr('data-url');
	let	action = $(this).attr('data-action');
	
	$.ajax({
		type: "GET",
		url: url,
		dataType: "JSON",
		success: function (response) {
			$('#name').val(response[0].name) 
			$('#email').val(response[0].email) 
			$('#username').val(response[0].username) 
			$('#opd_id').val(response[0].agency_id)
			$('#password').addClass('d-none'); 
			$('#opd_id option[value="' + response[0].agency_id + '"]').prop('selected', true);
			$('#formopd').attr('action', action); 
		}
	});
}
function addadminopd(){
	$('.modal-title').text('Tambah Admin OPD');
	let	action = $(this).attr('data-action');

	$('#name').val(null) 
	$('#email').val(null) 
	$('#username').val(null) 
	$('#opd_id').val(null)
	$('#password').addClass(''); 
	$('#formopd').attr('action', action); 

}

function renderChart(){
	let	url = $(this).attr('data-url');
	console.log(url);
	$.ajax({
		type: "GET",
		url: url,
		dataType: "JSON",
		success: function (response) {
			console.log(response);
			options = {
				chart: { height: 350, type: "bar", toolbar: { show: 1 } },
				plotOptions: {
					bar: { horizontal: !1, columnWidth: "45%", endingShape: "rounded" },
				},
				
				 
				dataLabels: { enabled: !1 },
				stroke: { show: !0, width: 2, colors: ["transparent"] },
				series: [
					{ name: "Female", data: [response[0].female, response[1].female, response[2].female, response[3].female, response[4].female, response[5].female] },
					{ name: "Male", data: [response[0].male, response[1].male, response[2].male,  response[3].male,  response[4].male ,  response[5].male] },
				],
				colors: ["#45cb85", "#3b5de7", "#eeb902"],
				xaxis: {
					categories: [response[0].tahun, response[1].tahun, response[2].tahun, response[3].tahun, response[4].tahun,  response[5].tahun],
				},
				yaxis: { title: { text: "(Statistic Gender)" } },
				grid: { borderColor: "#f1f1f1" },
				fill: { opacity: 1 },
				tooltip: {
					y: {
						formatter: function (e) {
							return "" + e + "";
						},
					},
				},
			};
			(chart = new ApexCharts(
				document.querySelector("#data-chart"),
				options
			)).render();
		}
	});

}
$('.add-odp').on('click', add);
$('.grafik-button').on('click', renderChart);
$('.add-adminodp').on('click', addadminopd);
$('.update-adminopd').on('click', updateadminopd);
$('.update-opd').on('click', update);
$('.btn-danger').on('click', deleted);
$('.btn-warning').on('click', acc);

// urursan
function getTahun(){
    let kode_b = $('#kode_b').val();
	// console.log(kode_b);
	$.ajax({
		type: "GET",
		url: base_url + '/get_tahun/'.concat(kode_b),
		dataType: "JSON",
		success: function (response) {
			console.log(response);
			var selectTahun = $('#tahun');

			// Hapus semua opsi yang ada dalam elemen select
			selectTahun.empty();
	
			// Loop melalui data response
			$.each(response, function (key, value) {
				// Buat elemen option baru
				var option = $('<option>').val(value.tahun).text(value.tahun);
	
				// Tambahkan elemen option ke dalam select
				selectTahun.append(option);
			});
		}
	});
}
function getTahunVeri(){
    let kode_b = $('#bidang').val();
	var baseURL = base_url.split('/').slice(0, 3).join('/');
	$.ajax({
		type: "GET",
		url: baseURL + '/pinksipanda/urusan/get_tahun/'.concat(kode_b),
		dataType: "JSON",
		success: function (response) {
			console.log(response);
			var selectTahun = $('#tahun');

			// Hapus semua opsi yang ada dalam elemen select
			selectTahun.empty();
	
			// Loop melalui data response
			$.each(response, function (key, value) {
				// Buat elemen option baru
				var option = $('<option>').val(value.tahun).text(value.tahun);
	
				// Tambahkan elemen option ke dalam select
				selectTahun.append(option);
			});
		}
	});
}
function getBidang(){
    let opd = $('#opd').val();
	var baseURL = base_url.split('/').slice(0, 3).join('/');

	$.ajax({
		type: "GET",
		url: baseURL + '/pinksipanda/urusan/get_bidang/'.concat(opd),
		dataType: "JSON",
		success: function (response) {
;
			var selectBidang = $('#bidang');

			// Hapus semua opsi yang ada dalam elemen select
			selectBidang.empty();
	
			// Loop melalui data response
			$.each(response, function (key, value) {
				// Buat elemen option baru
				var option = $('<option>').val(value.kode).text(value.urusan);
	
				// Tambahkan elemen option ke dalam select
				selectBidang.append(option);
			});
		}
	});
}

function sync(e){
	e.preventDefault();
	let kode_b = $('#kode_b').val();
	let tahun = $('#tahun').val();
	$.ajax({
		type: "GET",
		url: base_url + '/async?kode_b='.concat(kode_b) + '&tahun='.concat(tahun),
		dataType: "JSON",
		success: function (response) {
			console.log(response);
			let tbody = $('#urusan-tbody');
            tbody.empty();

            // Inisialisasi nomor urut
            let counter = 1;

            for (let i = 0; i < response.length; i++) {
                let row = response[i];
                let statusIsAcc = row.is_acc == 1 ? 'Sudah Terverifikasi' : 'Belum Terverifikasi';

                // Tambahkan nomor urut, input L, dan input P ke dalam baris HTML
                let tr = `
                    <tr>
                        <td>${counter}</td>
                        <td>${row.indikator}</td>
                        <td>${row.nama_bidang}</td>
                        <td >${statusIsAcc}</td>
                        <td class="text-center"><input type="text" class="form-control btn-l" id="inputL_${row.id}" value="${row.L}"></td>
                        <td class="text-center"><input type="text" class="form-control btn-p" id="inputP_${row.id}" value="${row.P}"></td>
                        <td>
                            <button class="btn btn-info btn-sm update-urusan" >Update</button>
                        </td>
                    </tr>
                `;

                tbody.append(tr);
                counter++;
            }
			$('.update-urusan').on('click',updateUrusan);
		}
	});
}
function syncveri(e){
	var baseURL = base_url.split('/').slice(0, 3).join('/');
	e.preventDefault();
	let kode_b = $('#bidang').val();
	let tahun = $('#tahun').val();
	let kode = $('#opd').val();
	console.log(baseURL + '/pinksipanda/urusan/async?kode_b='.concat(kode_b) + '&tahun='.concat(tahun)+'&opd='.concat(kode));
	$.ajax({
		type: "GET",
		url: baseURL + '/pinksipanda/urusan/async?kode_b='.concat(kode_b) + '&tahun='.concat(tahun)+'&opd='.concat(kode),
		dataType: "JSON",
		success: function (response) {
			console.log(response);
			let tbody = $('#urusan-tbody');
            tbody.empty();

            // Inisialisasi nomor urut
            let counter = 1;

            for (let i = 0; i < response.length; i++) {
                let row = response[i];
                let statusIsAcc = row.is_acc == 1 ? 'Sudah Terverifikasi' : 'Belum Terverifikasi';

                // Tambahkan nomor urut, input L, dan input P ke dalam baris HTML
                let tr = `
                    <tr>
                        <td>${counter}</td>
                        <td>${row.indikator}</td>
                        <td>${row.nama_bidang}</td>
                        <td >${statusIsAcc}</td>
                        <td class="text-center"><input type="text" class="form-control btn-l" id="inputL_${row.id}" value="${row.L}" readonly></td>
                        <td class="text-center"><input type="text" class="form-control btn-p" id="inputP_${row.id}" value="${row.P}" readonly></td>
                        <td>
                            <button class="btn btn-info btn-sm update-urusan-acc" >Acc</button>
                        </td>
                    </tr>
                `;

                tbody.append(tr);
                counter++;
            }
			$('.update-urusan-acc').on('click',updateUrusanAcc);
		}
	});
}
function syncadmin(e){
	var baseURL = base_url.split('/').slice(0, 3).join('/');
	e.preventDefault();
	let kode_b = $('#bidang').val();
	let tahun = $('#tahun').val();
	let kode = $('#opd').val();
	console.log(baseURL + '/pinksipanda/urusan/async?kode_b='.concat(kode_b) + '&tahun='.concat(tahun)+'&opd='.concat(kode));
	$.ajax({
		type: "GET",
		url: baseURL + '/pinksipanda/urusan/async?kode_b='.concat(kode_b) + '&tahun='.concat(tahun)+'&opd='.concat(kode),
		dataType: "JSON",
		success: function (response) {
			console.log(response);
			let tbody = $('#urusan-tbody');
            tbody.empty();

            // Inisialisasi nomor urut
            let counter = 1;

            for (let i = 0; i < response.length; i++) {
                let row = response[i];
                let statusIsAcc = row.is_acc == 1 ? 'Sudah Terverifikasi' : 'Belum Terverifikasi';

                // Tambahkan nomor urut, input L, dan input P ke dalam baris HTML
                let tr = `
                    <tr>
                        <td>${counter}</td>
                        <td>${row.indikator}</td>
                        <td>${row.nama_bidang}</td>	
                        <td >${statusIsAcc}</td>
                        <td class="text-center"><input type="text" class="form-control btn-l" id="inputL_${row.id}" value="${row.L}" readonly></td>
                        <td class="text-center"><input type="text" class="form-control btn-p" id="inputP_${row.id}" value="${row.P}" readonly></td>
                    </tr>
                `;

                tbody.append(tr);
                counter++;
            }
			$('.update-urusan-acc').on('click',updateUrusanAcc);
		}
	});
}
function updateUrusan() {
	let id = $(this).closest('tr').find('input').attr('id');
    id = id.split('_')[1];
	let L  = $(`#inputL_${id}`).val()
	let P  = $(`#inputP_${id}`).val()
   
	$.ajax({
        type: "POST",
        url: base_url+'/update', 
        data: {
            id: id,
            L: L,
            P: P
        },
        dataType: "JSON",
        success: function (response) {
           if (response) {
			toastr.success('Berhasil Merubah Data', 'Success')
		   }
        }
    });
}
function updateUrusanAcc() {
	let id = $(this).closest('tr').find('input').attr('id');
    id = id.split('_')[1];
	var baseURL = base_url.split('/').slice(0, 3).join('/');
	console.log(id);
   
	$.ajax({
        type: "POST",
        url: baseURL+'/pinksipanda/urusan/update_acc', 
        data: {
            id: id,
        },
        dataType: "JSON",
        success: function (response) {
			console.log(response);
           if (response) {
			toastr.success('Berhasil Merubah Data', 'Success')
		   }
        }
    });
}

function cetakUrusan(e){
	e.preventDefault();
	console.log("oke");
	var baseURL = base_url.split('/').slice(0, 3).join('/');
	let kode_b = $('#bidang').val();
	let tahun = $('#tahun').val();
	let kode = $('#opd').val();
	window.location.href = baseURL + '/pinksipanda/laporan/cetakUrusan?kode_b='.concat(kode_b) + '&tahun='.concat(tahun)+'&opd='.concat(kode)
}

$('.get-year').on('change', getTahun);
$('.get-year-veri').on('change', getTahunVeri);
$('.cetak-urusan').on('click', cetakUrusan);
$('.get-bidang').on('change', getBidang);
$('.get-data').on('click', sync);
$('.get-data-verifikator').on('click', syncveri);
$('.get-data-superadmin').on('click', syncadmin);



});
