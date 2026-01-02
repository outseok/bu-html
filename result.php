<h1> 주소록 검색 결과 </h1>
<?php
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dbcon = mysqli_connect("localhost", "root", "", "student");
    mysqli_set_charset($dbcon, "utf8");
    mysqli_select_db($dbcon, "student");
    if($gender == "all") {
        $query = "select * from address_book where username = '$name'";
    } else {
        $query = "select * from address_book where username = '$name' and gender = '$gender'";
    }
    $result = mysqli_query($dbcon, $query);
if (!$result) {
    echo "SQL ERROR: " . mysqli_error($dbcon) . "<br>";
    echo "QUERY: " . $query . "<br>";
    exit;
}

    while($row = mysqli_fetch_array($result)) {
        echo $row['username'].'<br>';
        echo $row['phone_number'].'<br>';
        echo $row['gender'].'<br>';
        echo $row['birth'].'<br>';
    }

    

    mysqli_close($dbcon);
?>