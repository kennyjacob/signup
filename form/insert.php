<?php
	include("connect.php");
if (isset($_POST["add"])) {
		
		// buide a fucntion that validates the date

		function validata($form){
			$form = trim(stripcslashes(htmlspecialchars($form)));
			return $form;
		}

		//check to see if inputs are empty
		// create variables with form data
		// wrap the date with our function



		if (!$_POST["username"]) {
			$nameError = "Please enter a username <br>";
		}else{
			$name = validata($_POST["username"]);
			}

		if (!$_POST["password"]) {
			$passwordError = "Please enter your password <br>";
		}else{
			$password = validata($_POST["password"]);
			}

		if (!$_POST["email"]) {
			$emailError = "Please enter your email <br>";
		}else{
			$email = validata($_POST["email"]);
			}

		if (!$_POST["department"]) {
			$departmentError = "Please enter your department <br>";
		}else{
			$department = validata($_POST["department"]);
			}

		//check to see if each variable has data
		if ($username && $password && $email && $department) {
		
		$query = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `department`, `signup_date`) VALUES (NULL, '$name', '$password', '$email', '$department', current_timestamp())";

		if (mysqli_query( $conn, $query )) {
			echo '<script>alert("Entry Successfully Registered")</script>';
		}else{
			echo "Error: ". $query . "<br>" . mysql_error($conn);
		}
		
		}
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
	 <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>A Day with the Boss</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" type="text/css" href="css/glo.css">
</head>
<body>

<div class="loginbox">
	<h1 class="text-warning">Staff Members Forum</h1>
	<p class="text-white">* Required Fields</p>
	<form action="<?php echo(htmlspecialchars($_SERVER["PHP_SELF"])); ?>" method="post">
		
		<input type="text" name="username" placeholder="Username" required><br><br>
		
		
		<input type="password" name="password" placeholder="Password" required><br><br>


		<input type="text" name="email" placeholder="Email" required><br><br>

		
		<input type="text" name="department" placeholder="Enter your Department" required><br><br>

		<input type="submit" name="add" value="SUBMIT" data-mdb-toggle="modal"
 			 data-mdb-target="#exampleModal">
	</form>
</div>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
