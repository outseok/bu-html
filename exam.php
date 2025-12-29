<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php
        for ($j =2, $k=3, $h=4; $h <= 10; $j +=3, $k +=3, $h +=3) {
            for ($i = 1; $i <= 9; $i++) {
                $r = $j * $i;
                echo "$j x $i = $r &nbsp;&nbsp;";
                $r = $k * $i;
                echo "$k x $i = $r &nbsp;&nbsp;";
                if ($h < 10) {
                    $r = $h * $i;
                    echo "$h x $i = $r <br>";
                } else {
                
                echo "<br>";
                }
            }
            
            echo "<br>";
            
            }
    

        ?>
    </body>
</html>