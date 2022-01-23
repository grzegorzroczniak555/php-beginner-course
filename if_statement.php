<!doctype html>

<html lang="en">

<head>

</head>

<body>

        
    <?php

    $isMale = false;
    $isTall = true;

    if ($isMale && $isTall){
        echo "You are a tall male";
    } elseif ($isMale && !$isTall) {
        echo "You are short man";
    } elseif(!$isMale && $isTall) {
        echo "You are not male, but are tall";
    }
     else {
        echo "You are not a male and not tall";
    }

    ?>


</body>

</html>