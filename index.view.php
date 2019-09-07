<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            
          </ul>
          
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a href="create.php" class="btn btn-success">New post</a>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post) :?>
                        <tr>
                        <th scope="row"><?php echo $post['id'] ?></th>
                        <td>
                            <a href="show.php?id=<?php echo $post['id'] ?>">
                                <?php echo $post['title'] ?>
                            </a>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $post['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?php echo $post['id'] ?>" class="btn btn-danger" onCLick="return confirm('are you sure?')">Delete</a>
                        </td>
                        </tr>
                        <?php  endforeach; ?>
                        
                    </tbody>
                    </table>
            </div>
        </div>
        
        
    </div>
</body>
</html>