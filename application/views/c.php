<?php
// echo "<pre>";
// print_r($data);
// echo "</pre>";
// die();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Population</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/bs4.5.2-dist/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/datatables.min.css') ?>">
</head>

<body>


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table id="table_id" class="table table-hover table-striped table-bordered dt-responsive nowrap"></table>
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
  <script src="<?= base_url('assets/js/datatables.min.js') ?>"></script>
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
    data_test = [{
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
    dt = JSON.parse('<?= $data ?>')
    console.log(dt)

    $(document).ready(function() {
      $('#table_id').DataTable({
        data: dt,
        columns: [
          {data: "nama",title:"Nama"},
          {data: "no_ktp",title:"KTP"},
          {data: "tgl_lahir",title:"Tanggal Lahir"},
          {data: "tmp_lahir",title:"Tempat Lahir"},
          {data: "kd_induk", title:"Induk"}
        ],
        "order": [[1, 'asc']]
      });
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