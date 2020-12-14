<?php
$conn = mysqli_connect("localhost", "root", "", "jaguar");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
	$details=$_POST['details'];
// fetch query
function fetch_data(){
 global $conn;
  $query="SELECT * FROM resident WHERE resident_id = '$details'"; // change this
  $exec=mysqli_query($conn, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= fetch_data();
show_data($fetchData);


foreach($fetchData as $data){ 
       
    $last_name=$data['last_name'];} // change this 'udid' to your table field

?>