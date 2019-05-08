<?php set_page("Kategori"); $this->load("partial.header") ?>
<div class="container">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-sm-12">
				<h2>Tambah Kategori</h2>
				<?php if ($error) { ?>
				<div class="alert alert-danger" role="alert">
					Kategori sudah ada.
				</div>						
				<?php } ?>
			</div>
			<div class="col-sm-12">
				<form method="post" action="<?= base_url() ?>/admin/kategori/insert">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control" placeholder="Nama" required="">
						<span class="form-error nama">Nama tidak boleh kosong</span>
					</div>
					<button class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->load("partial.footer") ?>
