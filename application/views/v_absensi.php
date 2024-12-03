<section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Absensi Mahasiswa</h2>
          </div>
          <div class="main-button">
	<div class="scroll-to-section"><a href="<?php echo base_url('/web/tambahabsensi')  ?>">Tambah Absensi</a></div>
        </div>
        <br>
        <br>
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id Absensi</th>
                  <th>Id Jadwal</th>
                  <th>Nim</th>
                  <th>Nama Mahasiswa</th>
                  <th>Hari</th>
                  <th>Kelas</th>
                  <th>Jam Masuk</th>
                  <th>Jam Keluar</th>
                  <th>Mata Kuliah</th>
                  <th>Nama Dosen</th>
                  <th>Status</th>
                  <th>Action<th>
</tr>
</thead>
<tbody>
<?php foreach($absensi as $abs): { ?>
  <tr>
    <td><?php echo $abs->idabsensi; ?></td>
    <td><?php echo $abs->idjadwal; ?></td>
    <td><?php echo $abs->nim; ?></td>
    <td><?php echo $abs->namamahasiswa; ?></td>
    <td><?php echo $abs->hari; ?></td>
    <td><?php echo $abs->kelas; ?></td>
    <td><?php echo $abs->jammasuk; ?></td>
    <td><?php echo $abs->jamkeluar; ?></td>
    <td><?php echo $abs->matakuliah; ?></td>
    <td><?php echo $abs->namadosen; ?></td>
    <td><?php echo $abs->status; ?></td>
<td><a href="<?php echo base_url('/web/fungsideleteabsensi')  ?>/<?php echo $abs->idabsensi ?>">hapus</a></td>
    </tr>
</tbody>
<?php } endforeach; ?>
</table>
        </div>
        
      </div>
    </div>
  </section>