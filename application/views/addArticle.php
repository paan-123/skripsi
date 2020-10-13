<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Article</title>
    <link rel="icon" type="image/x-icon" href="assets/assets/img/favicon.ico" />
    <link rel="stylesheet" href="assets/bs4.5.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/own.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.responsive.min.css">
</head>

<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3" id="mainNav" style="background-color: rgba(0, 0, 0, 0.678)">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger Montserrat-700" href="#carouselExampleIndicators">Masjid</a>
                <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="navbar-collapse collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page1">Page 1</a></li> -->
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page2">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page3">Table</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page4">Article</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page5">Map</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700 active" href="addArticle">AddArticle</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="#footer">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container">
            <div class="row">
                <h1>Add Article</h1>
            </div>
            <div class="row" style="justify-content: center;">
                <form action="addArticle/upload" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" placeholder="Pengajian"></input>
                    </div>
                    <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control" name="deskripsi" rows="3" placeholder="kegiatan rutin di masjid kami..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="userfile" class="custom-file-input" id="exampleInputFile" accept=".jpg, .jpeg, .png">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary float-right" btn-lg btn-block">Submit</button>
                </form>
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
    <script src="assets/fonts/fa-5.15.5/js/all.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bs4.5.2-dist/js/bootstrap.min.js"></script>
</body>