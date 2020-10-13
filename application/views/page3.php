<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page3</title>
	<link rel="icon" type="image/x-icon" href="assets/assets/img/favicon.ico" />
	<link rel="stylesheet" href="assets/bs4.5.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/own.css">
	<link rel="stylesheet" href="assets/css/datatables.min.css">
	<link rel="stylesheet" href="assets/css/dataTables.responsive.min.css">
</head>

<body>
	<!-- Navigation-->
	<div class="wrapper re">
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3" id="mainNav" style="background-color: rgba(0, 0, 0, 0.678)">
			<div class="container">
				<a class="navbar-brand js-scroll-trigger Montserrat-700" href="#carouselExampleIndicators">Masjid</a>
				<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="navbar-collapse collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto my-2 my-lg-0">
						<!-- <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page1">Page 1</a></li> -->
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page2">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700 active" href="page3">Table</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page4">Article</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page5">Map</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="addArticle">AddArticle</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="#footer">About</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<main class="container">
			<div class="row">
				<h1>Table</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table id="table_id" class="w-100 table table-hover table-striped table-bordered dt-responsive nowrap"></table>
				</div>
			</div>

			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Detail</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<dl class="row">
							</dl>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- Footer-->
		<footer class="footer text-center pt-5 pb-5 bg-dark" id="footer">
			<div class="container">
				<div class="row">
					<!-- Footer Location-->
					<div class="col-lg-4 mb-5 mb-lg-0">
						<h4 class="text-uppercase mb-4">Location</h4>
						<p class="lead mb-0">
							2215 John Daniel Drive
							<br />
							Clark, MO 65243
						</p>
					</div>
					<!-- Footer Social Icons-->
					<div class="col-lg-4 mb-5 mb-lg-0">
						<h4 class="text-uppercase mb-4">Around the Web</h4>
						<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
						<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
						<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
						<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
					</div>
					<!-- Footer About Text-->
					<div class="col-lg-4">
						<h4 class="text-uppercase mb-4">About Masjid</h4>
						<p class="lead mb-0">
							Freelance is a free to use, MIT licensed Bootstrap theme created by
							<a href="http://startbootstrap.com">Start Bootstrap</a>
							.
						</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- Copyright Section-->
		<div class="copyright py-4 text-center text-white" style="background-color: #1a252f">
			<div class="container"><small>Copyright © Masjid 2020</small></div>
		</div>
	</div>
	<!-- Bootstrap core JS-->
	<script src="assets/fonts/fa-5.15.5/js/all.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/bs4.5.2-dist/js/bootstrap.min.js"></script>
	<script src='assets/js/datatables.min.js'></script>
	<script src='assets/js/dataTables.responsive.min.js'></script>
	<script>
		data_ori = [{
			"kd_induk": "1",
			"nama": "Thor",
			"tmp_lahir": "asgard",
			"tgl_lahir": "1997-10-13",
			"j_kelamin": "L",
			"kd_agama": "1",
			"kd_pendidikan": "1",
			"kd_pekerjaan": "1",
			"status_kawin": "Belum Nikah",
			"status_mukim": "Akamsi",
			"keterangan_mukim": "ANAK KAMPUNG SINI",
			"kd_level_ekonomi": "963258741",
			"is_latin": "yes",
			"is_hijaiyah": "yes",
			"is_iqra": "yes",
			"is_quran": "yes",
			"is_5waktu": "yes",
			"is_jamaah": "yes",
			"is_zakat_fitrah": "yes",
			"is_zakat_mal": "yes",
			"kd_rt": "1",
			"no_ktp": "1478523692",
			"status": "jomblo"
		}]
		data_acceptable = [{
				"nama": "ade",
				"password": "1"
			},
			{
				"nama": "bagas",
				"password": "2"
			},
		]
		data_test2 = {
			"nama": "ade",
			"password": "1"
		}
		data = JSON.parse('<?= $data ?>')
		dt = new Array()
		Object.entries(data).forEach(function(d){
			dt.push(d[1])
		})
		console.log(dt)

		$(document).ready(function() {
			$('#table_id').DataTable({
				data: dt,
				columns: [{
						data: "nama",
						title: "Nama"
					},
					{
						data: "no_ktp",
						title: "KTP"
					},
					{
						data: "tgl_lahir",
						title: "Tanggal Lahir"
					},
					{
						data: "tmp_lahir",
						title: "Tempat Lahir"
					},
					{
						data: "kd_induk",
						title: "Induk"
					}
				],
				"order": [
					[1, 'asc']
				],
				"responsive":false,
				"scrollX": true
			});
			$('#exampleModalCenter').on("show.bs.modal", function(e){
				let id = e.relatedTarget.dataset["id"]
				let modal = document.getElementsByClassName("modal-body")[0]
				console.log(data[id])
				dl = document.createElement("dl")
				Object.keys(data[id]).forEach(function(key){
					dt = document.createElement("dt")
					dd = document.createElement("dd")
					dt.textContent = key
					dd.textContent = key=="kd_induk"? id:data[id][key];
					dt.classList.add("col-sm-4")
					dd.classList.add("col-sm-8")
					dl.appendChild(dt)
					dl.appendChild(dd)
				})
				dl.classList.add("row")
				modal.children[0].remove()
				modal.appendChild(dl)
			})
		});

		// var p = [{
		//     "name": "Tiger Nixon",
		//     "position": "System Architect",
		//     "salary": "$3,120",
		//     "start_date": "2011/04/25",
		//     "office": "Edinburgh",
		//     "extn": "5421"
		//   },
		//   {
		//     "name": "Garrett Winters",
		//     "position": "Director",
		//     "salary": "$5,300",
		//     "start_date": "2011/07/25",
		//     "office": "Edinburgh",
		//     "extn": "8422"
		//   }
		// ]

		// $('#table_id').DataTable({
		//   data: p,
		//   columns: [
		//     {data: 'name'},
		//     {data: 'position'},
		//     {data: 'salary'},
		//     {data: 'office'}
		//   ]
		// });
	</script>

</body>

</html>