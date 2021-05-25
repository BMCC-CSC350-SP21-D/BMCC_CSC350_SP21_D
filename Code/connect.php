<?php    
    $username = $_POST['username'];
    $password = $_POST['password'];

    // database connection 
    $con = new mysqli("localhost","root","root","info");
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);
    }
    else {
        $stmt = $con->prepare("select * from user where username = ?"); //looks for username and if it is found, code will fetch the associating data in this case password
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
                header("location:login.php");
            }
        } 
        else {
            echo "Invaild username or password";
            header("location:login.php");
            }
        }

?>
