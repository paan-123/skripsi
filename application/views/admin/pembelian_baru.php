<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php'); ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <?php $this->load->view('admin/_partials/header.php'); ?>
            <nav class="navbar-mobile"> 
				<?php $this->load->view('admin/_partials/nav.php'); ?>
			</nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url('assets/assets-admin/images/icon/logo.png'); ?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <?php $this->load->view('admin/_partials/side_bar.php')?>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo base_url('admin/logout')?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
            <div   tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div>
  <h1 style="text-align: center;">Buat Pembelian</h1>
  <hr>	
  
 
</div>
<div class="ml-3 mr-3">
  <form action="" method="post" enctype="multipart/formdata">
         <div class="row">
             <div class="col">        

      <div class="form-group">
          <label> Nama</label>
          <input type="text" name="buat_pembelian" class="form-control">
      </div>

      <div class="form-group">
          <label> Jenis Kelamin</label>
          <select class="form-control" id="exampleFormControlSelect1">
                <option>Laki-Laki</option>
                <option>Perempuan</option>
          </select>

      </div>
      <div class="form-group">
          <label> Pekerjaan</label>
          <select class="form-control" id="exampleFormControlSelect1">
                <option>Wira Swasta</option>
                <option>Aparatur Sipil Negara</option>
                <option>Pegawai Swasta</option>
                <option>Pelajar/Mahasiswa</option>
                <option>Tidak Bekerja</option>
          </select>
      </div>

      <div class="form-group">
          <label> Umur</label>
          <input type="text" name="buat_pembelian" class="form-control">
      </div>

      </div>
      
      <div class="col">
          <div class="form-group">
          <label> No Penjualan</label> <br>
          <input class="form-control" type="text" placeholder="2121111" readonly>
      </div> 
      <div class="form-group">
          <label> Tanggal Penjualan</label>
          <input type="date" name="buat_pembelian" class="form-control">
      </div>

      <div class="form-group">
          <label> Keterangan</label> <br>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <hr>	
      <div class="form-group">
          <label> Total Harga</label> <br>
          <input class="form-control" type="text" placeholder="0" readonly>
      </div>  

</div>
    </div>        
</div>
</form>

<hr>	

    <table class="table table-striped mb-3">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Sku</th>
<th scope="col">Nama Barang</th>
<th scope="col">Kode Barang</th>
<th scope="col">Jenis Barang</th>
<th scope="col">Jumlah</th>
<th scope="col">Harga Satuan</th>
<th scope="col">Total</th>
<th scope="col">Aksi</th>

</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>AV</td>
<td>alia-v</td>
<td>2110</td>
<td>Pelembab</td>
<td>2</td>
<td>160.000</td>
<td>240.000</td>
<td>
    <button type="button" class="btn btn-danger" >Hapus</button>	
</td>
</tr>
<tr>
<th scope="row">2</th>
<td>AV</td>
<td>alia-v</td>
<td>2222</td>
<td>Pe-202</td>
<td>1</td>
<td>160.000</td>
<td>160.000</td>
<td>
<button type="button" class="btn btn-danger" >Hapus</button>	
</td>
</tr>
</tbody>
</table>


<hr>	
<div style="margin-left: 40%;">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pilihbarang">
Pilih Barang
</button>

  <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#buat_pembelian">Simpan</button>

<!-- Modal -->
<div class="modal fade" id="pilihbarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
 <table class="table table-striped">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Sku</th>
<th scope="col">Produk</th>
<th scope="col">Nama Barang</th>
<th scope="col">Jenis Barang</th>
<th scope="col">Harga Satuan</th>
<th scope="col">Aksi</th>


</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>AV</td>
<td>alia-v</td>
<td>alia-v whitening</td>
<td>Pelembab</td>
<td>160.000</td>
<td>
    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#pilihbarang1">Pilih</button>	
</td>
</tr>
<tr>
<th scope="row">2</th>
<td>AV</td>
<td>skincare</td>
<td>2222</td>
<td>Pe-202</td>
<td>160.000</td>
<td>
    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#pilihbarang1">Pilih</button>
</td>


</tr>
</tbody>
</table>
<hr>	
</div>
</div>
</div>
</div>
</div>

</form>

          <!-- Modal -->
<div class="modal fade" id="pilihbarang1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Detail Barang</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
 <div class="form-group">
          <label> kode</label>
              <select class="form-control form-control-sm">
<option>Av-0012</option>
</select>
      </div>
</div>

<div class="modal-body">
 <div class="form-group">
          <label> jumlah</label>
              <input type="number" name="jumlah" class="form-control" >
      </div>
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-primary">Tambahkan</button>
</div>
</div>
</div>
</div>

</div>
</div>
</div>




</section>








            </div>
        </div>
	</div>
	
	<!-- load all js script -->
	<?php $this->load->view('admin/_partials/script.php'); ?>

</body>

</html>
<!-- end document-->
