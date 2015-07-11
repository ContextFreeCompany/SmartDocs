<? php

include $_SERVER['DOCUMENT_ROOT'].'/ctx-smartdocs/model/document.model.php';
include $_SERVER['DOCUMENT_ROOT'].'/ctx-smartdocs/database/document.database.php';

class DocumentController {
  var $document_db;

  public function __construct() {
    $this->document_db = new DocumentDatabase();
  }

  public function create_document($name, $fields, $file) {
    $document = new Document($name, $fields, $file);
    return $this->document_db->insert_document($document, $connection);
  }

  public function get_documents($connection) {
    return $this->document_db->get_documents($connection);
  }

  public function get_document_by_name($name, $connection) {
    return $this->document_db->get_document_by_name($name, $connection);
  }

  public function update_document_name($new_name, $connection) {
    return $this->document_db->update_document_name($new_name, $connection);
  }

  public function remove_document($name, $connection) {
    return $this->document_db->remove_document($name, $connection);
  }

  private function get_status($insertion_status) {
    if(is_null($insertion_status['err'])) {
      return true;
    } else {
      return false;
    }
  }
}

?> 
