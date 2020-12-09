<?php
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$alias = $_POST['alias'];
$facemarks = $_POST['facemarks'];
$birthday = $_POST['birthday'];
$birthplace = $_POST['birthplace'];
$sex = $_POST['sex'];
$civilstat = $_POST['civilstat'];
$nationality = $_POST['nationality'];
$religion = $_POST['religion'];
$occupation = $_POST['occupation'];
$sector = $_POST['sector'];
$spousename = $_POST['spousename'];
$spouseoccupation = $_POST['spouseoccupation'];
$voterstat = $_POST['voterstat'];
$cityadd = $_POST['cityadd'];
$provadd = $_POST['provadd'];
$purok = $_POST['purok'];
$homenum1= $_POST['homenum1'];
$homenum2= $_POST['homenum2'];
$mobnum1= $_POST['mobnum1'];
$mobnum2= $_POST['mobnum2'];
$email= $_POST['email'];
$restype= $_POST['restype'];
$resstat= $_POST['resstat'];

if (isset($lastname,$firstname,$middlename,$alias,$facemarks,$birthday,$birthplace,$sex,$civilstat,$nationality,$religion,$occupation,$sector,$spousename,$spouseoccupation,$voterstat,$cityadd,$provadd,$purok,$homenum1,$homenum2,$mobnum1,$mobnum2,$email,$restype,$resstat)) {
	
 require 'openDB_resident.php';

	$db = mysqli_connect("localhost","root","","jaguar");

			$sql = "INSERT INTO resident (last_name, first_name, middle_name, alias, face_marks, birth_date, birth_place, sex, civil_status, nationality, religion, occupation, sector, spouse_name, spouse_occupation, voter_status, city_address, prov_address, purok, home_number1, home_number2, mobile_number1, mobile_number2, email, resident_type, resident_status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$conn->prepare($sql)->execute([$lastname,$firstname,$middlename,$alias,$facemarks,$birthday,$birthplace,$sex,$civilstat,$nationality,$religion,$occupation,$sector,$spousename,$spouseoccupation,$voterstat,$cityadd,$provadd,$purok,$homenum1,$homenum2,$mobnum1,$mobnum2,$email,$restype,$resstat ]);
    		echo '<script>
            	alert("Congratulations, you are now registered!");
                	</script>';

                echo '<script>
				window.location= "residents.php";
					</script>';
			exit();
		}
?>