<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label> Enter no.</label>
        <input type="text" name="text">
        <input type="submit" name="Check">
    </form>
    
    <?php
    if(isset($_POST['Check'])){
       $n = $_POST['text'];
       if ($n=="premium")
        echo "WELCOME PREMIUM!";
        elseif ($n=="BASIC")
        echo "WELCOME BASIC!";
     else 
       echo "UNKNOWN";
     }
    ?>
</body>
</html>