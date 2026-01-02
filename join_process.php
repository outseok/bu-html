<?php
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$picture = $_FILES['picture'];
$dbcon=mysqli_connect("localhost", "root", "", "login");
mysqli_set_charset($dbcon, "utf8");
mysqli_select_db($dbcon, "login");

$picture_name = $picture['name'];
$picture_tmp = $picture['tmp_name'];
move_uploaded_file($picture_tmp, "img/".$picture_name);
$query = "INSERT INTO member VALUES ('$username', '$password', '$name', '$phone', '$picture_name')";
$result = mysqli_query($dbcon, $query);
if($result){
    echo "$name 님의 회원가입이 완료되었습니다.";
    echo "<meta http-equiv='refresh' content='3;url=login.php'>";
} else {
    echo "오류 발생";
}
mysqli_close($dbcon);
exit();
?>