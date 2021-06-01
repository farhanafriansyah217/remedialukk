<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              
            </div>
            <div class="card-body">

            <h3 class="m-0 font-weight-bold text-primary" align="center">PEMERINTAHAN KABUPATEN ACEH TAMIANG</h3>
            <h4 class="m-0 font-weight-bold text-primary" align="center">DESA SELAMAT KEC. TENGGULUN</h4>
            <h6 class="m-0 font-weight-bold text-primary" align="center">Jl. Medan-B.Aceh kode pos24471</h6>
              <br><br><hr>
             <h4 class="m-0 font-weight-bold text-primary" align="center">Laporan Tanggapan</h4>
             <br><br>


              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 
                    <tr>
                      <th>ID Tanggapan</th>
                      <th>id Pengaduan</th>
                      <th>tgl tanggapan</th>
                      <th>tanggapan</th>
                      <th>id petugas</th>
                      
                    </tr>
                 
                  <?php
                  include '../koneksi.php';
                  $sql= $mysqli -> query("select * from tanggapan");
                  while ($data=mysqli_fetch_array($sql)) {
                    
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $data['id_petugas']; ?></td>
                      <td><?php echo $data['id_pengaduan']; ?></td>
                      <td><?php echo $data['tgl_tanggapan']; ?></td>
                      <td><?php echo $data['tanggapan']; ?></td>
                      <td><?php echo $data['id_petugas']; ?></td>
                      
                        
                    </tr>
                    
                  </tbody>
                  <?php } ?>
                </table>
              </div>
               <br>
                <br>
                <h6 class="m-0 font-weight-bold text-primary" align="right">Aceh Tamiang, <?php echo date('d/m/Y'); ?></h6>
                <h6 class="m-0 font-weight-bold text-primary" align="right">Petugas,</h6>
                <br><br><br><br>
                <h6 class="m-0 font-weight-bold text-primary" align="right"><?php echo $_SESSION['nama']; ?></h6>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span></span>
          </div>
        </div>
      </footer>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>


</script>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>