<?php set_page("Customer"); $this->load("partial.header") ?>
<div class="container">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-sm-12">
				<h2>Kustomer</h2>
				<a href="<?= base_url() ?>/admin/customer/create" class="btn btn-info"><i class="fa fa-plus"></i> Tambah</a>
				<p></p>
			</div>
			<div class="col-sm-12">
				<table class="table table-bordered">
					<tr>
						<td>No</td>
						<td>Nama</td>
						<td>Aksi</td>
					</tr>
					<?php if(empty($model)){ ?>
					<tr>
						<td colspan="3"><i>Tidak ada data</i></td>
					</tr>
					<?php } ?>

					<?php $no=1; foreach($model as $rs): ?>
					<tr>
						<td><?= $no++ ?></td>
						<td>
							<?= $rs->nama ?><br>
							NIK : <i><?= $rs->NIK ?></i><br>
							E-Mail : <i class="text-danger"><?= $rs->email ?></i>
						</td>
						<td>
							<a href="<?= base_url() ?>/admin/customer/edit/<?=$rs->id?>" class="btn btn-sm btn-success"><i class="fa fa-pencil-alt"></i></a>
							<a href="<?= base_url() ?>/admin/customer/delete/<?=$rs->id?>" class="btn btn-sm btn-warning"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $this->load("partial.footer") ?>
