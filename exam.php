<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php
            $i = 1;
            $j = 2;
        while ($j<= 9){
        
            while ($i <= 9){
            
                 $r = $j * $i;
                echo "$j x $i = $r <br>";
                $i++;
        }
        $j++;
        $i = 1;

        }

        for ($j =2; $j <= 9; $j++) {
            for ($i = 1; $i <= 9; $i++) {
                $r = $j * $i;
                echo "$j x $i = $r <br>";
            }
        }
        ?>
    </body>
</html>