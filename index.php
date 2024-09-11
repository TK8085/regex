<?php
include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    print_r($_GET);
    if($_GET)
    {
        echo("Data recieved by the server ");
        echo($_GET['fname']);
    }

    if(isset($_GET['fname']) && isset($_GET['email']))

    {
        echo($_GET['fname']);
        echo($_GET ['email']);

        //use the function to get a true or false to indecate if the form field is valid
        $isNameValid = validateName($_GET['email']);
        if ($isNameValid){
            
            $enteredName = $_GET ['fname'];
            echo("Your name is $enteredName");

        } else{
            echo("NO valid name");
        }
    }

    ?>

    <form action="" method = "get" >
        <input type="text" Name = "fname" placeholder ="Enter your name">

        <input type="text" name= "Email" placeholder = "Enter your Email">
        <input type="submit" value = "submit the information">

    </form>

    
</body>
</html>