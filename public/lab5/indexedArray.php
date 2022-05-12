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
            for($i < 12; $i = 0; $i++){
                echo $month[$i];
            };
        ?>
    </body>
</html>