<?php

class Template 
{

	var $name;
	var $fields;

	public function __construct($name, $fields)
	{
			self::set_name($name);
			self::set_fields($fields);
	}

	public function get_name()
	{
		return $this->name;
	}


	public function set_name($name) 
	{
		$this->name = $name;	
	}

	public function get_fields()
	{
		return $this->fields;	
	}

	public function set_fields($fields)
	{
		$this->fields = $fields;
	}

	public function get_field_value($field_name)
	{
		return $this->fields[$field_name];
	}

	public function as_array()
	{
		return array('name' => $this->name,
					 'fields' => $this->fields);
	}
}


?>