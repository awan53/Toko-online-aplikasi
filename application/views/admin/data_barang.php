<div class="container-fluid">
	<button class="btn btn-sm- btn-primary mb-3" data-toggle="modal" data-target="#data_barang" type="button"><i class="fa fa-plus fa-sm"></i> tambah barang </button>

	

	<br>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Keterangan</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stok</th>
			<th colspan="3">Aksi</th>
		</tr>

		<?php
		$no=1; 
		foreach ($barang as $brg ) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $brg->nama_brg ?></td>
				<td><?php echo $brg->keterangan ?></td>
				<td><?php echo $brg->katagori ?></td>
				<td><?php echo $brg->harga ?></td>
				<td><?php echo $brg->stok ?></td>
				<td>
          <?php echo anchor('admin/data_barang/detail/'.$brg->id_brg,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?>
          </div>
        </td>
				<td><?php echo anchor('admin/data_barang/edit/'.$brg->id_brg,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('admin/data_barang/hapus/'.$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>
		<?php endforeach ?>

	</table>	
</div>

<!-- Modal -->
<div class="modal fade" id="data_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Barang Dagang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_barang/tambah_aksi';?>" method = "post" enctype="multipart/form-data">
        	
        	<div class="form-group">
        		<label for="">Nama</label>
        		<input type="text" name="nama_brg" class="form-control">
        	</div>

        	<div class="form-group">
        		<label for="">Keterangan</label>
        		<input type="text" name="keterangan" class="form-control">
        	</div>

<!--
          <div class="form-group">
          <label>kategori</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="katagori" id="exampleRadios1" value="plastik" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Pelastik
                    </label>
               </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="katagori" id="exampleRadios2" value="bahan_kue">
                    <label class="form-check-label" for="exampleRadios2">
                      Bahan-Bahan Kue
                    </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="katagori" id="exampleRadios3" value="bumbu_masak">
                    <label class="form-check-label" for="exampleRadios3">
                      Bumbu-bumbu Masak
                    </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="katagori" id="exampleRadios2" value="kerupuk">
                    <label class="form-check-label" for="exampleRadios4">
                      Kerupuk
                    </label>
              </div>
        </div>

--> 

  	     <div class="form-group">
        		<label for="">kategori</label>
        		<select name="katagori" class="form-control">
            <option value="plastik">Plastik</option>  
            <option value="Bahan-bahan Kue">Bahan-bahan Kue</option>  
            <option value="Bumbu-bumbu Masak"> Bumbu-bumbu Masak  </option>
            <option value="kerupuk">Kerupuk</option>  
            </select>
        	</div>
    
	        	
	        <div class="form-group">
	        	<label for="">Harga</label>
	        	<input type="text" name="harga" class="form-control">
	        </div>

	        <div class="form-group">
        		<label for="">Stok</label>
        		<input type="text" name="stok" class="form-control">
        	</div>

        	<div class="form-group">
        		<label for="">Gambar</label><br>
        		<input type="file" name="gambar" class="form-control">
        	</div>
	    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

