<?php
    require_once "/conf.php";

	$post_id = 1;

	$qs= "SELECT id, parent_id, username, comment_text FROM table_comments 
	WHERE post_id=".$post_id." order by id DESC,parent_id ASC "; 
	$res = $con->query($qs);
	$arr = $res->fetchAll(PDO::FETCH_ASSOC);
	
	for ($i = 0, $c = count($arr); $i < $c; $i++)
    {
       $new_arr[$arr[$i]['parent_id']][] = $arr[$i];
    }

    if(isset($new_arr)) display($new_arr, NULL, 0);
?>

