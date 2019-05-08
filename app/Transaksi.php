<?php
namespace app;
use vendor\zframework\Model;

class Transaksi extends Model
{
	static $table = "transaksi";
	static $fields = ["id","produk_id","customer_id","jumlah","status"];

	function customer()
	{
		return $this->hasOne(Customers::class,['id'=>'customer_id']);
	}

	function produk()
	{
		return $this->hasOne(Produk::class,['id'=>'produk_id']);
	}

	function payments()
	{
		return $this->hasMany(Produk::class,['transaksi_id'=>'id']);
	}

	

}
