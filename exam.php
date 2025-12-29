<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php
        $weight = 60;
        $height = 170;
        $result = ($height - 100) * 0.9;
        if ($weight > $result) {
            echo ("다이어트 필요");
        }
        else {
            echo ("정상 체중");
        }
        ?>
    </body>
</html>