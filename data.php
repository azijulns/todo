<?php
include_once 'config.php';

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$connection) {
	throw new Exception("Cannot connect to the database");
} else {
	echo "Database connected";

	// Insert a record
	$task = "Do something";
	$date = "2019-05-11";
	$query = "INSERT INTO tasks (task, date) VALUES ('$task', '$date')";

	// Check for errors in the query execution
	// $InsertData = mysqli_query($connection, $query);

	// if (!$InsertData) {
	// 	throw new Exception("Error: " . mysqli_error($connection));
	// } else {
	// 	echo "Record inserted successfully";
	// }

	//query the data
	$result = mysqli_query($connection, "SELECT * FROM tasks");
	while ($data = mysqli_fetch_assoc($result)) {
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}

	// close mysqli
	mysqli_close($connection);
}
