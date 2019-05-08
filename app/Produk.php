<?php
namespace app;
use vendor\zframework\Model;

class Produk extends Model
{
	static $table = "produk";
	static $fields = ["id","kategori_id","nama","deskripsi","harga","stok","foto"];

	function kategori()
	{
		return $this->hasOne(Kategori::class,['id'=>'kategori_id']);
	}
}
