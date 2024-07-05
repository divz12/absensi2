<?php
session_start();
if (!isset($_SESSION['log']) || $_SESSION['role'] != 'admin') {
    header('Location: ../login.php');
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Absensi - Siswa</title>
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
                <h1 class="mt-2">Data Siswa</h1>
                <div class="row">
                    <div class="col-sm-12 ">
                    <div class="bg-secondary text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                        
                        <a href="tambah-siswa.php" class="btn btn-md btn-success" style="margin-bottom: 15px"><i class="fa fa-solid fa-user-plus mr-4"></i> TAMBAH DATA </a>
                        
                        </div>
                        <table id="" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>No Kartu</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                                include('../../koneksi.php');
                                $no = 1;
                                $query = mysqli_query($connection,"SELECT tbl_siswa.*, tbl_kelas.nama_kelas, tbl_jurusan.nama_jurusan FROM tbl_siswa 
                                                                    JOIN tbl_kelas ON tbl_siswa.kelas_id = tbl_kelas.id 
                                                                    JOIN tbl_jurusan ON tbl_siswa.jurusan_id = tbl_jurusan.id");
                                while($row = mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row['no_kartu']; ?></td>
                                    <td><?php echo $row['nama_lengkap']; ?></td>
                                    <td><?php echo $row['nama_kelas']; ?></td>
                                    <td><?php echo $row['nama_jurusan']; ?></td>
                                        <td class="text-center">
                                            <a href="edit-siswa.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT <i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="hapus-siswa.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS <i class="fa-solid fa-circle-xmark"></i></a>
                                        </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </tbody>
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