<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="join_process.php" method="post" enctype="multipart/form-data">
    <h1>회원가입</h1>
    <table border="1">
        <tr>
            <td><label for="username">아이디:</label></td>
            <td>
        <input type="text" id="username" name="username" required></td>
</tr>
            <tr>
            <td><label for="password">비밀번호:</label></td>
            <td><input type="password" id="password" name="password" required></td>
            </tr>
        <tr>
            <td><label for="name">이름:</label></td>
            <td><input type="text" id="name" name="name" required></td>
        </tr>
        <tr>
            <td><label for="phone">전화번호:</label></td>
            <td><input type="text" id="phone" name="phone" required></td>
        </tr>
        <tr>
            <td><label for="picture">사진:</label></td>
            <td><input type ="file" id="picture" name="picture" accept="image/*" required></td>
        </tr>
        <tr>
            <td colspan="2"> <center> <input type="submit" value="회원가입"></center></td>
        </tr>
    </table>
    </form>
</body>

    