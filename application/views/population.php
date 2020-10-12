<?php
// echo "<pre>";
// print_r($result);
// echo "</pre>";
?>
<!DOCTYPE html>
<html>

<head>
	<title>Population</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bs4.5.2-dist/css/bootstrap.min.css') ?>">
</head>

<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive table-bordered" border="1" cellspacing="0" cellpadding="5">
					<table class="table">
						<thead>
							<tr></tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
				<nav aria-label="Page navigation">
					<?php echo $pagination; ?>
				</nav>
			</div>
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
					<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/bs4.5.2-dist/js/bootstrap.min.js') ?>"></script>
	<script>
		var data = JSON.parse('<?= json_encode($result) ?>');
		var th = document.querySelector("thead tr");
		var tb = document.querySelector("tbody");

		for (column in data[0]) {
			th.innerHTML += "<th>" + column + "</th>"
		}

		

		data.forEach(all => {
			var i = 0
			content = "<tr>"
			Object.values(all).forEach(part => {
				if (i == 0) {
					content += '<td><a href="#" data-toggle="modal" data-target="#exampleModalCenter">' + part + "</a></td>"
					i++
				} else {
					content += "<td>" + part + "</td>"
					i++
				}
			})
			tb.innerHTML += content
		});

		$('#exampleModalCenter').on('show.bs.modal', function(e) {
			//e.relatedTarget.dataset["t"];
			id = e.relatedTarget.text
			document.querySelector(".modal-body").innerHTML = id
		})

		for (const [key, value] of Object.entries(data[0])) {
			console.log(key);
		}
	</script>
</body>

</html>