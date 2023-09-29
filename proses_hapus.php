<?php 
include "koneksi.php";
$nis = $_GET['nis'];
$query = "Select * from siswa where nis='".$nis."'";
$sql = mysqli_query($connect,$query);
$data = mysqli_fetch_array($sql);
if (is_file("images/".$data['foto']))
    unlink("images/".$data['foto']);
$query2 = "Delete from siswa where nis='".$data['nis']."'";
$sql2 = mysqli_query($connect,$query2);
if ($sql2) {
    header("location:index.php");
} else {
    echo "Data Gagal dihapus. <a href='index.php'>Kembali</a>";
}

?>