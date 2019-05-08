<?php set_page("Transaksi"); $this->load("partial.header") ?>
<div class="container">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-sm-12">
				<h2>Transaksi</h2>
				<a href="<?= base_url() ?>/admin/transaksi/create" class="btn btn-info"><i class="fa fa-plus"></i> Tambah</a>
				<p></p>
			</div>
			<div class="col-sm-12">
				<table class="table table-bordered">
					<tr>
						<td>No</td>
						<td>Kustomer</td>
						<td>Produk</td>
						<td>Jumlah</td>
						<td>Aksi</td>
					</tr>
					<?php if(empty($model)){ ?>
					<tr>
						<td colspan="5"><i>Tidak ada data</i></td>
					</tr>
					<?php } ?>

					<?php $no=1; foreach($model as $rs): ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $rs->customer()->nama ?></td>
						<td><?= $rs->produk()->nama ?></td>
						<td>
							<?= $rs->jumlah ?> x <?= number_format($rs->produk()->harga) ?><br>
							<i>Total : Rp. <?= number_format($rs->jumlah * $rs->produk()->harga) ?></i>
						</td>
						<td>
							<a href="<?= base_url() ?>/admin/transaksi/delete/<?=$rs->id?>" class="btn btn-sm btn-warning"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $this->load("partial.footer") ?>
