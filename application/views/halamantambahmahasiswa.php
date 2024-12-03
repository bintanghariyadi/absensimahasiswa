<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h1>Tambah Mahasiswa Baru</h1>
    <table>
    <form action="<?php echo base_url('web/simpanmahasiswa') ?>" method="POST" enctype="multipart/form-data">
    <tr>
            <td><label for="nim">Nim</label></td>
            <td><input type="text" name="nim" required><td>
</tr>
<tr>
            
   <td><label for="namamahasiswa">Nama Mahasiswa</label></td>
   <td><input type="text" name="namamahasiswa" required></td>
</tr>
<tr>
   <td><label for="kelas">Kelas</label></td>
   <td><input type="text" name="kelas" required></td>
</tr>
<tr>
   <td><label for="jurusan">Jurusan</label></td>
   <td><input type="text" name="jurusan" required></td>
</tr>
<tr>
   <td><label for="gambarmahasiswa">Gambar Mahasiswa</label></td>
   <td><input type="file" name="gambarmahasiswa"></tr>
</tr>
<tr>
   <td><button type="submit">Tambah</button></td>
</tr>
   </table>
   <br>
   <br>
   <button><a href="<?php echo base_url().'index.php/web/datamahasiswa' ?>">Kembali Ke Data Mahasiswa</a></button>
</form>

</body>

</html>