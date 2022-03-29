<?php
    include "config.php";

    $sql = "SELECT * FROM `users`";

    $result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>User</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                ?>          
                            <tr>
                                <td><?php echo $row["id"]?></td>
                                <td><?php echo $row["firstname"]?></td>
                                <td><?php echo $row["lastname"]?></td>
                                <td><?php echo $row["email"]?></td>
                                <td><?php echo $row["gender"]?></td>
                                <td><a class="btn btn-info" href="update.php?id=<?php echo $row["id"]; ?>">Edit</a>&nbsp;
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                            
                            </tr>
                       
                         <?php }
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>
</html>
