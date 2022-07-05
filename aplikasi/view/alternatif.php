<?php
include "template/dashboard.php";
include "../control/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Review</title>

  <!-- Custom fonts for this template -->
  <link href="../../asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../../asset/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../asset/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../../asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Matrix Particial Awal</h1>

  <!-- <a href="tambah_data.php"><button type="button" class="btn btn-outline-danger">Tambah Data+</button></a> -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Cluster 1</th>
              <th>Cluster 2</th>
              <th>Cluster 3</th>
              <th>Jumlah</th>
              <!-- <th>Aksi</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            $nomor = 1;
            $getpartisi = mysqli_query($conn, "SELECT * FROM partisi_awal");
            while ($tampil = mysqli_fetch_array($getpartisi)) {
              // code...
              $partisi1 = $tampil['partisi1'];
              $partisi2 = $tampil['partisi2'];
              $partisi3 = $tampil['partisi3'];
              $jumlah = $tampil['jumlah'];
            ?>
              <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $partisi1; ?></td>
                <td><?php echo $partisi2; ?></td>
                <td><?php echo $partisi3; ?></td>
                <td><?php echo $jumlah; ?></td>
                <!-- <td><a href='php/delete_siswa.php?Del=<?php echo $id_siswa ?>'><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a> <a href='php/delete_siswa.php?Del=<?php echo $id_siswa ?>'><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a></td> -->
              </tr>
            <?php
              $nomor++;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Footer -->
<?php include "../view/template/footer.php"; ?>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<?php include "../view/logout-modal.php"; ?>
<!-- End Logout Modal-->

<!-- Bootstrap core JavaScript-->
<script src="../../asset/vendor/jquery/jquery.min.js"></script>
<script src="../../asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../../asset/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="../../asset/js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="../../asset/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../../asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="../../asset/js/demo/datatables-demo.js"></script>

</body>

</html>