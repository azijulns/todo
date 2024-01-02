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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/public.css">
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
						<input id="taskInput" type="text" class="form-control" placeholder="Add your task ..." aria-label="Add your task" aria-describedby="button-addon2" />
						<button class="btn btn-outline-secondary" type="button" id="addTaskBtn">
							<i class="fa-solid fa-pencil"></i>
						</button>
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
						<tbody id="tasksBody"></tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript" src="assets/js/help.js"></script>
</body>

</html>