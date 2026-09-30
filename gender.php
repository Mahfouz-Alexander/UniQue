<!DOCTYPE html>
<html>
    <head>
        <title>Gender</title>
		<style>
		.form{
			background-color: blue;
			width: 38%;
			margin-left:  35%;
		}
		button{
			background-color: orange;
			color: purple;
			margin-left: 45%;
		}
		button:hover{
			background-color:green;
			color: indigo;
			font-family: new times roman;
		}
		h1{
			color: blue;
			Text-align: center;
		}
		label{
			color: white;
			font-weight: bold;
		}
		body{
			background-color: orange;
		}
		h2{
			color: white;
			font-family: Algerian;
			font-weight: bold;
			Text-align: center;
		}
		</style>
    </head>
    <body>
	<h1>Create account:</h1>
        <div class="form">
            <form action="#" method="POST">
        <label>Enter E-Mail:</label><br>
        <input type="text" name="email" placeholder="E-mail" required><br>
        <label>Enter Username:</label><br>
        <input type="text" name="uname" placeholder="Username" required><br>
        <label>Enter Password:</label><br>
        <input type="password" name="pword" placeholder="Password" required><br>
        <label>Gender:</label><br>
        <input type="radio" name="gender"  value="male">Male<br>
        <input type="radio" name="gender"  value="female">Female<br>
        <button name="sb" value="Submit">Submit</button><br><br>
    <button type="reset">Reset</button><br>
	<?php
	$conn=mysqli_connect('localhost','root','','users');
	if(isset($_POST['sb'])){
	$email=$_POST['email'];
	$uname=$_POST['uname'];
	$pword=$_POST['pword'];
	$gender=$_POST['gender'];
	$query="INSERT INTO gender(email,uname,pword,gender) VALUES('$email','$uname','$pword','$gender')";
	if(!empty($gender)){
		echo("submitting....");
	}
	else{
		("gender should not be empty");
	}
	$execute=mysqli_query($conn,$query);
	}
	?>
        </form>
        </div>
    </body>
	<footer>
	<h2>&copy UniQue</h2>
	</footer>
</html>