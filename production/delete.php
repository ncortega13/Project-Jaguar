<?php 
$resident_id = $_POST['delete'];

require 'openDB_resident.php';

	$db = mysqli_connect("localhost","root","","jaguar");

		$sql_u = "DELETE FROM resident WHERE resident_id = ''";
		$res_u = mysqli_query($db, $sql_u) or die (mysqli_error($db));

		if (mysqli_num_rows($res_u) > 0) {
  			header("Location: http://localhost/Project-Jaguar/production/residents.php");
  			}
		else{
			echo '<script>
  				alert("Error");
					</script>';
			echo '<script>
				window.history.go(-2);
					</script>';
		}
?>