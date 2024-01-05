<?php
include_once 'includes/data.php';
$action = $_POST['action'] ?? '';
if (!$connection) {
	throw new Exception("Cannot connect to the database");
} else {
	if (!$action) {
		header("Location: index.php");
		die();
	} else {
		// insert record

		if ("add" === $action) {
			# code...
			$task = $_POST["task"] ?? '';
			$date = $_POST["date"] ?? '';

			if (!empty($task) && !empty($date)) {
				# code...
				$query_insert_todo = "INSERT INTO " . DB_TABLE . " (task, date) VALUES ('$task', '$date')";
				// Check for errors in the query execution
				$InsertData = mysqli_query($connection, $query_insert_todo);

				if (!$InsertData) {
					throw new Exception("Error: " . mysqli_error($connection));
				} else {
					header("Location: index.php?added=true?ad={$date}");
				}
			}
		} elseif ("status" === $action) {
			$status = $_POST["status"] ?? '';
			if (!empty($status)) {
				# code...
				$query_insert_todo = "UPDATE " . DB_TABLE . " SET complete=1  WHERE id={$status} LIMIT 1";
				// Check for errors in the query execution
				$InsertData = mysqli_query($connection, $query_insert_todo);

				if (!$InsertData) {
					throw new Exception("Error: " . mysqli_error($connection));
				} else {
					header("Location: index.php");
				}
			}
		} elseif ("delete" === $action) {
			$delete = $_POST["delete"] ?? '';
			if (!empty($delete)) {
				# code...
				$query_delete_todo = "DELETE FROM " . DB_TABLE . " WHERE id={$delete} LIMIT 1"; // Fix typo here
				// Check for errors in the query execution
				$DeleteData = mysqli_query($connection, $query_delete_todo);

				if (!$DeleteData) {
					throw new Exception("Error: " . mysqli_error($connection));
				} else {
					header("Location: index.php");
				}
			}
		}

		//UPDATE DATA IN MYSQL TABLE
		// "UPDATE TABLE-NAME SET ROW ITEM= VALUE NAME WHERE {ID} LIMIT 1"
		//DELETE
		// "DELETE FROM TABLE-NEME WHRE {ID} LIMIT 1";
	}
}

// close mysqli
mysqli_close($connection);
