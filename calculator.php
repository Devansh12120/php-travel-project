<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
class calculation
{
    public $a = 5;
    public $result = 0;
    function mtocm(){
        $this.$result = ($this.$a * 100); 
        echo $result;
    }
    function cmtom(){
        $this.$result = ($this.$a / 100); 
        echo $result;
    }
    
}
$var = new calculation;

$var->$a = 10;
$var->mtocm();
// $var->cmtom();
?>
<!-- <form action="" method="post"></form>
<input type="number" name=""><?php echo $result?> -->
</body>
</html>