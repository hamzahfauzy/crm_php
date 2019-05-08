<?php set_page("Customer"); $this->load("partial.header") ?>
<div class="container">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-sm-12">
				<h2>Edit Kustomer</h2>
				<?php if ($error) { ?>
				<div class="alert alert-danger" role="alert">
					Kustomer sudah ada.
				</div>						
				<?php } ?>
			</div>
			<div class="col-sm-12">
				<form method="post" action="<?= base_url() ?>/admin/customer/update">
					<input type="hidden" name="id" value="<?= $model->id ?>">
					<div class="form-group">
						<label for="nik">NIK</label>
						<input type="text" name="nik" class="form-control" placeholder="NIK" required="" value="<?= $model->NIK ?>">
						<span class="form-error nik">NIK tidak boleh kosong</span>
					</div>

					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control" placeholder="Nama" required="" value="<?= $model->nama ?>">
						<span class="form-error nama">Nama tidak boleh kosong</span>
					</div>

					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" name="alamat" class="form-control" placeholder="Alamat" required="" value="<?= $model->alamat ?>">
						<span class="form-error alamat">Alamat tidak boleh kosong</span>
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" placeholder="Email" required="" value="<?= $model->email ?>">
						<span class="form-error email">Email tidak boleh kosong</span>
					</div>

					<div class="form-group">
						<label for="jenis_kelamin">Jenis Kelamin</label>
						<input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" required="" value="<?= $model->jenis_kelamin ?>">
						<span class="form-error jenis_kelamin">Jenis Kelamin tidak boleh kosong</span>
					</div>
					<button class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->load("partial.footer") ?>
