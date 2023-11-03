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

		public function getUserData() {
			// Database connection settings
			$host = 'localhost'; // Hostname where your MySQL server is running
			$dbname = 'miloDB'; // Your database name
			$username = 'username'; // Your MySQL username
			$password = 'password'; // Your MySQL password

			//try {

        // Create a PDO instance
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        // Set PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // SQL query to retrieve data from a table
        $sql = "SELECT * FROM Users";

        // Execute the query and fetch the results
        $stmt = $pdo->query($sql);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Loop through the results and display or process them
        foreach ($results as $row) {
            // Access individual columns like $row['column_name']
            echo "ID: " . $row['id'] . ", Name: " . $row['firstname'] . "<br>";
        }
				
				//$sql = "SELECT * FROM Users";
				//$statement = $this->dbModel->executeQuery($sql);

        // Execute the query and fetch the results
        //$stmt = $this->dbModel->executeQuery($sql);
        //$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

				//$results = $statement->fetchAll(PDO::FETCH_ASSOC);

				/*
				foreach ($results as $row) {
					echo "ID: " . $row['id'] . ", Name: " . $row['firstname'] . "<br>";
				}
				*/
			//}
		}
	}