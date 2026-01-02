<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>선택 입력 양식</title>
</head>
<body>
    <select name="choice1" size="4">
        <option value="">연도선택</option>
        <?php
        for ($year = date("Y"); $year >=date("Y")-100; $year--){
            echo "<option value='$year'>{$year}년</option>";
        }
        ?>
        
    </select>
    <form action="birth.php" method="post">
    <input type="submit" value="가입">
    </body>
</html>