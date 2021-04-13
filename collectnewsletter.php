<?php
    $email = $_POST['email'];
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "php";
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format<br>Incorrect mail format\n Sample format abcHYC123@xyzv.com";
      }
    else{
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
    }
    else{
        $query = mysqli_query($conn, "SELECT * FROM `newsletter` WHERE `email` = '$email'");
        if(mysqli_num_rows($query) >0) {
            echo "This email is already being used";
        }                     
        else{
            $sql = "INSERT INTO newsletter (email)
            values ('$email')";
            if ($conn->query($sql)){
                echo "New record is inserted sucessfully";
            }
            else{
                echo "Error: ". $sql ."
                ". $conn->error;
            }
            $conn->close();
        }
    }   

}
?>
    <br><a href="index.php#newsletter"><button type="submit" value="back">Back</button></a>

