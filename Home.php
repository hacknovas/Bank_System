<html lang="en">

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
		crossorigin="anonymous"></script>
	<title>Basic Banking System</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="Home.php">GRIP Bank</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link active" aria-current="page" href="Home.php">Dashboard</a>
					<a class="nav-link" href="T_history.php">Transaction History</a>
					<a class="nav-link" href="UserList.php">Users</a>
				</div>
			</div>
		</div>
	</nav>
	<br><br>

	<div>
		<div class="card text-center">
			<div class="card-header">
			</div>
			<div class="card-body">
				<h5 class="card-title">Users Details</h5>
				<p class="card-text">All Users Registered with this bank.</p>
				<a href="UserList.php" class="btn btn-primary">See Here</a>
			</div>
		</div>
		<br>
		<div class="card text-center">
			<div class="card-header">
			</div>
			<div class="card-body">
				<h5 class="card-title">Transaction History</h5>
				<p class="card-text">All Trasaction Made With Banks.</p>
				<a href="T_history.php" class="btn btn-primary">See Here</a>
			</div>
		</div>
	</div>

	<footer class="bg-light text-center text-dark fixed-bottom" style="background-color: #21081a;">
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2022 Copyright:
			<a class="text-dark" href="Home.php">Our Site</a>
			<h4>creatives.doni@gmail.com</h4>
		</div>
	</footer>

</body>

</html>