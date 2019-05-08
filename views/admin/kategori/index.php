<?php set_page("Kategori"); $this->load("partial.header") ?>
<div class="container">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-sm-12">
				<h2>Kategori</h2>
				<a href="<?= base_url() ?>/admin/kategori/create" class="btn btn-info"><i class="fa fa-plus"></i> Tambah</a>
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
						<td><?= $rs->nama ?></td>
						<td>
							<a href="<?= base_url() ?>/admin/kategori/edit/<?=$rs->id?>" class="btn btn-sm btn-success"><i class="fa fa-pencil-alt"></i></a>
							<a href="<?= base_url() ?>/admin/kategori/delete/<?=$rs->id?>" class="btn btn-sm btn-warning"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $this->load("partial.footer") ?>
