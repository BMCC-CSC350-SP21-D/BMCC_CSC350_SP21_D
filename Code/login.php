<DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>LOGIN FORM</title> <!-- This is the title -->
    <link rel="stylesheet" href="stylesheet.css"> <!-- This links to the style sheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!-- This is font style from bootstrap -->
</head>
<body>
         <section class="header"> <!-- This is header class that shows the logo picture on the login page -->
            <nav>
                <a href="login.php"><img src="logo.png"></a>
            </nav>
            <div class="wrapper"><!-- class wrapper which contains the login form -->
                <h1>LOGIN</h1>
                <form method="post" action="connect.php"> <!-- This code makes the connection to the database once pressed login button  -->
                    <input type="text" name="username" placeholder="Username like user1" required><!-- This is text box for username  -->
                    <input type="Password" name="password" placeholder="Password like pass1" required><!-- This is text box for username  -->
                    <input type="submit" value="LOGIN"><!-- This is a log in button  -->
                </form>
                <div class="bottom-text">
                    <input type="checkbox" name="remember" checked="checked"> Remember me 
                    <a href="#">Forget password ?</a><!-- shows remember button and forget password right under login button  -->
                    
                </div>
                
            </div>
        
         </section>
         
</body>
</html>
