<!DOCTYPE html>
<html>
    <head>
        <title>
            Basic PHP Syntax
        </title>
    </head>
    <body>
        <?php
            $month = array ('January', 'February', 'March', 'April',
                            'May', 'June', 'July', 'August', 'September',
                            'October', 'November', 'December');
            for($i = 0; $i < 12; $i++){
                echo $month[$i], "\t";
            };
            echo "<br><br>";
            sort($month, SORT_STRING);
            foreach($month as $x){
                echo $x, "<br>";
            }
        ?>
    </body>
</html>