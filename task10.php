
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 10</title>
</head>
<body>
    <h3>Task 10</h3>
    <form action="" method="post">
        <label>Enter Number:</label>
        <input type="text" name="num"> 
        </br>
        <input type="submit" name="submit">
    </form>
    <?php

if(isset($_POST['submit'])){
    $n = $_POST['num'];
 for($i=1;$i<=$n;$i++){
     for($j=1;$j<=$i;$j++){
     echo "*";
     }
     echo "<br>";
 }
 for($i=1;$i<=$n;$i++){
    for($j=$n-1;$j>=$i;$j--){
        echo "*";
    }echo "<br>";
}      
}    
?>

</body>
</html>