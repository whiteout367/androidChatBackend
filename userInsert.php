
<?php
error_reporting( E_ALL ); 
ini_set( "display_errors", 1 ); 
?>
<?php



//http://3.82.172.28/chat/userInsert.php?id=opsk&nickname=sksk&age=1&place=1&sex=1&pw=ww

include $_SERVER['DOCUMENT_ROOT']."/chatBack/db.php";

//각 변수에 write.php에서 input name값들을 저장한다
$id= $_GET['id'];
$nn= $_GET['nickname'];
$userpw = password_hash($_GET['pw'], PASSWORD_DEFAULT);
$age = $_GET['age'];
$place = $_GET['place'];
$sex = $_GET['sex'];


$sql = "
insert into User(id,nn,passwd,age,place,sex) values('$id','$nn','$userpw','$age','$place','$sex')
";



$sql = mq($sql);

?>