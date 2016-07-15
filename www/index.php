<?php
    require_once "/conf.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Commentator</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="/">Commentator &copy;</a>
			    </div>
			</div>
		</nav>

		<div id="content">
			<div id="post">
			<h2>POST#1</h2>
				<p>Текст (от лат. textus — «ткань; сплетение, связь, паутина, сочетание») — зафиксированная на каком-либо материальном носителе человеческая мысль; в общем плане связная и полная последовательность символов.</p>

				<p>В лингвистике термин текст используется в широком значении, включая и образцы устной речи. Восприятие текста изучается в рамках лингвистики текста и психолингвистики.</p>
			</div>

			<div id="comment_form">
				<form action="comentAdd.php" method="POST" name="CommentForm">
					<h3>Добавить комментарий</h3>

				 	<div class="input-group input-group-sm">
					    <span class="input-group-addon">@</span>
					    <input type="text" class="form-control" name="username" 
					    placeholder="Имя">
					</div>

					<div class="form-group">
					    <textarea rows="3" class="form-control" name="comment_text" placeholder="Комментарий..."></textarea>				   		
					</div>
					<div id="button">
						<input type="submit" class="btn btn-primary" value="Отправить">
					</div>
				</form>
			</div>
			<?php
				require_once 'printComments.php'; 
			?>
		</div>

		<nav class="navbar navbar-default">
		    <div class="container-fluid">
		        <div class="navbar-header">
		            <span class="navbar-brand"></span>
		        </div>
		    </div>
		</nav>
	</body>
</html>