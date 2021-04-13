<?php 
session_start();

	include("connection.php");
	include("functions.php");
echo "good morning";

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		  }
		$name  = test_input($_POST['name']);
		$residence  = test_input($_POST['residence']);
		$contact  = test_input($_POST['contact']);
		$useremail  = test_input($_POST['useremail']);
		$cardnumber  = test_input($_POST['cardnumber']);
		$cardexpiry  = test_input($_POST['cardexpiry']);
		$cvv  = test_input($_POST['cvv']);

			//save to database
			$user_id = random_num(15);
			$query = "insert into payment (user_id,name,residence,contact,useremail,cardnumber,cardexpiry,cvv)
            values ('$user_id','$name','$residence','$contact','$useremail','$cardnumber','$cardexpiry','$cvv')";
			mysqli_query($con, $query);
			header("Location: feedback.php");
			die;
	}
?>