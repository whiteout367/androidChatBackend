<?php
	include $_SERVER['DOCUMENT_ROOT']."/chatBack/db.php"; /* db load */
?>
<?php
//http://3.82.172.28/chat/get_user_list.php?age=1
 $cAge = $_GET["age"];
 $sql = "SELECT nn, (SELECT aValue from AgeCode where aCode = m.age) AS age, (SELECT pValue from PlaceCode WHERE pCode = m.place) place, (SELECT sValue from SexCode where sCode = m.sex) sex
 FROM User m
 WHERE age = $cAge;";
 $r = mq($sql);
 while($board = $r->fetch_array())
 {
   //title변수에 DB에서 가져온 title을 선택
  
   $list[] =   $board;
  
}
echo json_encode($list,JSON_UNESCAPED_UNICODE);
?>