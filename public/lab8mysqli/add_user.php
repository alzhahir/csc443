<?php
    include 'conn.php';

    $sql = "INSERT INTO user (first_name, last_name, email, pass_word, registration_date) values ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[password]', '$_POST[reg_date]')";
    if(!mysqli_query($conn, $sql)){
        die('Error: '.mysqli_error($conn));
    }
    echo "1 record successfully added...";
    header("refresh:5; url=display_table.php");
?>