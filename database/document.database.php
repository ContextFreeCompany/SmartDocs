<?php

class DocumentDatabase {
  public function insert_document($document, $connection) {
    $document_coll = $connection->documents;
    return $document_coll->insert($document->as_array());
  }
}

?>
