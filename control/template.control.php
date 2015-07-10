<?php

include $_SERVER['DOCUMENT_ROOT'].'/ctx-smartdocs/model/template.model.php';
include $_SERVER['DOCUMENT_ROOT'].'/ctx-smartdocs/database/template.database.php';

class TemplateController {
	
	var $template_db;

	public function __construct()
	{
		$this->template_db = new TemplateDatabase(); //TODO: integrate with andre code
	}

	public function create_template($name, $fields, $connection)
	{
		$template = new Template($name, $fields);
		//$insertion_status = $this->template_db->insert_template($template,$connection);
		var_dump($template);
		return $this->template_db->insert_template($template,$connection);
		//return self::get_status($insertion_status);
	}

	public function get_templates($connection)
	{
		return $this->template_db->get_templates($connection);
	}

	public function get_template_by_name($name, $connection)
	{
		return $this->template_db->get_template_by_name($name,$connection);
	}

	public function update_template_name($new_name, $connection) 
	{
		return $this->template_db->update_template_name($new_name, $connection);
	}

	public function remove_template($name, $connection)
	{
		return $this->template_db->remove_template($name, $connection);
	}

	private function get_status($insertion_status)
	{
		if(!is_null($insertion_status['err']))
		{
			return false;	
		}

		return true;
	}
}

?>