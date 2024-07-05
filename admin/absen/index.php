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
    <title>Absensi - Rekap Absen</title>
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
        <div class="col-sm-12 ">
          <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
              <h6 class="mb-0">Rekap Absen</h6>
              <a href="absen-manual.php" class="btn btn-md btn-success" style="margin-bottom: 15px"><i class="fa fa-solid fa-user-plus mr-4"></i> TAMBAH ABSEN </a>
            </div>
            <div class="menu-malasngoding">
                <li class="dropdown"><a href="" class="btn btn-info" >LAPORAN</a>
                <ul class="isi-dropdown">
                    <li><a href="../pilih/pilih-nama.php">No Kartu</a></li>
                    <li><a href="../pilih/pilih-kelas.php">Kelas</a></li>
                    <li><a href="../pilih/pilih-tanggal.php">Tanggal</a></li>
                </ul>
            </li>
          </div>
          <style>

          .menu-malasngoding ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
          }
        
          .menu-malasngoding > ul > li {
            float: left;

          }


          .menu-malasngoding li a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 8px 6px;
            text-decoration: none;
          }
        
          .menu-malasngoding li a:hover{
            background-color: #2525ff;
          }

            li.dropdown {
            display: inline-block;
                margin-left: 1000px;
            
          }

        
          .dropdown:hover .isi-dropdown {
            display: block;
          }
        
          .isi-dropdown a:hover {
            color: #fff !important;
          }
        
          .isi-dropdown {
            position: absolute;
            display: none;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            background-color: #f9f9f9;
                margin-left: 920px;
          }
        
          .isi-dropdown a {
            color: #3c3c3c !important;
          }
        
          .isi-dropdown a:hover {
            color: #232323 !important;
            background: #f3f3f3 !important;
          }

            .tengah{
                text-align: right;
                
            }
        </style>
             <div class="container"  style="margin-bottom: 15px"></div>
              <table id="" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NO. KARTU</th>
                    <th scope="col">NAMA LENGKAP</th>
                    <th scope="col">KELAS</th>
                    <th scope="col">JURUSAN</th>
                    <th scope="col">KETERANGAN</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">MASUK</th>
                    <th scope="col">KELUAR</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('../../koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM tbl_rekap");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['no_kartu'] ?></td>
                      <td><?php echo $row['nama_lengkap'] ?></td>
                      <td><?php echo $row['nama_kelas'] ?></td>
                      <td><?php echo $row['nama_jurusan'] ?></td>
                      <td><?php echo $row['keterangan'] ?></td>
                      <td><img src='../../siswa/masuk/<?php echo $row['foto']; ?>' width="100"></td>
                      <td><?php echo $row['tanggal'] ?></td>
                      <td><?php echo $row['masuk'] ?></td>
                      <td><?php echo $row['keluar'] ?></td>
                    <td class="text-center">
                        <a href="konfirmasi-pulang.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-light">PULANG <i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="hapus-absen.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS <i class="fa-solid fa-circle-xmark"></i></a>
                    </td>
                      </tr>
                <?php } ?>
                </tbody>
              </table>
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