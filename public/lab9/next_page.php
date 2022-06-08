<?php
    session_start();
    echo "<html>";
    
    $myLogin = $_SESSION["myLogin"];
    echo "Value of myLogin has been retrieved: ".$myLogin."<br>";

    $myColor = $_SESSION["myColor"];
    echo "Value of myColor has been retrieved: ".$myColor."<br>";

    echo "</html>\n";
?>