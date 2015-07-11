<?php

include $_SERVER['DOCUMENT_ROOT'].'/ctx-smartdocs/control/control_manager.control.php';

$name = $_POST['name'];
$fields = $_POST['fields'];
$file = $_POST['file'];

$cm = new ControlManager();
$cm->create_document($name, $fields, $file);

// (new ControlManager())->create_template($name, $fields);

echo 'Uhull! Document criado! #sqn';
