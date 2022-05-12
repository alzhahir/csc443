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
            $month30 = array();
            echo "<h2>Months around the year</h2><table border='1'><tr><th>Month</th><th>Days</th></tr>";
            foreach($monthDays as $x => $xval){
                echo "<tr><td>".$x."</td><td>".$xval."</td></tr>";
                if($xval == 30){
                    array_push($month30, $x);
                }
            }
            echo "</table><br><br><h2>Months with 30 days</h2>";
            foreach($month30 as $v){
                echo $v."<br>";
            }
        ?>
    </body>
</html>