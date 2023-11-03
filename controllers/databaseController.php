<?php
	require "models/databaseModel.php";

	class DatabaseController {
		private $dbModel;
		
		// Constructor
		public function __construct() {
			// Create a new instance of the Database Model to connect to the database and pass the database credentials
			$this->dbModel = new DatabaseModel("localhost", "username", "password", "miloDB");
		}

		// Test function for testing we can call functions from the controller
		public function test() {
			echo "<br> This is a test function";
		}
	}