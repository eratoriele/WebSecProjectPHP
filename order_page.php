<?php
    //reflected XSS attack

    session_start();
    include "include.php";
    gen_header();
    LoggedIn(1);

    if(!isset($_SESSION["name"]))
        exit();
    

    if(isset($_GET["fruit"]))
        echo "<br>Ok, we will send you ".$_GET["fruit"]." to your room";

?>

<p><form method="get">
    Please enter your favorite fruit for today:<br>
    <input type="text" size="50" name="fruit"><br>
    <input type="submit">
</form>