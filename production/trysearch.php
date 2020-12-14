<!DOCTYPE html>
<html>
<head>
	<title>Search Data by its ID</title>
</head>
<body>
	<center>
		<h1> Search for a single DATA / Record from Database USING PHP</h1>
		<h2> Retrieve /search /fetch/ data from database </h2>

		<div class="container">
			<form action="" method="POST">
				<input type="text" name="id" placeholder="Enter ID No.">
				<input type="submit" name="search" value="SEARCH BY ID">
			</form>
			<table>
			<tr>
				<th>First Name </th>
				<th>Last Name </th>
				<th>Email </th>
				<th>Fathers Name </th>
				<th>First Name </th>
				<th>Address </th>
				<th>Phone Number </th>
			</tr>	<br>	
			<? php
			$connection = mysqli_connect("localhost","root","","resident");
			$db = mysql



			</table>

		</div>
	</center>
</body>
</html>