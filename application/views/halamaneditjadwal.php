<section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Jadwal Mata Kuliah</h2>
          </div>
          <form action="<?php echo base_url('web/fungsieditjadwal') ?>" method="post" class="form-jadwal">
            <div class="form-group">
                <label for="idjadwal">Id Jadwal</label>
                <input type="number" class="form-control" name="idjadwal" value="<?php echo $queryjdwdetail->idjadwal ?>" readonly>
</div>
<div class="form-group">
                <label for="hari">Hari</label>
                <input type="text" class="form-control" name="hari" placeholder="Masukan Hari" value="<?php echo $queryjdwdetail->hari ?>" required>
</div>
<div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control" name="kelas" placeholder="Masukan Kelas" value="<?php echo $queryjdwdetail->kelas ?>" required>
</div>
<div class="form-group">
                <label for="matakuliah">Mata Kuliah</label>
                <input type="text" class="form-control" name="matakuliah" placeholder="Masukan Mata Kuliah" value="<?php echo $queryjdwdetail->matakuliah ?>" required>
</div>
<div class="form-group">
                <label for="namadosen">Nama Dosen</label>
                <input type="text" class="form-control" name="namadosen" placeholder="Masukan Nama Dosen" value="<?php echo $queryjdwdetail->namadosen ?>" required>
</div>
<div class="form-group">
                <label for="jammasuk">Jam Masuk</label>
                <input type="time" class="form-control" name="jammasuk" placeholder="Masukan Id Jam Masuk" value="<?php echo $queryjdwdetail->jammasuk ?>" required>
</div>
<div class="form-group">
                <label for="jamkeluar">Jam Keluar</label>
                <input type="time" class="form-control" name="jamkeluar" placeholder="Masukan Id Jam Keluar" value="<?php echo $queryjdwdetail->jamkeluar ?>" required>
</div>
<button type="submit" class="btn btn-primary">Simpan</button>

</form>
        </div>
        
       
      </div>
    </div>
  </section>