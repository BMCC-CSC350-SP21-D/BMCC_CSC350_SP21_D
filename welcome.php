<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>apartment website design</title>
	<link rel="stylesheet" href="stylesheet.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
		 <form action="login.php" method="post"></form>
		 <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  width: 400px;
	height: 420px;
	color: #000;
	top: 50%;
	left: 50%;
	padding: 60px 30px;
	position: absolute;
	transform: translate(-50%,-50%);
	
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}

</style>
</head>
<body>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="avatar.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>welcome user</h1> 
    </div>
  </div>
</div>
		 
</body>

</html>