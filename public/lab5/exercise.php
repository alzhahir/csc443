<!DOCTYPE html>
<html>
    <head>
        <title>
            Basic PHP Syntax
        </title>
    </head>
    <body>
        <?php
        $minmonth;
        $minval = 1000;
        $totdays = 0;
        $monthDays = array ('Splorch' => 23, 'Sploo' => 28,
                            'Splat' => 2, 'Splatt' => 3,
                            'Spleen' => 44, 'Splune' => 30,
                            'Spling' => 61, 'Slendo' => 61,
                            'Sploctember' => 31, 'Splictember' => 31,
                            'Splanet' => 30, 'TheRest' => 22);
        foreach($monthDays as $x => $xval){
            if($xval <= $minval){
                $minmonth = $x;
                $minval = $xval;
            }
            $totdays += $xval;
        }
        echo $minval."<br>".$minmonth."<br>".$totdays;
        ?>
    </body>
</html>