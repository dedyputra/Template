 <?php
  include "./template/dashboard.php";
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
       <div class="col-12">
         <div class="card">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Proses hitung</h6>
           </div>
           <div class="card-body">
             <form action="../control/proses_hitung.php" method="POST" class="user" aria-describedby="emailHelp">
               <div class="mb-3">
                 <label for="jumlahcluster" class="form-label">Jumlah Cluster </label>
                 <input type="number" class="form-control" id="jumlahcluster" value="3" aria-describedby="emailHelp">
               </div>
               <div class="mb-3">
                 <label for="pembobot" class="form-label">Nilai Pembobot(Pangkat)</label>
                 <input type="number" class="form-control" value="2" id="pembobot">
               </div>
               <div class="mb-3">
                 <label for="maksimumiterasi" class="form-label">Maksimum Iterasi</label>
                 <input type="number" class="form-control" value="100" id="maksimumiterasi">
               </div>
               <div class="mb-3">
                 <label for="erorterkecil" class="form-label">Nilai Error Terkecil</label>
                 <input type="text" class="form-control" value="0.000001" id="erorterkecil">
               </div>
               <button type="submit" name="submit" class="btn btn-primary">Proses</button>
             </form>
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