<?php
    $creds = parse_ini_file("/home/ubuntu/inis/dblab.ini");
    $server = $creds["server"];
    $username = $creds["username"];
    $password = $creds["password"];
    $database = $creds["database"];

    /* Database credentials. Assuming you are running MySQL
    server with imported settings */
    define('DB_SERVER', $server);
    define('DB_USERNAME', $username);
    define('DB_PASSWORD', $password);
    define('DB_NAME', $database);

    $conn = mysqli_connect($server, $username, $password, $database);
    $result = mysqli_query($conn, "select * from user");
    while ($row = mysqli_fetch_array($result)){
        foreach($row as $key=>$value){
            echo "$key = $value<br>\n";
        }
    }

    mysqli_free_result($result);
    mysqli_close($conn);
?>