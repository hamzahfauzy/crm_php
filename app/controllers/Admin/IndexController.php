<?php
namespace app\controllers\Admin;
use vendor\zframework\Controller;
use vendor\zframework\Session;
use vendor\zframework\util\Request;

class IndexController extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		return $this->view->render("admin.dashboard");
	}

	function tentang()
	{
		return $this->view->render("admin.tentang");
	}

}
