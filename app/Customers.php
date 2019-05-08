<?php
namespace app;
use vendor\zframework\Model;

class Customers extends Model
{
	static $table = "customers";
	static $fields = ["id","NIK","nama","alamat","email","jenis_kelamin"];

	public function transactions()
	{
		return $this->hasMany(Transaksi::class,['customer_id' => 'id']);
	}
}
