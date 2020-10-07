<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "insert";


$conn = mysqli_connect($server , $username , $password , $dbname);

if (isset($_POST['submit'])) {

	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['Message'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$Message = $_POST['Message'];

		$query = "insert into form(name,email,subject,Message) values('$name', '$email', '$subject', '$Message')";

		$run = mysqli_query($conn,$query) or die(mysqli_error());

		if($run){
			echo '<a href="index.php"><br><h1><b>Form submitted successfully... :)<b></h1><br></a>';

		}
		else{

			echo "<br><h1><b>Form not submitted <b></h1><br>";
		}

	}
	else{
		echo "all fields required";
	}

}


?>