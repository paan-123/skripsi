(function ($) {
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
})(jQuery)