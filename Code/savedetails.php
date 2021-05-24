<?php
$date = $_POST['day'];
$time = $_POST['time'];
$name = $_POST['name'];
$email = $_POST['Email'];
$conn = new mysqli("localhost","root","root","info");
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
else
{
	$query = "SELECT * FROM appointment WHERE date='$date' AND time ='$time'";
	$results = mysqli_query($conn, $query);
	if(mysqli_num_rows($results) != 1)
	{
		$sql = "insert into appointment (Name,date,time,email)
		values ('$name','$date','$time','$email')";
		if (mysqli_query($conn, $sql)) 
		{
			echo "Appointment created successfully";
		}
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	else
	{
		echo"Error: The day/time slot has already been reserved";
		echo "<br>";
	}
}
?>
