<!doctype html>

<html lang="en">

<head>

</head>

<body>

    <?php 
        $friends = array("Kevin", "Karen", "Oscar", "Jim");
        $friends[1] = 400;
        $friends[4] = " Angela ";
        echo $friends[1];
        echo $friends[4];
        echo count($friends);
    ?>


</body>

</html>