<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>login</title>
</head>
<body>


	<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pword = $_POST['pword'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','goddid');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into pray(username, email, pword) values(?, ?, ?)");
		$stmt->bind_param("sssssi", $username, $email, $pword);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>




	
	<div class="svg"></div>
	<div class="signup-dtl">
		<div class="top-bar">
			<h2 class="a_m">Lets GET YOU STARTED!</h2>
			<p class="n_h">
				
			</p>
		</div>
		<form action="">
			<input class="uid" type="text" id="id" name="id" placeholder="Enter your user id" required>
			<input class="username" type="text" id="userame" name="username" placeholder="Enter username" required>
            <input class="email" type="text" id="email" name="email" placeholder="Enter your email" required>
			<input class="pword" type="pword" id="pword" name="pword" placeholder="Enter your Password" required>
			<button class="btn">SIGN IN</button	>
		</form>
	</div>
			<div class="signin">
				<p class="dont">Don't have an account yet?</p>
				<a href="#"><p class="cre_acc">Already have an account?</a></p>
			</div>

            <div class="container2">
                <div class="logo-box2">
        
                    <div class="icon-img"></div>
                    <img src="2.png" alt="study" >
        
                </div>
            </div>
</body>
</html>	