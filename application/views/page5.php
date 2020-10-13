<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page4</title>
    <link rel="icon" type="image/x-icon" href="assets/assets/img/favicon.ico" />
    <link rel="stylesheet" href="assets/bs4.5.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/own.css">
</head>

<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3" id="mainNav" style="background-color: rgba(0, 0, 0, 0.678)">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger Montserrat-700" href="#carouselExampleIndicators">Masjid</a>
                <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="navbar-collapse collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page1">Page 1</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page2">Page 2</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page3">Page 3</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page4">Page 4</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="#footer">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container">
            <h1>Map</h1>
            <div class="row">
                <!-- kalau udah fix -->
                <div id="map" style="width:100%;height:70vh"></div>
                <!-- <div id="map" style="width:50%;height:20rem"></div> -->
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

    <script>
        var customLabel = {
            restaurant: {
                label: 'R'
            },
            bar: {
                label: 'B'
            }
        };

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                //change this longtittude and altitude
                center: new google.maps.LatLng(-7.687489, 110.415782),
                zoom: 16
            });
            var infoWindow = new google.maps.InfoWindow;

            dt = JSON.parse('<?= $data ?>')
            dt.forEach(function(markerElem) {
                var point = new google.maps.LatLng(
                    parseFloat(markerElem.latitude),
                    parseFloat(markerElem.longitude));
                var infowincontent = new_el("div", "", ["container"]);
                //div
                var div_row = new_el("div", "", ["row"])
                div_row.appendChild(new_el('h4', "Detail"))
                infowincontent.appendChild(div_row)

                var div_row2 = new_el("div", "", ["row"])
                div_row2.appendChild(new_el("p", "No Rumah", ["px-0", "col-sm-2"])) //sisi kiri
                div_row2.appendChild(new_el("p", markerElem.no_rumah, ["pr-0", "col-sm-10"])) //sisi kanan
                infowincontent.appendChild(div_row2)

                var icon = customLabel["restaurant"] || {};
                var marker = new google.maps.Marker({
                    map: map,
                    position: point,
                    label: icon.label
                });
                marker.addListener('click', function() {
                    infoWindow.setContent(infowincontent);
                    infoWindow.open(map, marker);
                });
            });

            function new_el(tag, data = "", style = []) {
                let tag2 = document.createElement(tag)
                tag2.textContent = data
                style.forEach(function(s) {
                    tag2.classList.add(s)
                })

                return tag2;
            }

        }

        function doNothing() {}
    </script>
    <!-- change this api key -->
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9M1u_99_dtGU2EPvukSz2UwA544z_C2I&callback=initMap"></script>
    <script src="assets/fonts/fa-5.15.5/js/all.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bs4.5.2-dist/js/bootstrap.min.js"></script>
</body>