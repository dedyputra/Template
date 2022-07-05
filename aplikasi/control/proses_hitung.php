<?php
// include "./template/dashboard.php";
include "../control/functions.php";
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

<body class="bg-gradient-primary">
  <div class="container mb-10">
    <div class="row justify-content-center">
      <div class="col-16">
        <div class="card">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Proses hitung</h6>
          </div>
          <div class="card-body">

            <?php
            // Derajat Keanggotaan Pada Cluster 1
            class Datahitung
            {
              public $id_data, $id_nama, $x1, $x2, $x3, $x4, $x5, $x6, $x7, $x8, $x9, $x10, $x11, $x12, $id1;
              public $p2x1, $p2x2, $p2x3, $p2x4, $p2x5, $p2x6, $p2x7, $p2x8, $p2x9, $p2x10, $p2x11, $p2x12;
              public $partisi1, $partisi2, $partisi3;
              public $kuadrat1, $kuadrat2;
            }

            $arraydata = array();
            $i = 0;
            $totalkuadrat1 = 0;
            $totalp1x1 = 0;
            $totalp1x2 = 0;
            $totalp1x3 = 0;
            $totalp1x4 = 0;
            $totalp1x5 = 0;
            $totalp1x6 = 0;
            $totalp1x7 = 0;
            $totalp1x8 = 0;
            $totalp1x9 = 0;
            $totalp1x10 = 0;
            $totalp1x11 = 0;
            $totalp1x12 = 0;
            $totalkuadrat2 = 0;

            $sqlambildata = "select * from data_survey";
            $sqlambildata2 = "select * from partisi_awal";
            $result = mysqli_query($conn, $sqlambildata);
            $result2 = mysqli_query($conn, $sqlambildata2);
            $sqlambildatalengkap = "select * from data_survey_baru";
            $resultdatalengkap = mysqli_query($conn, $sqlambildatalengkap);

            while ($display = mysqli_fetch_array($resultdatalengkap)) {
              $partisi1 = $display['partisi1'];
              $partisi2 = $display['partisi2'];
              $partisi3 = $display['partisi3'];

              $id_nama = $display['id'];
              $id_data = $display['NO'];
              $x1 = $display['X1'];
              $x2 = $display['X2'];
              $x3 = $display['X3'];
              $x4 = $display['X4'];
              $x5 = $display['X5'];
              $x6 = $display['X6'];
              $x7 = $display['X7'];
              $x8 = $display['X8'];
              $x9 = $display['X9'];
              $x10 = $display['X10'];
              $x11 = $display['X11'];
              $x12 = $display['X12'];

              $kuadratawalc1 = pow($partisi1, 2);
              $hasilx1c1 = ($kuadratawalc1 * $x1);
              $hasilx2c1 = ($kuadratawalc1 * $x2);
              $hasilx3c1 = ($kuadratawalc1 * $x3);
              $hasilx4c1 = ($kuadratawalc1 * $x4);
              $hasilx5c1 = ($kuadratawalc1 * $x5);
              $hasilx6c1 = ($kuadratawalc1 * $x6);
              $hasilx7c1 = ($kuadratawalc1 * $x7);
              $hasilx8c1 = ($kuadratawalc1 * $x8);
              $hasilx9c1 = ($kuadratawalc1 * $x9);
              $hasilx10c1 = ($kuadratawalc1 * $x10);
              $hasilx11c1 = ($kuadratawalc1 * $x11);
              $hasilx12c1 = ($kuadratawalc1 * $x12);

              //data hitung partisi1
              $datahitung = new Datahitung();
              $datahitung->kuadrat1 = $kuadratawalc1;
              $datahitung->x1 = $hasilx1c1;
              $datahitung->x2 = $hasilx2c1;
              $datahitung->x3 = $hasilx3c1;
              $datahitung->x4 = $hasilx4c1;
              $datahitung->x5 = $hasilx5c1;
              $datahitung->x6 = $hasilx6c1;
              $datahitung->x7 = $hasilx7c1;
              $datahitung->x8 = $hasilx8c1;
              $datahitung->x9 = $hasilx9c1;
              $datahitung->x10 = $hasilx10c1;
              $datahitung->x11 = $hasilx11c1;
              $datahitung->x12 = $hasilx12c1;

              $datahitung->id_data = $id_data;


              $arraydata[$i] = $datahitung;
              $i++;
            }
            // while ($display = mysqli_fetch_array($result)) {

            //   while ($displayc2 = mysqli_fetch_array($result2)) {

            //     $partisi1 = $displayc2['partisi1'];
            //     $partisi2 = $displayc2['partisi2'];
            //     $partisi3 = $displayc2['partisi3'];

            //     $id_data = $display['id_data'];
            //     $id_nama = $display['ID'];
            //     $x1 = $display['X1'];
            //     $x2 = $display['X2'];
            //     $x3 = $display['X3'];
            //     $x4 = $display['X4'];
            //     $x5 = $display['X5'];
            //     $x6 = $display['X6'];
            //     $x7 = $display['X7'];
            //     $x8 = $display['X8'];
            //     $x9 = $display['X9'];
            //     $x10 = $display['X10'];
            //     $x11 = $display['X11'];
            //     $x12 = $display['X12'];

            //     //partisi1

            //     $kuadratawalc1 = pow($partisi1, 2);
            //     $hasilx1c1 = ($kuadratawalc1 * $x1);
            //     $hasilx2c1 = ($kuadratawalc1 * $x2);
            //     $hasilx3c1 = ($kuadratawalc1 * $x3);
            //     $hasilx4c1 = ($kuadratawalc1 * $x4);
            //     $hasilx5c1 = ($kuadratawalc1 * $x5);
            //     $hasilx6c1 = ($kuadratawalc1 * $x6);
            //     $hasilx7c1 = ($kuadratawalc1 * $x7);
            //     $hasilx8c1 = ($kuadratawalc1 * $x8);
            //     $hasilx9c1 = ($kuadratawalc1 * $x9);
            //     $hasilx10c1 = ($kuadratawalc1 * $x10);
            //     $hasilx11c1 = ($kuadratawalc1 * $x11);
            //     $hasilx12c1 = ($kuadratawalc1 * $x12);

            //     //partisi2
            //     $kuadratawalc2 = pow($partisi2, 2);
            //     $hasilx1c2 = ($kuadratawalc2 * $x1);
            //     $hasilx2c2 = ($kuadratawalc2 * $x2);
            //     $hasilx3c2 = ($kuadratawalc2 * $x3);
            //     $hasilx4c2 = ($kuadratawalc2 * $x4);
            //     $hasilx5c2 = ($kuadratawalc2 * $x5);
            //     $hasilx6c2 = ($kuadratawalc2 * $x6);
            //     $hasilx7c2 = ($kuadratawalc2 * $x7);
            //     $hasilx8c2 = ($kuadratawalc2 * $x8);
            //     $hasilx9c2 = ($kuadratawalc2 * $x9);
            //     $hasilx10c2 = ($kuadratawalc2 * $x10);
            //     $hasilx11c2 = ($kuadratawalc2 * $x11);
            //     $hasilx12c2 = ($kuadratawalc2 * $x12);

            //     //data hitung partisi1
            //     $datahitung = new Datahitung();
            //     $datahitung->kuadrat1 = $kuadratawalc1;
            //     $datahitung->x1 = $hasilx1c1;
            //     $datahitung->x2 = $hasilx2c1;
            //     $datahitung->x3 = $hasilx3c1;
            //     $datahitung->x4 = $hasilx4c1;
            //     $datahitung->x5 = $hasilx5c1;
            //     $datahitung->x6 = $hasilx6c1;
            //     $datahitung->x7 = $hasilx7c1;
            //     $datahitung->x8 = $hasilx8c1;
            //     $datahitung->x9 = $hasilx9c1;
            //     $datahitung->x10 = $hasilx10c1;
            //     $datahitung->x11 = $hasilx11c1;
            //     $datahitung->x12 = $hasilx12c1;

            //     $datahitung->id_data = $id_data;

            //     //data hitung partisi2
            //     $datahitung->kuadrat2 = $kuadratawalc2;
            //     $datahitung->p2x1 = $hasilx1c2;
            //     $datahitung->p2x2 = $hasilx2c2;
            //     $datahitung->p2x3 = $hasilx3c2;
            //     $datahitung->p2x4 = $hasilx4c2;
            //     $datahitung->p2x5 = $hasilx5c2;
            //     $datahitung->p2x6 = $hasilx6c2;
            //     $datahitung->p2x7 = $hasilx7c2;
            //     $datahitung->p2x8 = $hasilx8c2;
            //     $datahitung->p2x9 = $hasilx9c2;
            //     $datahitung->p2x10 = $hasilx10c2;
            //     $datahitung->p2x11 = $hasilx11c2;
            //     $datahitung->p2x12 = $hasilx12c2;

            //     $arraydata[$i] = $datahitung;
            //     $i++;
            //   }
            // }


            ?>

            <div class="card shadow mb-4">
              <!-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Partisi 1</h6>
              </div> -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kuadrat Awal</th>
                        <th>Id Nama</th>
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

                      for ($i = 0; $i < sizeof($arraydata); $i++) {
                        $datahitung = $arraydata[$i];

                        // $totalkuadrat1 = $datahitung->kuadrat1 + $totalkuadrat1;

                      ?>
                        <tr>
                          <td><?php echo $nomor; ?></td>
                          <td><?php echo $datahitung->kuadrat1; ?></td>
                          <td><?php echo $datahitung->id_data; ?></td>
                          <td><?php echo $datahitung->x1; ?></td>
                          <td><?php echo $datahitung->x2; ?></td>
                          <td><?php echo $datahitung->x3; ?></td>
                          <td><?php echo $datahitung->x4; ?></td>
                          <td><?php echo $datahitung->x5; ?></td>
                          <td><?php echo $datahitung->x6; ?></td>
                          <td><?php echo $datahitung->x7; ?></td>
                          <td><?php echo $datahitung->x8; ?></td>
                          <td><?php echo $datahitung->x9; ?></td>
                          <td><?php echo $datahitung->x10; ?></td>
                          <td><?php echo $datahitung->x11; ?></td>
                          <td><?php echo $datahitung->x12; ?></td>

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

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Total Kuadrat Awal</th>
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

                      for ($i = 0; $i < sizeof($arraydata); $i++) {
                        $datahitung = $arraydata[$i];

                        $totalkuadrat1 = $datahitung->kuadrat1 + $totalkuadrat1;
                        $totalp1x1 = $datahitung->x1 + $totalp1x1;
                        $totalp1x2 = $datahitung->x2 + $totalp1x2;
                        $totalp1x3 = $datahitung->x3 + $totalp1x3;
                        $totalp1x4 = $datahitung->x4 + $totalp1x4;
                        $totalp1x5 = $datahitung->x5 + $totalp1x5;
                        $totalp1x6 = $datahitung->x6 + $totalp1x6;
                        $totalp1x7 = $datahitung->x7 + $totalp1x7;
                        $totalp1x8 = $datahitung->x8 + $totalp1x8;
                        $totalp1x9 = $datahitung->x9 + $totalp1x9;
                        $totalp1x10 = $datahitung->x10 + $totalp1x10;
                        $totalp1x11 = $datahitung->x11 + $totalp1x11;
                        $totalp1x12 = $datahitung->x12 + $totalp1x12;
                      }
                      ?>
                      <tr>
                        <td><?php echo "1"; ?></td>
                        <td><?php echo $totalkuadrat1; ?></td>
                        <td><?php echo $totalp1x1; ?></td>
                        <td><?php echo $totalp1x2; ?></td>
                        <td><?php echo $totalp1x3; ?></td>
                        <td><?php echo $totalp1x4; ?></td>
                        <td><?php echo $totalp1x5; ?></td>
                        <td><?php echo $totalp1x6; ?></td>
                        <td><?php echo $totalp1x7; ?></td>
                        <td><?php echo $totalp1x8; ?></td>
                        <td><?php echo $totalp1x9; ?></td>
                        <td><?php echo $totalp1x10; ?></td>
                        <td><?php echo $totalp1x11; ?></td>
                        <td><?php echo $totalp1x12; ?></td>
                        <!-- <td><a href='php/delete_siswa.php?Del=<?php echo $id_siswa ?>'><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a> <a href='php/delete_siswa.php?Del=<?php echo $id_siswa ?>'><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a></td> -->
                      </tr>
                    </tbody>

                  </table>

                  <p>Total kuadrat : <?php echo $totalkuadrat1 ?></p>
                </div>
              </div>

              <div class="card-body">
                <p>Partisi 2</p>
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kuadrat Awal</th>
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

                      for ($i = 0; $i < sizeof($arraydata); $i++) {
                        $datahitung = $arraydata[$i];

                        $totalkuadrat2 = $datahitung->kuadrat2 + $totalkuadrat2;

                      ?>
                        <tr>
                          <td><?php echo $nomor; ?></td>
                          <td><?php echo $datahitung->kuadrat2; ?></td>
                          <td><?php echo $datahitung->p2x1; ?></td>
                          <td><?php echo $datahitung->p2x2; ?></td>
                          <td><?php echo $datahitung->p2x3; ?></td>
                          <td><?php echo $datahitung->p2x4; ?></td>
                          <td><?php echo $datahitung->p2x5; ?></td>
                          <td><?php echo $datahitung->p2x6; ?></td>
                          <td><?php echo $datahitung->p2x7; ?></td>
                          <td><?php echo $datahitung->p2x8; ?></td>
                          <td><?php echo $datahitung->p2x9; ?></td>
                          <td><?php echo $datahitung->p2x10; ?></td>
                          <td><?php echo $datahitung->p2x11; ?></td>
                          <td><?php echo $datahitung->p2x12; ?></td>






                          <!-- <td><a href='php/delete_siswa.php?Del=<?php echo $id_siswa ?>'><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a> <a href='php/delete_siswa.php?Del=<?php echo $id_siswa ?>'><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a></td> -->
                        </tr>
                      <?php
                        $nomor++;
                      }
                      ?>
                    </tbody>

                  </table>

                  <p>Total kuadrat : <?php echo $totalkuadrat1 ?></p>
                </div>
              </div>
            </div>



          </div>
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

</body>

</html>