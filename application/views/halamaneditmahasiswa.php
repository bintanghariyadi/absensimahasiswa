<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit Data Mahasiswa</h1>
    <table>
        <form action="<?php echo base_url('web/fungsieditmahasiswa') ?>" method="post" enctype="multipart/form-data">
        <tr>
            <td>Nim</td>
            <td>:</td>
            <td><input type="text" name="nim" value="<?php echo $querymhsdetail->nim ?>" readonly />
        </tr>

        <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td><input type="text" name="namamahasiswa" value="<?php echo $querymhsdetail->namamahasiswa ?>" />
        </tr>

        <tr>
            <td>kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" value="<?php echo $querymhsdetail->kelas ?>" />
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan" value="<?php echo $querymhsdetail->jurusan ?>" />
        </tr>
        <tr>
            <td>Gambar Mahasiswa</td>
            <td>:</td>
            <td><input type="file" name="gambarmahasiswa" value="<?php echo $querymhsdetail->gambarmahasiswa ?>" />
        </tr>
        <tr>
            <td colspan="3"><button type="submit">Edit</button></td>
        </tr>
    </table>
    <br>
    <br>
    <button><a href="<?php echo base_url().'index.php/web/datamahasiswa' ?>">Kembali Ke Inventori</a></button>
    <br>
    <br>
    <button><a href="<?php echo base_url().'index.php/web' ?>">Kembali Ke Beranda</a></button>
</form>
</body>

</html>