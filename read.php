<?php
	include $_SERVER['DOCUMENT_ROOT']."/chatBack/db.php"; /* db load */
    $sql = mq("select * from User");
    echo $sql;
?>