<head>
    <title>PHP Test</title>
</head>
<body style="background-image: url(amuse3.png); background-size: cover; background-repeat: no-repeat;">

    <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" valign="middle">
                
                <table bgcolor="white" border="1" cellpadding="30" style="border-collapse: collapse; border-color: #fffefeff;">
                    <tr>
                        <td align="center">
                            <h2>티켓 예매하기</h2>
                            <form action="amuse1.php" method="post">
                                
                                <p>
                                    인원수 선택<br>
                                    <select name="choice2" size="1">
                                        <?php
                                        for ($i = 1; $i <= 10; $i++) {
                                            echo "<option value='$i'>{$i}명</option>";
                                        }
                                        ?>
                                    </select>
                                </p>

                                <p>
                                    연도 선택<br>
                                    <select name="choice1" size="1">
                                        <option value="">연도선택</option>
                                        <?php
                                        $cur_year = date("Y");
                                        for ($year = $cur_year; $year >= $cur_year - 100; $year--) {
                                            echo "<option value='$year'>{$year}년</option>";
                                        }
                                        ?>
                                    </select>
                                </p>
                                
                                <input type="submit" value="계산하기">
                            </form>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>

</body>