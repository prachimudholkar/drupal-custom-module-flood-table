<?php

namespace Drupal\custom_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Drupal\Core\Database\Connection;
use Drupal\Core\Link;
use Drupal\Core\Url;

class CustomController extends ControllerBase {

  public function content() {

    #$database = \Drupal::database();
	$database = \Drupal::service('database');
	$query = $database->query("SELECT * FROM flood");
	$result = $query->fetchAll();

	$rows = array();

	foreach ($result as $value=> $data) {
		 $rows[] = array(
        'data' => array($data->fid, $data->event, $data->identifier, $data->timestamp, $data->expiration));
	}
	
	$header = array('fid', 'event', 'identifier', 'timestamp', 'expiration');
    $output = array(
      '#type' => 'table',    
      '#header' => $header,
      '#rows' => $rows
    );


	return $output;
  }

}


 // return [
 //      '#type' => 'markup',
 //      '#markup' => $this->t('Hello, World!'),
 //    ];