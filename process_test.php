<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <?php
    $_POST['username'] = 'testuser';
    $_POST['password'] = 'testpass';
    echo "$_POST[username] 님 어서오세요. 당신의 패스워드는 $_POST[password] 입니다.";
    ?>

    <?php
    $_POST['weight'] 
    $_POST['height']
    $diet = ($_POST['height'] - 100) * 0.9;
    if ($_POST['weight'] > $diet) {
        echo "<br>다이어트가 필요합니다";
    } else {
        echo "<br>정상입니다";
    }