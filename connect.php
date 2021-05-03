<?php    
    $username = $_POST['username'];
    $password = $_POST['password'];

    // database connection 
    $con = new mysqli("localhost","root","","user");
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);
    }
    else {
        $stmt = $con->prepare("select * from login where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
                echo "login successfully";
                header("location:welcome.php");

            } 
            else{
                echo "Invaild username or password";
            }
        } 
        else {
            echo "Invaild username or password";
            }
        }

?>