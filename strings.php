<!doctype html>

<html lang="en">

<head>

</head>

<body>

    <?php
      $phrase = "Giraffe Academy!";
      echo strtolower($phrase); echo "<br>"; //zamiana na małe litery
      echo strtoupper($phrase); echo "<br>"; //zamiana na duże litery
      echo strlen($phrase); echo "<br>"; //długość stringa
      echo $phrase[0]; echo "<br>";
      $phrase[0] = "B"; //zamiana litery z indexem 0
      echo $phrase; echo "<br>";
      echo str_replace("Biraffe", "Panda", $phrase); echo "<br>"; //zamiana stringa
      echo substr($phrase, 8, 3); //wycinek kawałka stringa
    ?>


</body>

</html>