<?php
if(!empty($_POST['uname']) && !empty($_POST['pw'])){
$username = $_POST['uname'];
$password = $_POST['pw'];


require 'openDB.php';

	$db = mysqli_connect("localhost","root","","bims");

		$sql_u = "SELECT * FROM admins WHERE username = '$username' and password = '$password'";
		$res_u = mysqli_query($db, $sql_u) or die (mysqli_error($db));

		if (mysqli_num_rows($res_u) > 0) {
  			header("Location: index.html");
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
