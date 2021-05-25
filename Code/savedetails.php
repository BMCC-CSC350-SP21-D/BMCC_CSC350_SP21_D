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
	$query2 = "SELECT * FROM appointment WHERE Name = '$name'";
	$results2 = mysqli_query($conn, $query2);
	if(mysqli_num_rows($results2) != 0) //Checks if user has already made an appointment
	{
		echo"Error: You already have an appointment made";
	}
	else
	{
		$query = "SELECT * FROM appointment WHERE date='$date' AND time ='$time'"; 
		$results = mysqli_query($conn, $query);
		if(mysqli_num_rows($results) != 0) //Checks if day/time slot has already been booked by another user
		{
			echo"Error: This slot is already taken";
		}
		else
		{
			$sql = "insert into appointment (Name,date,time,email)
			values ('$name','$date','$time','$email')";
			if (mysqli_query($conn, $sql)) 
			{
				echo "Appointment created successfully";
				echo "<br>";
			}
			else 
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	}
}
?>
