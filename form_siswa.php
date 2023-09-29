<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Simpan</title>
</head>

<body>
    <h1>Form Tambah Data Siswa</h1>
    <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
        <table cellpadding="8">
            <tr>
                <td>Nis</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Telefon</td>
                <td><input type="text" name="telp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto"></td>
            </tr>
        </table>
        <hr>
        <input type="submit" value="simpan">
        <a href="index.php"><input type="button" value="batal"></a>
    </form>
</body>

</html>