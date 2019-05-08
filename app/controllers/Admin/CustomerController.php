<?php
namespace app\controllers\Admin;
use vendor\zframework\Controller;
use vendor\zframework\Session;
use vendor\zframework\util\Request;
use app\Customers;

class CustomerController extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->model = new Customers;
	}

	function index()
	{
		$model = $this->model->get();
		return $this->view->render("admin.kustomer.index")->with('model',$model);
	}

	function create()
	{
		$error = isset($_GET['error']) ? $_GET['error'] : false;
		return $this->view->render('admin.kustomer.create')->with('error',$error);
	}

	function edit(Customers $id)
	{
		$error = isset($_GET['error']) ? $_GET['error'] : false;
		$data["error"] = $error;
		$data["model"] = $id;
		return $this->view->render('admin.kustomer.edit')->with($data);
	}

	function insert(Request $request)
	{
		$model = $this->model->where('NIK',$request->NIK)->first();
		if(!empty($model))
		{
			$this->redirect()->url("/admin/customer/create?error=exists");
			return;
		}

		$param = (array) $request;
		$model = new Customers;
		$model->save($param);

		$this->redirect()->url('/admin/customer');
		return;
	}

	function update(Request $request)
	{
		$model = $this->model->where("NIK",$request->NIK)->first();
		if(!empty($model) && $model->id != $request->id)
		{
			$this->redirect()->url("/admin/customer/edit/".$request->id."?error=exists");
			return;
		}

		$model = $this->model->where("id",$request->id)->first();
		$param = (array) $request;
		if($model->save($param))
			$this->redirect()->url("/admin/customer");
		return;
	}

	function delete($id)
	{
		Kategori::delete($id);
		$this->redirect()->url("/admin/customer");
		return;
	}

}
