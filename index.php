<?php
include_once 'includes/data.php';
if (!$connection) {
	throw new Exception("Cannot connect to the database");
} else {
	//query the data
	$result = mysqli_query($connection, "SELECT * FROM tasks");

	// close mysqli
	// mysqli_close($connection);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="icon" type="image/x-icon" href="https://drive.google.com/uc?export=view&id=1Y1Ciw9ce2BWxAz7ySHeigZXsscOzJ7p5" />
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet" />
	<!-- font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">

</head>

<body>
	<div class="to-do-list">
		<div class="container d-flex justify-content-center align-items-center p-5">
			<div class="to-do-list-body position-relative d-flex flex-column bg-white rounded-5">
				<div class="dots position-absolute overflow-hidden">
					<div class="dot"></div>
				</div>
				<div class="to-do-list-header"></div>
				<div class="to-do-list-tasks p-5">
					<div class="title text-center">
						<h1 class="fw-bold">To-do list</h1>
						<p id="tasksInfo" class="fw-bold"></p>
					</div>
					<div class="input-group mb-3">
						<?php
						$added = $_GET["added"] ?? '';
						if ($added) {
							echo '<P>Task Successfully Added</P>';
						} ?>
						<form method="post" id="add_todo" action="tasks.php
						">
							<input id="taskInput" type="text" class="form-control" placeholder="Add your task ..." aria-label="Add your task" name="task" />
							<input type="datetime" class="form-control" placeholder="Date..." name="date" id="date">
							<input type="hidden" name="action" value="add">
							<button class="btn btn-outline-secondary" type="submit" id="addTaskBtn">
								<i class="fa-solid fa-pencil"></i>
							</button>
						</form>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>Num</th>
								<th class="w-50">Task</th>
								<th>Date</th>
								<th>Status</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody id="tasksBody">
							<?php
							if (mysqli_num_rows($result) == 0) {
								# code...
							?>
								<p>No task Found</p>
								<?php
							} else {
								while ($data = mysqli_fetch_assoc($result)) {
								?>

									<tr>
										<th class="
										<?php if ($data["complete"] == 1) {
											echo "wavy";
										} ?>"><?php echo $data["id"] ?></th>
										<th class="
										<?php if ($data["complete"] == 1) {
											echo "wavy";
										} ?>"><?php echo $data["task"] ?></th>
										<th class="task-date d-flex justify-content-center
										 <?php
											if ($data["complete"] == 1) {
												echo "wavy";
											} ?>"><?php echo $data["date"] ?></th>
										<th>
											<i data-id="<?php echo $data["id"] ?>" class="status-icone fa-regular fa-square-check
											<?php if ($data["complete"] == 1) {
												echo "active";
											} ?>"></i><i class=" fa-solid fa-square-check d-none"></i>
										</th>
										<th><i data-id="<?php echo $data["id"] ?>" class="delete-icone fa-solid fa-trash-can"></i></th>
									</tr>

							<?php
								}
							}

							?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
		<form method="post" id="status-form" action="tasks.php
						">
			<input type="hidden" name="status" id="status">
			<input type="hidden" name="action" value="status">

		</form>
		<form method="post" id="delete-form" action="tasks.php
						">
			<input type="hidden" name="delete" id="delete">
			<input type="hidden" name="action" value="delete">

		</form>
	</div>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/help.js"></script>
</body>

</html>