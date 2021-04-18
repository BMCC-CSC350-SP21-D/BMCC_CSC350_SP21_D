<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
         <section class="header">
            <nav>
                <a href="login.php"><img src="logo.png"></a>
                <div class="nav-links" id="navLinks">
                    <i><i class="fa fa-times"onclick="hideMenu()"></i>
</i>
                    <ul>
                        <li><a href="">HOME</a></li>
                        <li><a href="">ABOUT</a></li>
                        <li><a href="">CONTACT</a></li>
                    </ul>
                    
                </div>
                <i class="fa fa-bars"onclick="showMenu()"></i>
</i>
            </nav>
            <div class="wrapper">
                <h1>LOGIN</h1>
                <form method="post" action="connect.php">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="Password" name="password" placeholder="Password" required>
                    <input type="submit" value="LOGIN">
                </form>
                <div class="bottom-text">
                    <input type="checkbox" name="remember" checked="checked"> Remember me 
                    <a href="#">Forget password ?</a>
                    
                </div>
                
            </div>
        
         </section>
         
</body>
</html>