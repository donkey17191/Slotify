<?php

require('config/db.php');
require('config/config.php');
$id = mysqli_real_escape_string($conn, $_GET['id']);

$query = 'SELECT * FROM posts WHERE id = '.$id;  // Create Query


//Get Result

$result = mysqli_query($conn, $query);

// Fetch Data
$post = mysqli_fetch_assoc($result);

//var_dump($posts);

// Free Result

mysqli_free_result($result);

// Close Connection
mysqli_close($conn);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Blog</title>
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
</head>
<body>
<div class="container">
    <a href="<?php echo ROOT_URL ?>" class="btn btn-dark">Back</a>
    <h1><?php echo $post['title'];?></h1>
    <small>Created on <?php echo $post['created_at'];?> by <?php echo $post['author'];?></small>
    <p><?php echo $post['body'];?></p>
</div>


</body>
</html>

