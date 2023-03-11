<?php 

include './db.php';

extract($_POST);

if(isset($_POST['studentName']) && ($_POST['studentDepartment']) && ($_POST['studentEmail']) && ($_POST['studentPhone'])){
    
    $insert = "INSERT INTO users(name, department, email, phone) VALUES('$studentName','$studentDepartment','$studentEmail','$studentPhone')";

    $query = mysqli_query($conn,$insert);
    
}

?>