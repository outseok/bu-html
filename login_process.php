<?php
session_start();
?>
<?php
$username = $_POST['username'];
$password = $_POST['password'];

$dbcon = mysqli_connect("localhost", "root", "", "login");

$query = "SELECT * FROM member WHERE username='$username'";
$result = mysqli_query($dbcon, $query);
$row = mysqli_fetch_array($result);

if (!$row) {
    echo "해당 아이디가 존재하지 않습니다. 회원가입 페이지로 이동합니다.";
    echo "<meta http-equiv='refresh' content='3;url=join.php'>";
    mysqli_close($dbcon);
    exit();
} else {
    if ($row['password'] == $password) {
        echo "$username 님 환영합니다!";
        $_SESSION['user_id'] = $row['username'];  
        $_SESSION['time'] = time();

        echo "<img src='img/".$row['picture_name']."' alt='Profile Picture' style='width:100px;height:100px;'><br>"; 
        echo "<meta http-equiv='refresh' content='3;url=content.php'>";
        
    } else {
        echo "비밀번호가 일치하지 않습니다. 로그인 페이지로 이동합니다.";
        echo "<meta http-equiv='refresh' content='3;url=login.php'>";
    }
}

mysqli_close($dbcon);
exit();
?>
