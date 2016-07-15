<?php
	require_once '/conf.php';


	$post_id = 1;
	$comment_id = $_POST["comment_id"];
	$username = clean($_POST["username"]);
	$comment_text = clean($_POST["comment_text"]);

	if ($username == ""){
        echo 'Имя не может быть пустым';
        exit();
    }

    if ($comment_text == ""){
    	echo 'Нужно написать ответ...';
    	exit();
    }

    $qs = "INSERT INTO table_comments (post_id, parent_id, username, comment_text) VALUES 
    (".$post_id.", ".$comment_id.", '".$username."', '".$comment_text."')";
    $res = $con->query($qs);
    
    header('Location: /');
?>