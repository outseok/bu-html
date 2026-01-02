<?php
$username = $_POST['username'];
$password = $_POST['password'];
$dbcon=mysqli_connect("localhost", "root", "", "login");
mysqli_select_db($dbcon, "login");
$query = "select * from member where username='$username'";
$result = mysqli_query($dbcon, $query);
if(mysqli_num_rows($result) == 0){
    echo "해당 아이디가 존재하지 않습니다. 회원가입 페이지로 이동합니다.";
    echo "<meta http-equiv='refresh' content='3;url=join.php'>";
    mysqli_close($dbcon);
    exit();
} else {
    $row = mysqli_fetch_assoc($result);
    if($row['password'] == $password){
        echo "$username 님 환영합니다!";
    } else {
        echo "비밀번호가 일치하지 않습니다. 로그인 페이지로 이동합니다.";
        echo "<meta http-equiv='refresh' content='3;url=login.php'>";
    }
}
mysqli_close($dbcon);
exit();
?>