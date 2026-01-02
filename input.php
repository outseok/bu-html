<!DOCTYPE html>
<html lang="ko">
<html>
<head>
    <title>Process 1</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <a href="search.php">주소록 검색하기</a>
    
    </a>
    <br><br>

    <h1>주소록 입력하기</h1>
    <form action ="process1.php" method="post">
        이름: <input type="text" name="name"><br>
        전화: <input type="text" name="phone">(-빼고 입력하세요)<br>
        성별: <input type='radio' name='gender' value='M'>남자
              <input type='radio' name='gender' value='F'>여자<br>
        생년월일 <input type="date" name="birthdate"><br>
        <input type='submit' value='입력하기'>
    </form>
   
</body>
</html>