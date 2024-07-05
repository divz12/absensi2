<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Absensi - Pengajuan Siswa</title>
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
    <div class="container-fluid pt-4 px-4" style="margin-top: 50px;">
      <div class="row">
        <div class="col-sm-8 offset-md-2">
          <div class="bg-secondary rounded p-4" >
            <h5>PENGAJUAN SISWA</h5>
            <div class="d-flex align-items-center justify-content-between mb-4">
            </div>
              <form action="../pengajuan/konfirmasi-pengajuan.php" method="POST">
                
                <div class="form-group">
                  <label>NO KARTU</label>
                  <input type="text" name="no_kartu" placeholder="Silahkan Tap Kartu" class="form-control">
                </div>
                <br>
                

                <button type="submit" class="btn btn-success">KIRIM</button>

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