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
  <link rel="stylesheet" href="<?= base_url('assets/css/datatables.min.css') ?>">
</head>

<body>


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table id="tabb"></table>
        <table id="table_id" class="display">
          <thead>
            <tr>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
            </tr>
          </tbody>
        </table>
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
    var cl = [];
    dt = JSON.parse('<?= $data ?>')
    var res = [];
    tr = document.querySelector("tr")

    for (var i in dt) {
      var dt_tmp = []
      Object.values(dt[i]).forEach(part => {
        dt_tmp.push(part)
      })
      res[i] = dt_tmp
    }

    for (column in dt[0]) {
      cl.push({
        title: column
      })
      tr.innerHTML += '<th></th>'
    }

    $(document).ready(function() {
      $('#table_id').DataTable({
        columns: cl,
        data: res
      });
    });
  </script>
</body>

</html>