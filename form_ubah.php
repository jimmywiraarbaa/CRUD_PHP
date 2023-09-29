<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Simpan</title>
</head>

<body>
    <h1>Form Tambah Data Siswa</h1>
    <?php 
    include "koneksi.php";
    $nis = $_GET['nis'];
    $query = "Select * from siswa where nis='".$nis."'";
    $sql = mysqli_query($connect,$query);
    $data = mysqli_fetch_array($sql);
    ?>
    <form method="post" action="proses_ubah.php?nis=<?php echo $nis;?>" enctype="multipart/form-data">
        <table cellpadding="8">
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <?php 
                    if ($data['jenis_kelamin'] == "Laki-Laki") {
                        echo "<input type='radio' name='jenis_kelamin' value='Laki-Laki' checked='checked'>Laki-Laki";
                        echo "<input type='radio' name='jenis_kelamin' value='Perempuan'>Perempuan";
                    } else {
                        echo "<input type='radio' name='jenis_kelamin' value='Laki-Laki'>Laki-Laki";
                        echo "<input type='radio' name='jenis_kelamin' value='Perempuan' checked='checked'>Perempuan";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Telefon</td>
                <td><input type="text" name="telp" value="<?php echo $data['telp'];?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"><?php echo $data['alamat'];?></textarea></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>
                    <input type="checkbox" name="ubah_foto" value="true">Ceklis Jika Ingin Mengubah Foto <br>
                    <input type="file" name="foto">
                </td>
            </tr>
        </table>
        <hr>
        <input type="submit" value="simpan">
        <a href="index.php"><input type="button" value="Batal"></a>
    </form>
</body>

</html>