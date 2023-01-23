<?php

namespace Drupal\custom_module;

public class connection() {

	public function mydb() {

		$server = 'localhost';
		$username = 'root';
		$password = '';
		$database = 'drupal8.9';

		$connection = mysql_connect($server, $username, $password);


		if(!$connection){
			die("Unable to connect the database : ",mysqli_error());
		}

		mysql_select_db($database);

		$result = mysql_query("SELECT * from flood");

	return print($result);

	}
}


?>




