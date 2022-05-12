<!DOCTYPE html>
<html>
    <head>
        <title>
            Basic PHP Syntax
        </title>
    </head>
    <body>
        <?php
            $monthDays = array ('January' => 31, 'February' => 28,
                                'March' => 31, 'April' => 30,
                                'May' => 31, 'June' => 30,
                                'July' => 31, 'August' => 31,
                                'September' => 30, 'October' => 31,
                                'November' => 30, 'December' => 31);
            echo "<table border='1'><tr><th>Month</th><th>Days</th></tr>";
            foreach($monthDays as $x => $xval){
                if($xval == 30){
                    echo "<tr><td>".$x."</td><td>".$xval."</td></tr>";
                }
            }
            echo "</table>";
        ?>
    </body>
</html>