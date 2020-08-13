<?php
//    Check for posted data
//    if (filter_has_var(INPUT_POST, 'data')) {
//        echo 'Data Found';
//
//    } else {
//        echo 'No Data';
//
//    }
//    if (filter_has_var(INPUT_POST, 'data')) {
//        $email = $_POST['data'];
//
//        // Remove illegal character
//        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
//        echo $email . '<br>';
//
//        if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
//            echo 'Email is valid';
//        } else {
//            echo 'Email is NOT valid';
//        }
//
//    }
//$var = '<script>alert(1)</script>';
//var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
//echo $var;
//echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS)

//$filters = array(
//        "data" => FILTER_VALIDATE_EMAIL,
//        "data2" => array(
//                "filter" => FILTER_VALIDATE_INT,
//                "option" => array(
//                        "min_range" => 1,
//                        "max_range" => 100
//                )
//        )
//);

//print_r(filter_input_array(INPUT_POST, $filters))
$arr = array(
        "name" => "brad traversy",
        "age" => "350",
        "email" => "brad@gmail..com"
);

$filters = array(
        "name" => array(
                "filter" => FILTER_CALLBACK,
                "options" => "ucwords"
        ),
        "age" => array(
                "filter" => FILTER_VALIDATE_INT,
                "options" => array(
                        "min_range" => 1,
                        "max_range" => 120
                )
        ),
        "email" => FILTER_VALIDATE_EMAIL
);

print_r(filter_var_array($arr, $filters));

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>
