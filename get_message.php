<?php include  $_SERVER['DOCUMENT_ROOT']."/chatBack/db.php"; ?>

<?php
//http://18.117.79.218/chat/get_message.php?id=white
 // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
    $id = $_GET['id'];
   $sql = "SELECT sid, rid, sdt, msg, 
   (SELECT id FROM User WHERE id = c.rid) nn
     FROM Chat c
     WHERE sid = '$id'
     OR rid = '$id'
     ORDER BY sdt ";
   $r = mq($sql); 
     while($board = $r->fetch_array())
     {
       //title변수에 DB에서 가져온 title을 선택
      
       $list[] =   $board;
      
    }
    
    echo json_encode($list,JSON_UNESCAPED_UNICODE);
?>