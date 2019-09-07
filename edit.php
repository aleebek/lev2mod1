<?php
include 'functions.php';
$db = include 'database/start.php';
$post = $db->getOne('posts', $_GET['id']); 
var_dump($post);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="update.php?id=<?php echo $post['id']?>" method="POST">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $post['title']?>">
                        
                    </div>
                    
                    <button type="submit" class="btn btn-warning">Edit Post</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>