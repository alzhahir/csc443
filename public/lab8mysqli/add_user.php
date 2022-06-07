<?php
    include 'conn.php';

    $password = $cpassword = $passwordErr = $cpasswordErr = "";
    if(!empty($_POST["password"])) {
        $password = test_input($_POST["password"]);
        $cpassword = test_input($_POST["cpassword"]);
        if (strlen($_POST["password"]) < '6' && $_POST["password"] > '8') {
            $passwordErr = "Your password length must be between 6 and 8 characters!";
            die("Your password length must be between 6 and 8 characters!");
            header("refresh:2; url=get_info.php");
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your password must contain at least 1 number!";
            die("Your password must contain at least 1 number!");
            header("refresh:2; url=get_info.php");
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Your password must contain at least 1 capital letter!";
            die("Your password must contain at least 1 capital letter!");
            header("refresh:2; url=get_info.php");
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Your password must contain at least 1 lowercase letter!";
            die("Your password must contain at least 1 lowercase letter!");
            header("refresh:2; url=get_info.php");
        }
    } else {
        $passwordErr = "Please enter password   ";
        die("Please enter a password!");
        header("refresh:2; url=get_info.php");
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
   }

    $sql = "INSERT INTO user (first_name, last_name, email, pass_word, registration_date) values ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[password]', '$_POST[reg_date]')";
    if(!mysqli_query($conn, $sql)){
        die('Error: '.mysqli_error($conn));
    }
    echo "1 record successfully added...";
    header("refresh:5; url=display_table.php");
?>