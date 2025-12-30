<html>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>카운터</title>
</head>
<body>
    <?php
    $fp=fopen("record.txt","r+");
    $fget=fgets($fp,4096);
    echo "총 방문자 수는 ".$fget."명 입니다.<br>";
    $fget++;
    fseek($fp,0);
    fwrite($fp,"$fget");
    fclose($fp);
    ?>
</body>
</html>