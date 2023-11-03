<?php
	// Include the DatabaseController
	require "controllers/databaseController.php";

	// Create a new instance of the DatabaseController
	$databaseController = new DatabaseController();

	// Call the test method in the DatabaseController
	$databaseController->test();
	$databaseController->getUserData();
