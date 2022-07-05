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
    <h1 class="h3 mb-2 text-gray-800">Data Survey Mahasiswa</h1>

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
                            <th>ID</th>
                            <th>X1</th>
                            <th>X2</th>
                            <th>X3</th>
                            <th>X4</th>
                            <th>X5</th>
                            <th>X6</th>
                            <th>X7</th>
                            <th>X8</th>
                            <th>X9</th>
                            <th>X10</th>
                            <th>X11</th>
                            <th>X12</th>
                            <!-- <th>Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        $getdatasurvey = mysqli_query($conn, "SELECT * FROM data_survey");
                        while ($tampil = mysqli_fetch_array($getdatasurvey)) {
                            // code...
                            $ID = $tampil['ID'];
                            $X1 = $tampil['X1'];
                            $X2 = $tampil['X2'];
                            $X3 = $tampil['X3'];
                            $X4 = $tampil['X4'];
                            $X5 = $tampil['X5'];
                            $X6 = $tampil['X6'];
                            $X7 = $tampil['X7'];
                            $X8 = $tampil['X8'];
                            $X9 = $tampil['X9'];
                            $X10 = $tampil['X10'];
                            $X11 = $tampil['X11'];
                            $X12 = $tampil['X12'];
                        ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $ID; ?></td>
                                <td><?php echo $X1; ?></td>
                                <td><?php echo $X2; ?></td>
                                <td><?php echo $X3; ?></td>
                                <td><?php echo $X4; ?></td>
                                <td><?php echo $X5; ?></td>
                                <td><?php echo $X6; ?></td>
                                <td><?php echo $X7; ?></td>
                                <td><?php echo $X8; ?></td>
                                <td><?php echo $X9; ?></td>
                                <td><?php echo $X10; ?></td>
                                <td><?php echo $X11; ?></td>
                                <td><?php echo $X12; ?></td>
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

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Keterangan Kategori</h6>
        </div>
        <div class="card-body">
            <p>
                1. Sangat Suka = 5
                <br>
                2. Suka = 4
                <br>
                3. Biasa = 3
                <br>
                4. Tidak Suka = 2
                <br>
                5. Sangat Tidak Suka = 1
            </p>
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