<?php
namespace app\controllers\Admin;
use vendor\zframework\Controller;
use vendor\zframework\Session;
use vendor\zframework\util\Request;
use app\Produk;
use app\Kategori;

class ProdukController extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->model = new Produk;
		$this->kategori = new Kategori;
	}

	function index()
	{
		$model = $this->model->get();
		return $this->view->render("admin.produk.index")->with('model',$model);
	}

	function create()
	{
		$error = isset($_GET['error']) ? $_GET['error'] : false;
		$data['kategori'] = $this->kategori->get();
		$data['error'] = $error;
		return $this->view->render('admin.produk.create')->with($data);
	}

	function edit(Produk $id)
	{
		$error = isset($_GET['error']) ? $_GET['error'] : false;
		$data["error"] = $error;
		$data["model"] = $id;
		$data['kategori'] = $this->kategori->get();
		return $this->view->render('admin.produk.edit')->with($data);
	}

	function insert(Request $request)
	{
		$model = $this->model->where('nama',$request->nama)->first();
		if(!empty($model))
		{
			$this->redirect()->url("/admin/produk/create?error=exists");
			return;
		}

		$param = (array) $request;
		$model = new Produk;
		$model->save($param);

		$this->redirect()->url('/admin/produk');
		return;
	}

	function update(Request $request)
	{
		$model = $this->model->where("nama",$request->nama)->first();
		if(!empty($model) && $model->id != $request->id)
		{
			$this->redirect()->url("/admin/produk/edit/".$request->id."?error=exists");
			return;
		}

		$model = $this->model->where("id",$request->id)->first();
		$param = (array) $request;
		if($model->save($param))
			$this->redirect()->url("/admin/produk");
		return;
	}

	function delete($id)
	{
		Kategori::delete($id);
		$this->redirect()->url("/admin/produk");
		return;
	}

}
