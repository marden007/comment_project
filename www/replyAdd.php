<?php 
$comment_id = $_GET['comment_id'];
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
            <div id="comment_form">
                <form action="replyAdd-.php" method="POST" name="CommentForm">
                    <h3>Ответ</h3>

                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">@</span>
                        <input type="hidden" name="comment_id" <?php echo 'value="'.$_GET['comment_id'].'"';?> >

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