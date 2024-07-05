
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Absensi - Absen Siswa</title>
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



<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #292929;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1100px;
        }
        h4 {
            text-align: right;
            margin-bottom: 2px;
            margin-top: 10px;
            font-size: medium;
            color: #292929;
        }
        h3 {
            text-align: center;
            margin-bottom: 5px;
            font-size: large;
            color: #292929;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #292929;
        }
        th, td {
            padding: 8px;
            text-align: center;
            color: #292929;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
         a{
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
        .tengah{
        text-align: left;
        margin-bottom: 5px;
    }
    </style>


<div class="container" style="margin-top: 30px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <h3> REKAP PENGAJUAN </h3>
            </div>
            <h4><?php echo date('F Y'); ?></h4>

            <div class="card-body">
             <table class="table table-bordered" id="myTable">
                <thead>
                   <tr>
                    <th scope="col">NAMA LENGKAP</th>
                    <th scope="col">KELAS</th>
                    <th scope="col">JURUSAN</th>
                    <th scope="col">KETERANGAN</th>
                    <th scope="col">ALASAN</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">STATUS</th>
                  </tr>
                </thead>
                <tbody>
 <?php
 // koneksi database
include('../../koneksi.php');


 // menampilkan data pegawai
 $data = mysqli_query($connection,"SELECT * FROM tbl_pengajuan ");
 while($row = mysqli_fetch_array($data)){
 ?>




 <tr>
 <td><?php echo $row['nama_lengkap']; ?></td>
 <td><?php echo $row['nama_kelas']; ?></td>
 <td><?php echo $row['nama_jurusan']; ?></td>
 <td><?php echo $row['keterangan']; ?></td>
 <td><?php echo $row['detail']; ?></td>
 <td><img src='../masuk/<?php echo $row['foto']; ?>' width="100"></td>
 <td><?php echo $row['status']; ?></td>
 </tr>
 <?php
 }
 ?>
 </table><br>	<br>




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