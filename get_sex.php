<?php include  $_SERVER['DOCUMENT_ROOT'].'/chatBack/db.php'; ?>

<?php
//http://3.82.172.28/chatBack/get_sex.php
 // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
   $sql = "select * from SexCode";
   $r = mq($sql); 
     while($board = $r->fetch_array())
     {
       //title변수에 DB에서 가져온 title을 선택
      
       $list[] =   $board;
      
    }
    
    echo json_encode($list,JSON_UNESCAPED_UNICODE);
?>