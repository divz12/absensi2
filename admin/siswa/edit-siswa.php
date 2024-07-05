<?php
session_start();
if (!isset($_SESSION['log']) || $_SESSION['role'] != 'admin') {
    header('Location: ../../login.php');
    exit();
}
?>

<?php 
  
  include('../../koneksi.php');

  include 'functions.php';
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_siswa WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);


$students = getStudents();
$classes = getClasses();
$majors = getMajors();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Absensi - Edit Siswa</title>
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

<?php include('../includes/header.php'); ?>

<div id="layoutSidenav_content">
<main>

    <div class="container-fluid pt-4 px-4">
      <div class="row">
        <div class="col-sm-12">
          <div class="bg-secondary rounded p-4" >
            <h5>EDIT SISWA</h5>
            <div class="d-flex align-items-center justify-content-between mb-4">
            </div>
              <form action="update-siswa.php" method="POST">
                
                <div class="form-group">
                  <label>No. Kartu</label>
                  <input type="text" name="no_kartu" value="<?php echo $row['no_kartu'] ?>" placeholder="Masukkan No. Kartu" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>
                <br>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>" placeholder="Masukkan Nama Lengkap" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>
                <br>

                <div class="form-group">
                <label for="kelas_id">Kelas</label>
                <select id="kelas_id" name="kelas_id" class="form-select" required>
                  <option value="" selected disabled hidden>-- Pilih Kelas --</option>
                    <?php while ($class = $classes->fetch_assoc()) { ?>
                      <option value="<?php echo $class['id']; ?>"><?php echo $class['nama_kelas']; ?></option>
                   <?php } ?>
                </select>
                </div>
                <br>

                <div class="form-group">
                <label for="jurusan_id">Jurusan</label>
                <select id="jurusan_id" name="jurusan_id" class="form-select" required>
                  <option value="" selected disabled hidden>-- Pilih Kelas --</option>
                    <?php while ($major = $majors->fetch_assoc()) { ?>
                      <option value="<?php echo $major['id']; ?>"><?php echo $major['nama_jurusan']; ?></option>
                    <?php } ?>
                </select>
                </div>
                <br>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include('../includes/footer.php'); ?>

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