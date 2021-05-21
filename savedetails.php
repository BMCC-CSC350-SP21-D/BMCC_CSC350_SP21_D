<?php
$date = $_POST['day'];
$time = $_POST['time'];
$name = $_POST['name'];
$conn = new mysqli("localhost","root","root","info");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "insert into appointment (date,time,Name)
values ('$date','$time','$name')";
$sql = "SELECT appointment
FROM user
JOIN appointment ON user.tenantName=appointment.Name";
if (mysqli_query($conn, $sql)) {
  echo "Appointment created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>