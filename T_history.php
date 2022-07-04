<!DOCTYPE html>
<html lang="en">

<head>
	<title>Transaction History</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="Home.html">GRIP Bank</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link active" aria-current="page" href="Home.html">Dashboard</a>
					<a class="nav-link" href="T_history.php">Transaction History</a>
					<a class="nav-link" href="UserList.php">Users</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="container">
		<h2 class="text-center pt-4"><b><i>Transaction History</i></b></h2><br>
		<div class="table-responsive-sm">
			<table class="table table-striped table-light">
				<thead>
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">Sender</th>
						<th class="text-center">Receiver</th>
						<th class="text-center">Amounts</th>
					</tr>
				</thead>
				<tbody>
					<?php

					include 'config.php';

					$sql = "select * from transaction";

					$query = mysqli_query($conn, $sql);

					while ($rows = mysqli_fetch_assoc($query)) {
					?>

						<tr>
							<td class="py-2"><?php echo $rows['sno']; ?></td>
							<td class="py-2"><?php echo $rows['sender']; ?></td>
							<td class="py-2"><?php echo $rows['receiver']; ?></td>
							<td class="py-2"><?php echo $rows['balance']; ?> </td>
						</tr>
					<?php
					}

					?>
				</tbody>
			</table>
		</div>
	</div>

	<footer class="bg-light text-center text-dark fixed-bottom " style="background-color: #21081a;">
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2022 Copyright:
			<a class="text-dark" href="Home.html">Our Site</a>
			<h4>creatives.doni@gmail.com</h4>
		</div>
	</footer>
</body>

</html>