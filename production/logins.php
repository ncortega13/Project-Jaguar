<?php 
if(!empty($_POST['uname']) && !empty($_POST['pw'])){
$username = $_POST['uname'];
$password = $_POST['pw'];


require 'openDB_resident.php';

	$db = mysqli_connect("localhost","root","","jaguar");

		$sql_u = "SELECT * FROM login WHERE username = '$username' and password = '$password'";
		$res_u = mysqli_query($db, $sql_u) or die (mysqli_error($db));

		if (mysqli_num_rows($res_u) > 0) {
  			header("Location: http://localhost/FinalProject/production/dashboard.php");
  			}
		else{
			echo '<script>
  				alert("There are no account with this data.");
					</script>';
			echo '<script>
				window.history.go(-1);
					</script>';
		}

}
else{
	echo '<script>
  				alert("All fields are required.");
					</script>';
			echo '<script>
				window.history.go(-1);
					</script>';
}
?>