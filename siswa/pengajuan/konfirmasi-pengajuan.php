<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Absensi - Konfirmasi Pengajuan Siswa</title>
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
  
include '../../koneksi.php';

$no_kartu = $_POST['no_kartu'];

$query = "SELECT tbl_siswa.*, tbl_kelas.nama_kelas, tbl_jurusan.nama_jurusan FROM tbl_siswa 
            JOIN tbl_kelas ON tbl_siswa.kelas_id = tbl_kelas.id 
            JOIN tbl_jurusan ON tbl_siswa.jurusan_id = tbl_jurusan.id
            WHERE no_kartu = $no_kartu ";


$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);


    ?>

    <div class="container-fluid pt-4 px-4" style="margin-top: 50px;">
      <div class="row">
        <div class="col-sm-8 offset-md-2">
          <div class="bg-secondary rounded p-4" >
            <h5>KONFIRMASI PENGAJUAN</h5>
            <div class="d-flex align-items-center justify-content-between mb-4">
            </div>
              <form action="simpan-pengajuan.php" method="POST" enctype="multipart/form-data">
                
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
                  <label>Keterangan</label> 
                  <br>
                  <select name="keterangan" class="form-control">
                    <option value="sakit">Sakit</option>
                    <option value="izin">Izin</option>
                  </select>
                </div>
                <br>

                <div class="form-group">
                  <label>Alasan</label>
                  <textarea class="form-control" name="detail" placeholder="Masukkan Alasan Pengajuan" rows="2"></textarea>
                </div>
                <br>

                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" accept="image/*" capture="camera" name="foto"><br><br>
                </div>
                <br>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>