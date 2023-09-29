<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Data Siswa</title>
</head>
<body>
    <h1>Form Input Data Siswa</h1>
    <a class="button" href="form_siswa.php">Tambah Data</a><br><br>
    <table border="2" width="auto">
        <tr>
            <th>NIS</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>TELEPON</th>
            <th>ALAMAT</th>
            <th>FOTO</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        include "koneksi.php";
        $query = "select *from siswa";
        $sql = mysqli_query($connect, $query);
        while ($data = mysqli_fetch_array($sql)) {
            echo "<tr>";
            echo "<td>".$data['nis']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['jenis_kelamin']."</td>";
            echo "<td>".$data['telp']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
            echo "<td><a href='form_ubah.php?nis=".$data['nis']."'>Ubah</a></td>";
            echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
        
    </table>

</body>

</html>