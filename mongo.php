<?php

$m = new MongoClient();
$db = $m->smartdocs;

$templates = $db->templates;
$documents = $db->documents;

$template = array("nome" => "Nome do template", 
                  "campos" => array("CPF" => array("tipo" => "string",
                                                   "obrigatorio?" => "sim"),
                                    "telefone" => array ("tipo" => "numero",
                                                         "obrigatorio?" => "sim")));

//print_r($template);
$templates->insert($template);

$document = array("nome" => "Nome do arquivo",
                  "arquivo" => "Aqui vai o arquivo 'puro'",
                  "template" => "ObjectId do template",
                  "campos" => array("CPF" => "12313921",
                                    "telefone" => 92312312));

//print_r($document);
$documents->insert($document);

$temps = $templates->find();
$docs = $documents->find();

foreach ($temps as $t) {
  echo '=]';
}

foreach ($docs as $d) {
  echo '=)';
}

echo "\n";

$grid = $db->getGridFS();
$fileId = $grid->storeFile('mongo.php');
