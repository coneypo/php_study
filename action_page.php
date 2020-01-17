<?php

$name = (string)$_POST['uname'];
$psw = (string)$_POST['psw'];

if ($name=="root") {
    echo "NAME:". "<h1>" . $name ."</h1>";
    ?>
    <?php
    echo "PWD:". "<h1>" . $psw ."</h1>";
    echo "<a href='login_success.html'></a>";
}
else{
    echo "Wrong PSW";
    echo "<a href='form_test_2.php'>Back</a>";
}

?>