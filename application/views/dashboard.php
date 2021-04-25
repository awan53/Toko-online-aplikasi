<div class="container-fluid" id="brg">

	<div id="demo" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="<?php echo base_url('assets/img/raos.jpg')?>" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="<?php echo base_url('assets/img/slider1.jpg')?>" class="d-block w-100" alt="...">
		    </div>
		     <div class="carousel-item">
		      <img src="<?php echo base_url('assets/img/cod1.jpg')?>" class="d-block w-100" alt="...">
		    </div>
		  </div>
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
	</div>

	<div class="row mt-4">
		<?php foreach ($barang as $brg) :?>
			<div class="card ml-3 mb-3" style="width: 16rem;">
			  <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
			 	<div class="card-body">
		     		<h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
		      		<small><?php echo $brg->keterangan ?></small><br>
			  		<span class="badge badge-pill badge-warning mb-3">Rp. <?php echo number_format($brg->harga, 0, ',','.')  ?></span><br>
		  		    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah Keranjang</div>'); ?>	  		 
		  		     <?php echo anchor('dashboard/detail/'.$brg->id_brg,'<div class="btn btn-sm btn-success">detail</div>'); ?>	  		 
		  		    
		  		</div>
			</div>
		<?php endforeach; ?>
		
	</div>
</div>


