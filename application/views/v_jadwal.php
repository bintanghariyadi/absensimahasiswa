<section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Jadwal Mata Kuliah</h2>
          </div>
          <div class="main-button">
	<div class="scroll-to-section"><a href="<?php echo base_url('/web/tambahjadwal')  ?>">Tambah Jadwal</a></div>
        </div>
        <br>
        <br>
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Idjadwal</th>
                  <th>Hari</th>
                  <th>Kelas</th>
                  <th>Mata Kuliah</th>
                  <th>Nama Dosen</th>
                  <th>Jam Masuk</th>
                  <th>Jam Keluar</th>
                  <th>Action<th>
</tr>
</thead>
<tbody>
<?php foreach($jadwal as $jdw): { ?>
  <tr>
    <td><?php echo $jdw->idjadwal; ?></td>
    <td><?php echo $jdw->hari; ?></td>
    <td><?php echo $jdw->kelas; ?></td>
    <td><?php echo $jdw->matakuliah; ?></td>
    <td><?php echo $jdw->namadosen; ?></td>
    <td><?php echo $jdw->jammasuk; ?></td>
    <td><?php echo $jdw->jamkeluar; ?></td>
<td><a href="<?php echo base_url('/web/editjadwal')  ?>/<?php echo $jdw->idjadwal ?>">Edit</a> | <a href="<?php echo base_url('/web/fungsideletejadwal')  ?>/<?php echo $jdw->idjadwal ?>">hapus</a></td>
    </tr>
</tbody>
<?php } endforeach; ?>
</table>
        </div>
        
      </div>
    </div>
  </section>