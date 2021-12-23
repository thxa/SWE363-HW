<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET - POST methods</title>
</head>
<body>
    
    <h1>POST FORM</h1>
    <form action="<?php echo basename(__FILE__)?>" method="POST">
        <label for="firstName">First Name:</label>
        <input name="firstName" type="text">

        <label for="lastName">Last Name:</label>
        <input name="lastName" type="text">
        
        <input type="submit" value="submit">
    </form>

    <h1>GET FORM</h1>
    <form action="<?php echo basename(__FILE__)?>" method="GET">
        
        <label for="firstName">First Name:</label>
        <input name="firstName" type="text">

        <label for="lastName">Last Name:</label>
        <input name="lastName" type="text">

        <input type="submit" value="submit">    
    </form>

    <?php
    if (isset($_GET['firstName']) && isset($_GET['lastName']))
    {
        echo "<h1>GET Result</h1>";
        echo "<p>First Name: ".$_GET['firstName']."</p>";
        echo "<p>Last Name: ".$_GET['lastName']."</p>";    
    }
    if (isset($_POST['firstName']) && isset($_POST['lastName']))
    {
        echo "<h1>POST Result</h1>";
        echo "<p>First Name: ".$_POST['firstName']."</p>";
        echo "<p>Last Name: ".$_POST['lastName']."</p>";    
    }
    
    ?>
</body>
</html>