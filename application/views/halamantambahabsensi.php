<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Absensi Baru</title>
</head>

<body>
    <h1>Tambah Absensi Baru</h1>
    <table>
          <form action="<?php echo base_url('web/simpanabsensi') ?>" method="post" class="form-jadwal">
           <tr>
                <td><label for="idabsensi">Id Absensi</label></td>
                <td><input type="number" class="form-control" id="idabsensi" name="idabsensi" placeholder="Masukan Id Absensi" required></td>
</tr>
<tr>
<td><label for="nim">Pilih NIM:</label></td>
<td><select name="nim" id="nim" required>
  <option value="">-- Pilih NIM --</option></td>
</select>
</tr>
<tr>
  <td><label for="namamahasiswa">Nama Mahasiswa:</label></td>
<td><input type="text" name="namamahasiswa" id="namamahasiswa" readonly></td>
  <tr>
<td><label for="idjadwal">Id Jadwal:</label></td>
  <td><input type="number" name="idjadwal" id="idjadwal" readonly></td>
<tr>

  <td><label for="hari">Hari:</label></td>
  <td><input type="text" name="hari" id="hari" readonly></td>
</tr>
<tr>
  <td><label for="kelas">Kelas:</label></td>
  <td><input type="text" name="kelas" id="kelas" readonly></td>
  </tr>
  <tr>
 <div id="jam_masuk_keluar" style="display: none;">
  <td><label for="jammasuk">Jam Masuk:</label></td>
  <td><input type="time" name="jammasuk" id="jammasuk"></td>
  <td><label for="jamkeluar">Jam Keluar:</label></td>
  <td><input type="time" name="jamkeluar" id="jamkeluar"></td>
</div>
</tr>
  <tr>
  <td><label for="matakuliah">Mata Kuliah:</label></td>
  <td><input type="text" name="matakuliah" id="matakuliah" readonly></td>
</tr>
<tr>
  <td><label for="namadosen">Nama Dosen:</label></td>
  <td><input type="text" name="namadosen" id="namadosen" readonly></td>
</tr>
<br>
<tr>
  <td><label for="status">Status Kehadiran:</label></td>
 <td><select name="status" id="status" required>
    <option value="">Pilih Status</option>
    <option value="Hadir">Hadir</option>
    <option value="Tidak Hadir">Tidak Hadir</option></td>
</select>
</tr>
<br>

<tr>
<td><button type="submit" class="btn btn-primary">Simpan</button></td>
</tr>
</table>
<br>
   <br>
   <button><a href="<?php echo base_url().'index.php/web/absensi' ?>">Kembali Ke Absensi</a></button>
</form>



<script>
   document.getElementById('status').addEventListener('change', function () {
    var status = this.value;
    var jammasukkeluardiv = document.getElementById('jam_masuk_keluar');

if (status === 'Hadir') {
  jammasukkeluardiv.style.display = 'block';
}else{
  jammasukkeluardiv.style.display = 'none';
}

   });
  </script>






<script>

window.onload = function() {
    fetch('<?php echo base_url('web/getnimdrop') ?>')
    .then(response => response.json())
    .then(data => {
      const nimDropdown = document.getElementById('nim')
      data.forEach(item => {
        let option = document.createElement('option');
        option.value = item.nim;
        option.textContent = item.nim;
        nimDropdown.appendChild(option);
      });
    })
    .catch(error => console.error('Error:', error));


  };









  document.getElementById('nim').addEventListener('change', function () {
const nim = this.value;

fetch(`<?php echo base_url('web/get_mahasiswa') ?>?nim=${nim}`)
.then(response => response.json())
.then(data => {
  if (data.error) {
    alert(data.error);
  }else{
    document.getElementById('idjadwal').value = data.idjadwal || '';
    document.getElementById('namamahasiswa').value = data.namamahasiswa || '';
    document.getElementById('kelas').value = data.kelas || '';
    document.getElementById('hari').value = data.hari || '';
    document.getElementById('jammasuk').value = data.jammasuk || '';
    document.getElementById('jamkeluar').value = data.jamkeluar || '';
    document.getElementById('matakuliah').value = data.matakuliah || '';
    document.getElementById('namadosen').value = data.namadosen || '';


  

  }
})
.catch(error => console.error('Error:', error));
  });



  </script>
      </body>

</html>