<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="login_process.php" method="post">
    <h1>로그인</h1>
    <table border="1">
        <tr>
            <td><label for="username">아이디:</label></td>
            <td><input type="text" id="username" name="username" required></td>
        </tr>
        <tr>
            <td><label for="password">비밀번호:</label></td>
            <td><input type="password" id="password" name="password" required></td>
        </tr>
        <tr>
            <td colspan="2"> <center> <input type="submit" value="로그인"></center></td>
        </tr>
    </table>
    </form>
</body>
</html>