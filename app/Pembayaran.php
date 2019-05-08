<?php
namespace app;
use vendor\zframework\Model;

class Pembayaran extends Model
{
	static $table = "pembayaran";
	static $fields = ["id","transaksi_id","jumlah","status"];

	function transaksi()
	{
		return $this->hasOne(Transaksi::class,['id'=>'transaksi_id']);
	}
}
