<?php

    
    include './db.php';
    // extract($_GET);
    $id = $_GET['test'];
    // echo $id;
    // exit();
    $delete = "DELETE FROM users WHERE id='$id'";
    $deleteResult = mysqli_query($conn, $delete);

?>