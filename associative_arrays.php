<!doctype html>

<html lang="en">

<head>

</head>

<body>

        
    <form action="associative_arrays.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>
    </br><br>

    <?php 
        $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+"); //keys should be unique
        $grades["Jim"] = "F ";
        echo $grades["Jim"];
        echo count($grades);
    ?>

    </br><br>
    
    Ocena tego ucznia to <?php
        echo $grades[$_POST["student"]];
    ?>


</body>

</html>