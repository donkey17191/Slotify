<?php
$conn = mysqli_connect('localhost', 'root', '123456', 'phpblog');

// check connection

if (mysqli_connect_errno()) {
    echo 'Fail to connect to MySQL' . mysqli_connect_errno();
}
