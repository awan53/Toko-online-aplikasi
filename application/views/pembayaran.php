<div class="container-fluid">
	<div class="rom">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
					$grand_total = 0;
					if ($keranjang = $this->cart->contents())
					 {
						foreach ($keranjang as $item)
						{
							$grand_total = $grand_total + $item['subtotal'];
						}
						echo " <h4>Total Belanja Anda Adalah Rp. ".number_format($grand_total, 0, ',','.');
					 
				?>
			</div><br><br>
			<h4>Input Pengiriman dan pembayaran</h4>

			<form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
				<div class="form-group">
					<Label>Nama</Label>
					<input type="text" name="nama" placeholder="Nama Anda" class=" form-control">
				</div>

				<div class="form-group">
					<Label>Alamat</Label>
					<input type="text" name="alamat" placeholder="Alamat Anda " class=" form-control">
				</div>

				<div class="form-group">
					<Label>No Handphone</Label>
					<input type="text" name="no_hp" placeholder="No Handphone Anda " class=" form-control">
				</div>

				<div class="form-group">
					<Label>Jasa Pengiriman</Label>
					<select class=" form-control">
						<option value="">JNE</option>
						<option value="">TIKI</option>
						<option value="">Ninja</option>
						<option value="">POS INDONESIA</option>
						<option value="">Gojek</option>
						<option value="">Grab</option>
					</select>
				</div>

				<div class="form-group">
					<Label>PEMBAYARAN</Label>
					<select class=" form-control">
						<option value="">BRI - xxxxxxxxx </option>
						<option value="">BNI - xxxxxxxxx</option>
						<option value="">BCA - xxxxxxxxx </option>
						<option value="">Mandiri -  xxxxxxxxx</option>
					</select>
				</div>

				<button type="submit"  class="btn btn-sm btn-primary ml-3">Bayar</button>
			</form>
			<?php 
			} else{
				echo "<h4>keranjang Anda Masih Kosong";
			}
			 ?>

		</div>
		<div class="col-md-2"></div>
	</div>
</div>