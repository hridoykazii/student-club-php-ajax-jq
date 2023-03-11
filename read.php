<?php 
include './db.php';

extract($_POST);


$read = "SELECT * FROM users";

$output = mysqli_query($conn, $read);
while($row = mysqli_fetch_array($output)){?>

    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['department']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['phone']?></td>
        <td>
            <a href="#" class="btn btn-sm btn-success">Edit</a>
            <a href="#" class="btn btn-sm btn-danger" onclick="onDelete(<?php echo $row['id']?>)">Delete</a>
        </td>
    </tr>

<?php }

?>
