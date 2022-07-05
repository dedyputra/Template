<?php
include "template/dashboard.php";

include "../control/koneksi.php";

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $query_datauser = "SELECT COUNT(*) AS jumlah FROM user_admin";
                                $resultdatauser = $conn->query($query_datauser);
                                $hasil = mysqli_fetch_array($resultdatauser);
                                echo "{$hasil['jumlah']}";
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-solid fa-user-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Data Survey</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $query_data_survey = "SELECT COUNT(*) AS jumlah FROM data_survey";
                                $resultdatasurvey =  $conn->query($query_data_survey);
                                $hasil = mysqli_fetch_array($resultdatasurvey);
                                echo "{$hasil['jumlah']}";
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-light fa-book-open"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Information</h6>
        </div>
        <div class="card-body">
            <p>Aplikasi ini merupakan tugas akhir dari mata kuliah Data Mining,
                dengan topik Data Review Kampus menggunakan Fuzzy C-Means.</p>
            <p class="mb-0">
            <h6>Definisi Singkat tentang Fuzzy C-means</h6>
            Fuzzy C-Means clustering merupakan suatu metode clustering yang hampir mirip seperti k-means clustering.
            Karena metode clustering ini mirip dengan k-means clustering, ada yang menyebut metode ini fuzzy k-means clustering.
            Fuzzy c-means merupakan salah satu jenis soft clustering di mana dalam mengelompokan suatu data, setiap data bisa dimiliki lebih dari satu cluster.
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
<script src="../../asset/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="../../asset/js/demo/chart-area-demo.js"></script>
<script src="../../asset/js/demo/chart-pie-demo.js"></script>

</body>

</html>