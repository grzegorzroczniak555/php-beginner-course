<!doctype html>

<html lang="en">

<head>

</head>

<body>

    
    <form action="using_checkboxes.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">
    </form>
    </br><br>

    <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[1];
    ?>


</body>

</html>