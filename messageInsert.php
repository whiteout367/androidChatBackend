<?php
//http://3.82.172.28/chat/messageInsert.php?sid=%s&rid=%s&msg=%s

include $_SERVER['DOCUMENT_ROOT']."/chatBack/db.php";

//각 변수에 write.php에서 input name값들을 저장한다
$sid= $_GET['sid'];
$rid= $_GET['rid'];
$msg = $_GET['msg'];

$sql = "
insert into Chat(sid,rid,msg) values('$sid','$rid','$msg')
";
$sql = mq($sql);

?>