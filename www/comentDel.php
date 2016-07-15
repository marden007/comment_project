<?php
	require_once '/conf.php';

	$comment_id = $_GET['comment_id'];
    $qs = "DELETE from table_comments where id =".$comment_id;
    $res = $con->query($qs);	

    header('Location: /');
?>