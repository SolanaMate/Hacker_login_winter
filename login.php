<?php
session_start();

$connect = mysqli_connect("127.0.0.1", "root", "1234567", "opentutorials");

$input_id = $_POST['id'];
$input_pw = $_POST['pw'];

$query = "select * from register where id='$input_id'";
$result = $connect -> query($query);

if(mysqli_num_rows($result)==1){
    $row=mysqli_fetch_assoc($result);

    if($row['pw']==$input_pw){
      $_SESSION['userid']=$input_id;
      if(isset($_SESSION['userid'])){
          echo "로그인에 성공했습니다.<br>";
          echo $_SESSION['userid']."님 어서오세요<br>";
        }
        else{
          echo "로그인에 실패했습니다";
        }
      }
      else{
          echo "로그인 값이 잘못되었습니다";
      }
    }
    else{
        echo "로그인 값이 잘못되었습니다";
    }
 ?>
