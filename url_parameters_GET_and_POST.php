<!doctype html>

<html lang="en">

<head>

</head>

<body>

    
    <form action="url_parameters_GET_and_POST.php" method="post">
        Password: <input type="password" name="password"> <br>
        <input type="submit">
    </form>
    </br><br>

    <?php 
        echo $_POST["password"];
    ?>


</body>

</html>