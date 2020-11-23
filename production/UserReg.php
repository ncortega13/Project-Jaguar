<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];
$position = $_POST['position'];
$username = $_POST['user'];
$passwordOrig = $_POST['pass'];

if ($passwordOrig != "") {

 require 'openDB.php';

	$db = mysqli_connect("localhost","root","","bims");

		$sql_u = "SELECT username FROM admins WHERE username = '$username'";
		$res_u = mysqli_query($db, $sql_u) or die (mysqli_error($db));

		if (mysqli_num_rows($res_u) > 0) {
			echo '<script>
  				alert("The username has been taken. Try another one.");
					</script>';
				echo '<script>
				window.history.go(-1);
					</script>';
				}
		else{
			$sql = "INSERT INTO admins (last_name,first_name,middle_name,position,username,password) VALUES (?,?,?,?,?,?)";
			$conn->prepare($sql)->execute([$lname,$fname,$mname,$position,$username,$passwordOrig]);
    		echo '<script>
            	alert("Congratulations, you are now registered!");
                	</script>';

                echo '<script>
				window.history.go(-1);
					</script>';
			exit();
		}
}
	else {

		echo '<script>
				alert("You need to register!")
					</script>';
		echo '<script>
				window.history.go(-1);
					</script>';
		}
?>
