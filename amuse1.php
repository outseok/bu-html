<body>
    
<?php
    $big = 20000;
    $middle = 15000;
    $small = 0;
    $cur_year = date("Y");
    $end_year = $cur_year - $_POST['choice1'];
    $count = $_POST['choice2'];
    
    $_POST['choice1'] = $end_year;
    if ($end_year >= 18){
        
        $pay = $big;
        echo '<img src="big.jpg" alt="성인 이미지">';
        echo '<marquee direction="down" height="300" scrollamount="10" bgcolor="#FFFFFF">
    <img src="adults.png" alt="떨어지는 이미지">
</marquee>';
    } elseif ($end_year >= 7 && $end_year < 18){
        $color = "#00ffff";
        $pay = $middle;
        echo '<img src="middle.jpg" alt="청소년 이미지">';
    }
    else{
        $color = "#ffff00";
        $pay = $small;
        echo '<img src="small.jpg" alt="어린이 이미지">';
    }
    $allpay = $count * $pay;
    echo "당신의 나이는 $end_year 세 이고, 인원수는 $count 명 이므로, 총 요금은 $allpay 원 입니다.";
    ;
    ?>
</body>
