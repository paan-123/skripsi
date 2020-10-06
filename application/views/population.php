<?php
// echo "<pre>";
// print_r($result);
// echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Population</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bs4.5.2-dist/css/bootstrap.min.css')?>">
</head>
<body>
	<div class="container">
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
                    <nav aria-label="Page navigation">
                        <!-- Menampilkan pagination -->
                        <?php echo $pagination;?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <script>
        var data = JSON.parse('<?= json_encode($result)?>');
        var th = document.querySelector("thead tr");
        var tb = document.querySelector("tbody");

        for(column in data[0]){
            th.innerHTML += "<th>" + column + "</th>"
        }

        data.forEach(all => {
            var i = 0
            content = "<tr>"
            Object.values(all).forEach(part => {
                if(i == 0){
                    content += "<td><a href='" + part + "'>" + part + "</a></td>"
                    i++
                }else{
                    content += "<td>" + part + "</td>"
                    i++
                }
            })
            tb.innerHTML += content
        });
    </script>
</body>
</html>