<?php
//http://3.82.172.28/chat/userInsert.php?id=opsk&nickname=sksk&age=1&place=1&sex=1&pw=ww

//include $_SERVER['DOCUMENT_ROOT']."/chatBack/db.php";
?>
<?php
	$db = new mysqli("3.82.172.28","white","dnjswns12","BOARD"); 
	$db->set_charset("utf8");

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}

//각 변수에 write.php에서 input name값들을 저장한다
$id= $_GET['id'];
$nn= $_GET['nickname'];
$userpw = password_hash($_GET['pw'], PASSWORD_DEFAULT);
$age = $_GET['age'];
$place = $_GET['place'];
$sex = $_GET['sex'];

$sql = "insert into User(id,passwd,nn,age,place,sex) values('$id','$userpw','$nn','$age','$place','$sex')";


$sql = mq($sql);
if ($sql === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    



error_reporting(E_ALL);
ini_set("display_errors", 1);

} else {
?>
    <script>
        alert("회원가입이 완료되었습니다");
        
    </script>
<?php
}
?>