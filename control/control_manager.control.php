<?php

include $_SERVER['DOCUMENT_ROOT'].'/ctx-smartdocs/control/template.control.php';
include $_SERVER['DOCUMENT_ROOT'].'/ctx-smartdocs/control/document.control.php';
include $_SERVER['DOCUMENT_ROOT'].'/ctx-smartdocs/properties/database.properties.php';

class ControlManager {
	
	var $template_controller;
	var $document_controller;
	var $mongo_connector;

	public function __construct() {
		$this->template_controller = new TemplateController();
		$this->document_controller = new DocumentController();
		self::generate_mongo_db();
		
	}

	public function create_template($name,$fields)
	{
		
		return $this->template_controller->create_template($name,$fields,self::get_mongo_connector());
	}

	public function create_document($name, $fields, $file) 
	{
		return $this->document_controller->create_document($name, $fields, $file, self::get_mongo_connector());
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
