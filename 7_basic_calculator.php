<!doctype html>

<html lang="en">

<head>

</head>

<body>

    
    <form action="7_basic_calculator.php" method="get">
        <input type="number" name="num1">
        <br>
        <br>
        <input type="number" name="num2">

        <input type="submit">

    </form>
    </br>

    Answer: <?php  echo $_GET["num1"] + $_GET["num2"] ?>


</body>

</html>