<?php
    // Message Vars
$msg = '';
$msgClass = '';
    // check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // check required fields

    if (!empty($email) && !empty($name) && !empty($message)){
        // Passed
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $msg = 'Please use valid email';
            $msgClass = 'alert-danger';
        } else {
            echo 'PASSED';
        }
    } else {

        // Failed
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if ($msg !=''):?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg;?></div>
        <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



    <script type="text/javascript" src="js/bootstrap.min.css"></script>
</body>
</html>