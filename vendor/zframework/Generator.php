<?php 
namespace vendor\zframework;

class Generator
{
	public $file_contents;
	public $table_name;
	public $fields;

	function __construct($file)
	{
		if(!empty($file))
		{
			$this->file_contents = json_decode($file);
			$this->table_name = $this->file_contents->table_name;
			foreach ($this->file_contents->fields as $key => $value) {
				$this->fields .= '"'.$value->name.'"';
				if (next($this->file_contents->fields)==true) $this->fields .= ",";
			}
		}
	}

	function generateModel()
	{
		$file_template = file_get_contents("vendor/zframework/template/model.template");
		$file_template = str_replace("{{modelname}}", ucwords($this->table_name), $file_template);
		$file_template = str_replace("{{tablename}}", $this->table_name, $file_template);
		$file_template = str_replace("{{fields}}", $this->fields, $file_template);
		file_put_contents("app/".ucwords($this->table_name).".php", $file_template);
	}

	function generateController($controller_name)
	{
		$file_template = file_get_contents("vendor/zframework/template/controller.template");
		$delimiter = strstr($controller_name,"/");
		if($delimiter > -1)
		{
			$controller_name = explode("/", $controller_name);
			$name = end($controller_name);
			array_pop($controller_name);
			$namespace = implode("\\", $controller_name);
			$file_template = str_replace("{{controllername}}", $name, $file_template);
			$file_template = str_replace("{{namespace}}", "\\".$namespace, $file_template);
			$file = $namespace."/".$name;	
		}
		else
		{
			$name = $controller_name;
			$file_template = str_replace("{{controllername}}", $name, $file_template);
			$file_template = str_replace("{{namespace}}", "", $file_template);
			$file = $name;
		}
		
		file_put_contents("app/controllers/".$file.".php", $file_template);
	}
}