<?php
$residentid1=$_REQUEST['residentid'];
$con = mysqli_connect("localhost", "root", "", "jaguar");

if($residentid1!==""){
$query = mysqli_query($con,"SELECT * FROM 'resident' WHERE resident_id = '$residentid1'");

$row = mysqli_fetch_array($query);
$lname = $row["last_name"];
$fname = $row["first_name"];
$mname = $row["middle_name"];
}
$result = array ("$lname", "$fname", "$mname");
$myJSON = json_encode($result);
echo $myJSON;
?>