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
    $ip=$_SERVER['REMOTE_ADDR'];
    date_default_timezone_set('Asia/Seoul');
    $time=date("Y-m-d H:i:s");

    $fp=fopen("record.txt","a+");
    
    fwrite($fp,"IP 주소는 ".$ip." 입니다.<br>접속한 시각은 ".$time." 입니다.<br>$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$");
    fseek($fp,0);
    while(!feof($fp)){
        $temp = fgetc($fp);
        echo $temp;
    }
    fclose($fp);
    ?>
</body>
</html>