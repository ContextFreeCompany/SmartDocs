<?php

class TemplateDatabase
{
	public function insert_template($template, $connection) 
	{
		$template_coll = $connection->templates;
		return $template_coll->insert($template->as_array());

	}
}
?>