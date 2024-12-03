<section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Data Mahasiswa</h2>
          </div>
          
        </div>
  <div class="main-button">
	<div class="scroll-to-section"><a href="<?php echo base_url('/web/tambahmahasiswa')  ?>">Tambah Mahasiswa</a></div>
        </div>
       <p></p>
       <p></p>
       <p></p>
        <div class="customer-container">
        <?php foreach($mahasiswa as $mhs): ?>
          <div class="customer-item">
          <img src="<?php echo base_url('assets/images/upload/' . $mhs->gambarmahasiswa); ?>">
                    <h4><?php echo $mhs->namamahasiswa; ?></h4>
                    <p><?php echo $mhs->nim; ?></p>
                    <p><?php echo $mhs->kelas; ?></p>
                    <p><?php echo $mhs->jurusan; ?></p>
                    <br>
                    <button class="btn-detail"><a href="<?php echo base_url('/web/editmahasiswa')  ?>/<?php echo $mhs->nim ?>">Edit Mahasiswa</a></button>
                    <br>
                    <br>
                    <button class="btn-buy"><a href="<?php echo base_url('/web/fungsideletemahasiswa')  ?>/<?php echo $mhs->nim ?>">Hapus Mahasiswa</a></button>
              
            
              
                
          </div>
          <?php endforeach; ?>   
        </div>
       
      </div>
    </div>
    
  </section>
  
  