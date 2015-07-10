<?php

include $_SERVER['DOCUMENT_ROOT'].'/ctx-smartdocs/control/control_manager.control.php';


$name = $_POST['name'];
$fields = $_POST['fields'];

print_r($fields);

$cm = new ControlManager();
print_r($cm->create_template($name, $fields));



?>