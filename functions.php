<?php
function validatename($name){
    $namePattern = "/^[a-zA-Z ]+$/";
    preg_match($namePattern, $name);
}
?>