<?php
session_start();
if (!isset($_SESSION['log']) || $_SESSION['role'] != 'admin') {
    header('Location: ../../login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Absensi - Pengaturan Jam</title>
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
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" rel="stylesheet">

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
          <div class="bg-secondary rounded p-4">
              <h4>Pengaturan Jam Absensi</h4>
              <form action="simpan-absencpt.php" method="post">
                  <label for="enable_limit">Aktifkan Jam Pulang:</label>
                  <input type="checkbox" id="enable_limit" name="enable_limit"
                  <?php
                  // Membaca status batas jam kerja dari file JSON
                  $file = 'work_hours.json';
                  if (file_exists($file)) {
                      $data = json_decode(file_get_contents($file), true);
                      if ($data['enable_limit']) {
                          echo 'checked';
                      }
                  }
                  ?>>
                  <br><br>
                  <button type="submit" class="btn btn-success">UBAH</button>
              </form>

   
                <?php
                // Menampilkan status batas jam kerja saat ini
                if (file_exists($file)) {
                    echo "Status: " . ($data['enable_limit'] ? 'Aktif' : 'Tidak') . "<br>";
                } else {
                    echo "Belum ada pengaturan batas jam kerja yang disimpan.";
                }
                ?>

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

        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
        <script> new DataTable('table.display');</script>

    <!-- Template Javascript -->
    <script src="../../assets/js/main.js"></script>

</body>

</html>