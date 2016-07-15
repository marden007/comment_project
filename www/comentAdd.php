<?php
	require_once '/conf.php';

	$post_id = 1;
	$parent_id = 0;
	$username = clean($_POST["username"]);
	$comment_text = clean($_POST["comment_text"]);

	if ($username == ""){
        echo 'Имя не может быть пустым';
        exit();
    }

    if ($comment_text == ""){
    	echo 'Нужно написать комментарий...';
    	exit();
    }

    $qs = "INSERT INTO table_comments (post_id, parent_id, username, comment_text) VALUES 
    (1, NULL, '".$username."', '".$comment_text."')";
    $res = $con->query($qs);	

    header('Location: /');
?>