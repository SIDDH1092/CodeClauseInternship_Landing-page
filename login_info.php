<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="gym";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $Name = $_POST['Name'];
	 $Phone_number = $_POST['Phone_number'];

     $sql_query = "INSERT INTO login_info ( Name,Phone_number)
	 VALUES ('$Name','$Phone_number')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully ! 
		Contact you Soon. 
		Thank YOU";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>