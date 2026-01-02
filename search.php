<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <a href="input.php">주소록 입력하기</a>
    <br><br>
    <form action="result.php" method="post">
    <h1>주소록 검색하기</h1>
    이름 : <input type="text" name="name"><br>
    성별 : <select name=gender>
        <option value = all>전체</option>
        <option value = M>남자</option>
        <option value = F>여자</option>
    </select><br>
    <input type="submit" value="검색하기">
    </form>
    <br>
</body>

    