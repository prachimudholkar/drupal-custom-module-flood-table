<?php

namespace  Druapl\custom_module\Database;

use Drupal\Core\Database\Database;
use Drupal\Core\Database\Connection;

class mydb {

  public function myMethod() {
    
    $database = \Drupal::database();
	$query = $database->query("SELECT * FROM flood");
	$result = $query->fetchAll();

	return $result;
  }

}