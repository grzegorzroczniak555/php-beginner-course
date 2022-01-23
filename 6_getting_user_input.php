<!doctype html>

<html lang="en">

<head>

</head>

<body>

    
    <form action="6_getting_user_input.php" method="get">
        Name: <input type="text" name="username">
        <br>
        <br>
        Age: <input type="number" name="age">
        <br>
        <br>
        <input type="submit">
    </form>
    </br>

    Your name is <?php echo isset($_GET["username"]) ? $_GET["username"] : ''; ?>
    <br>
    You are <?php echo isset($_GET["age"]) ? $_GET["age"] : '' ; ?>


</body>

</html>