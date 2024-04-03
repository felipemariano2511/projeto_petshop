<?php

    $connection = mysqli_connect('localhost:3500', 'root', '');
    $database = mysqli_select_db($connection,'galize');

    if (!$connection || !$database) echo mysqli_error($connection);
?>

