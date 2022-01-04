
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 11</title>
</head>
<body>
    <h3>Task 11</h3>
    <form action="" method="post">
        <label>Enter Number:</label>
        <input type="text" name="num"> 
        </br>
        <input type="submit" name="submit">
    </form>
    <?php

if(isset($_POST['submit'])){
    $n = $_POST['num'];
   
}    
?>

</body>
</html>