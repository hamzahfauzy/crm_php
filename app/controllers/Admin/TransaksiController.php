<?php
namespace app\controllers\Admin;
use vendor\zframework\Controller;
use vendor\zframework\Session;
use vendor\zframework\util\Request;
use app\Customers;
use app\Produk;
use app\Transaksi;

class TransaksiController extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->model = new Transaksi;
		$this->produk = new Produk;
		$this->customers = new Customers;
	}

	function index()
	{
		$model = $this->model->get();
		return $this->view->render("admin.transaksi.index")->with('model',$model);
	}

	function create()
	{
		$error = isset($_GET['error']) ? $_GET['error'] : false;
		$data["produk"] = $this->produk->get();
		$data["customers"] = $this->customers->get();
		$data["error"] = $error;
		return $this->view->render('admin.transaksi.create')->with($data);
	}

	function edit(Kategori $id)
	{
		$error = isset($_GET['error']) ? $_GET['error'] : false;
		$data["error"] = $error;
		$data["model"] = $id;
		$data["produk"] = $this->produk->get();
		$data["customers"] = $this->customers->get();
		return $this->view->render('admin.transaksi.edit')->with($data);
	}

	function insert(Request $request)
	{
		$param = (array) $request;
		$model = new Transaksi;
		$model->save($param);

		$this->redirect()->url('/admin/transaksi');
		return;
	}

	function update(Request $request)
	{
		$model = $this->model->where("id",$request->id)->first();
		$param = (array) $request;
		if($model->save($param))
			$this->redirect()->url("/admin/transaksi");
		return;
	}

	function delete($id)
	{
		Transaksi::delete($id);
		$this->redirect()->url("/admin/transaksi");
		return;
	}

}
