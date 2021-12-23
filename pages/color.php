<?php
session_start();

if (!isset($_SESSION["pageRefreshCount"]))
{
    $_SESSION["pageRefreshCount"] = 0;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Color changing</title>
</head>
<body id="welcome">
    <h2></h2>
    <?php

    if ($_SESSION['pageRefreshCount'] != 0)
    {
        $greetingColor = "";
        $colorPicker = rand(1, 4);
        if ($colorPicker > 1)
            $greetingColor = "red";
        else if ($colorPicker > 2)
            $greetingColor = "green";
        else if ($colorPicker > 3)
            $greetingColor = "blue";
        else
            $greetingColor = "maroon";
    }
    $_SESSION['pageRefreshCount'] = $_SESSION['pageRefreshCount'] + 1;
    echo "<p hidden id='colorChoice'>$greetingColor</p>";
    echo "<h3>It's ".date("l, F jS").".<br>\r\n";
    echo "The time is ".date("g:ia").".</h3>\r\n";
    echo "<h3>Or at least that's our time, ".
         "though it may not be yours.</h3>\r\n";
    ?>
    <h6>Pedagogical Note:<br>This page ... </h6>
    <script>
    var hiddenParagraph = document.getElementById("colorChoice");
    document.getElementById("welcome").style.color = hiddenParagraph.innerHTML;
    </script>
</body>
</html>