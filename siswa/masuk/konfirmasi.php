
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Absensi - Konfirmasi Absen Siswa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../../assets/img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>



  <?php 

include('../../koneksi.php');

$no_kartu = $_POST['no_kartu'];

$query = "SELECT tbl_siswa.*, tbl_kelas.nama_kelas, tbl_jurusan.nama_jurusan FROM tbl_siswa 
            JOIN tbl_kelas ON tbl_siswa.kelas_id = tbl_kelas.id 
            JOIN tbl_jurusan ON tbl_siswa.jurusan_id = tbl_jurusan.id
            WHERE no_kartu = '$no_kartu' ";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

{
    ?>

    <div class="container-fluid pt-4 px-4" style="margin-top: 50PX;">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="bg-secondary rounded p-4" >
              <h5>KONFIRMASI ABSEN</h5>
              <div class="d-flex align-items-center justify-content-between mb-4">
            </div>
              <form action="simpan-hadir.php" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label>No kartu</label> 
                    <br>
                    <textarea class="form-control" name="no_kartu" id="exampleFormControlTextarea1" rows="1" readonly><?php echo $row['no_kartu'] ?></textarea>
                </div>
                <br>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <textarea class="form-control" name="nama_lengkap" id="exampleFormControlTextarea1" rows="1" readonly><?php echo $row['nama_lengkap'] ?></textarea>
                </div>
                <br>

                <div class="form-group">
                  <label>Kelas</label>
                  <textarea class="form-control" name="nama_kelas" id="exampleFormControlTextarea1" rows="1" readonly><?php echo $row['nama_kelas'] ?></textarea>
                </div>
                <br>

                <div class="form-group">
                  <label>Jurusan</label>
                  <textarea class="form-control" name="nama_jurusan" id="exampleFormControlTextarea1" rows="1" readonly><?php echo $row['nama_jurusan'] ?></textarea>
                </div>
                <br>

                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" accept="image/*" capture="camera" name="foto"><br><br>
                </div>


                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

                <?php 
                } ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>




        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/lib/chart/chart.min.js"></script>
    <script src="../../assets/lib/easing/easing.min.js"></script>
    <script src="../../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../../assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../../assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../../assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../assets/js/main.js"></script>

</body>

</html>