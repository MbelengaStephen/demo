<?php 
    include "config.php";
    
    if (isset($_POST["submit"])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
 
    }
    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$firstname', '$lastname', '$email', '$password','$gender')";

    $result = $conn->query($sql);

    if($result == TRUE){
        echo "New record created successfully.";
    }
    else{
        echo "Error" . $sql . "<br>" . $conn->errorr;
    }
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    
<h2> Sign Up Form.</h2>
<form action="" method="post">
    <fieldset>
        <legend>Personal Infomation.</legend><br>
        First Name: <br>
        <input type="text" name="firstname"><br><br>
        Last Name: <br>
        <input type="text" name="lastname"><br><br>
        Email: <br>
        <input type="text" name="email"><br><br>
        Password: <br>
        <input type="password" name="password"><br><br>
        Gender: <br>
        <label for="gender">Female</label>
        <input type="radio" name="gender" value="Female">
        <label for="gender">Male</label>
        <input type="radio" name="gender" value="Male"><br><br>
        <input type="submit" name="submit" value="submit">
    </fieldset>
</form>

</body>
</html>
