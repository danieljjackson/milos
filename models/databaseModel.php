<?php
	class DatabaseModel {
		private $dbConnection;

		// Constructor
		public function __construct($dbHost, $dbUser, $dbPassword, $dbName) {
			// Establish the connection to the database
			$this->dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
			$this->dbConnection->setAttributes(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// Print to the page if database connection is successful
			echo "** Database is connected **";
		}
	}