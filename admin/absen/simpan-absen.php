
<?php

date_default_timezone_set('Asia/Jakarta');
echo date('Y-m-d H:i:s');

//include koneksi database
include('../../koneksi.php');


$no_kartu = $_POST['no_kartu'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_kelas = $_POST['nama_kelas'];
$nama_jurusan = $_POST['nama_jurusan'];

$foto_name = $_FILES['foto']['name'];
$foto_tmp = $_FILES['foto']['tmp_name'];
$foto_path = "uploads/" . $foto_name;

$tanggal = date('Y-m-d');


$masuk = date("H:i:s");


// Simpan foto ke folder uploads
move_uploaded_file($foto_tmp, $foto_path);

//query insert data ke dalam database
$query = "INSERT INTO tbl_rekap (no_kartu, nama_lengkap, nama_kelas, nama_jurusan, keterangan, foto, tanggal, masuk) VALUES ('$no_kartu', '$nama_lengkap', '$nama_kelas', '$nama_jurusan', 'hadir', '$foto_path', '$tanggal', '$masuk')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}


?>