<?php

$accountID = isset($_POST['id']) ? $_POST['id'] : '';
$accountPW = $_POST['pw'];
$accountNAME = $_POST['name'];

$conn = mysqli_connect("127.0.0.1", "root",
"1234567", "opentutorials");

$signup = "insert into register(
            id,
            pw,
            name,
            created
          ) values ('$accountID', '$accountPW', '$accountNAME', NOW() )";

if($conn->query($signup)){
  echo "회원가입에 성공했습니다<br><br>";
  echo "<a href=login.html>로그인 페이지로 이동</a>";
  }
  else{
    echo "로그인에 실패했습니다.";
  }
mysqli_close($conn);
?>
