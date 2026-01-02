<?php
session_start();
if(isset($_SESSION['user_id'])){
    echo '<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Content</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>회원 전용 페이지</h1>
    <img src="./image/icons8-netflix-100.png" alt="회원 전용 이미지">
</body>
</html>';
} else {
    echo "access denied";
}
?>




