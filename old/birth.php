<body>
    <?php
        $birth = $_POST['birth'];
        $age = date("Y") - $birth;
        echo "어서오세요. 당신의 나이는 ".(date("Y") - $_POST['birth'])."세 입니다.";
        ?>
</body>