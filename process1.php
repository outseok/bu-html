<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$dbcon = mysqli_connect("localhost", "root", "", "student") or die("DB 연결 실패: " . mysqli_connect_error());
mysqli_set_charset($dbcon, "utf8");
$query = "INSERT INTO address_book VALUES ('$name', '$phone', '$gender', '$birthdate')";

$result = mysqli_query($dbcon, $query);

if($result) {
    echo "$name 님의 데이터가 잘 입력되었습니다.";
} else {
    echo "오류 발생";
}

mysqli_close($dbcon);

?>
<br>
<a href="input.php">뒤로가기</a>