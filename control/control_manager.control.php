<?php

include $_SERVER['DOCUMENT_ROOT'].'/ctx-smartdocs/control/template.control.php';
include $_SERVER['DOCUMENT_ROOT'].'/ctx-smartdocs/properties/database.properties.php';

class ControlManager {
	
	var $template_controller;
	var $mongo_connector;

	public function __construct() {
		$this->template_controller = new TemplateController();
		self::generate_mongo_db();
		
	}

	public function create_template($name,$fields)
	{
		
		return $this->template_controller->create_template($name,$fields,self::get_mongo_connector());
	}

	private function generate_mongo_db()
	{
	    $mongo_client = new MongoClient();
	    $this->mongo_connector = $mongo_client->smartdocsdev;
	}

	private function get_mongo_connector()
	{
		return $this->mongo_connector;
	}



}

?>