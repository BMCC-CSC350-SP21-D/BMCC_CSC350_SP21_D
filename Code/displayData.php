<?php

$conn = new mysqli("localhost","root","root","info");
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
else
{
    $sql = "SELECT * FROM appointment";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        // output data of each row
		echo "<p align='center'>  Reserved Appointments</p>";
        while($row = $result->fetch_assoc()) 
        {
			
           echo "<p align='center'> <font color = blue> " . " Day: " . $row["date"]. " Time: " . $row["time"]. " Name: " . $row["Name"]. " Email: " . $row["email"]."</p>";

        }
    } 
    else 
    {
        echo "0 appointments were made";
    }
}
?>