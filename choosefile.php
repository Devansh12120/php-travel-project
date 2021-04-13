<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image"><br>
<input type="submit">
</form>
</body>
<div class="text">
<?php 

if (isset($_FILES['image'])) {
    echo "<pre>";
    print_r ($_FILES);
    echo "</pre>";
}

$file_name=$_FILES['image']['name'];
$file_size=$_FILES['image']['size'];
$file_tmp=$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
$file_error=$_FILES['image']['error'];
if (!($file_error == 0)) {
    echo "file not selected";
} else {
    if (move_uploaded_file($file_tmp,"upload/".$file_name)) {
        echo "file copied successfully";
    } 
    else {
        echo "file error";
    }
}


?>



</div>
</html>