<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jadwal Matkul Baru</title>
</head>

<body>
    <h1>Tambah Jadwal Matkul Baru</h1>
    <table>
          <form action="<?php echo base_url('web/simpanjadwal') ?>" method="post">
       <tr>
               <td> <label for="idjadwal">Id Jadwal</label></td>
                <td><input type="number" id="idjadwal" name="idjadwal" placeholder="Masukan Id Jadwal" required></td>
</tr>
<tr>
                <td><label for="hari">Hari</label></td>
                <td><input type="text" id="hari" name="hari" placeholder="Masukan Hari" required></td>
</tr>
<tr>
                <td><label for="kelas">Kelas</label></td>
                <td><input type="text" id="kelas" name="kelas" placeholder="Masukan Kelas" required></td>
</tr>
<tr>
                <td><label for="matakuliah">Mata Kuliah</label></td>
                <td><input type="text" id="matakuliah" name="matakuliah" placeholder="Masukan Mata Kuliah" required></td>
</tr>
<tr>
                <td><label for="namadosen">Nama Dosen</label></td>
                <td><input type="text" id="namadosen" name="namadosen" placeholder="Masukan Nama Dosen" required></td>
</tr>
<tr>
<td><label for="jammasuk">Jam Masuk</label></td>
                <td><input type="time" id="jammasuk" name="jammasuk" placeholder="Masukan Id Jam Masuk" required></td>
</tr>
<tr>
                <td><label for="jamkeluar">Jam Keluar</label></td>
                <td><input type="time" id="jamkeluar" name="jamkeluar" placeholder="Masukan Id Jam Keluar" required></td>
</tr>
<tr>
<td><button type="submit" class="btn btn-primary">Simpan</button></td>
</tr>
</table>
   <br>
   <br>
   <button><a href="<?php echo base_url().'index.php/web/jadwal' ?>">Kembali Ke Jadwal Matkul</a></button>
</form>
  
</body>

</html>