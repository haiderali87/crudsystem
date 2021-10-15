<?php
include_once("connection.php");
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO users(name,email,password,mobile)VALUES('$name','$email','$password','$mobile')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location:show.php");
    } else {
        header("location:signup.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.6/css/bootstrap.min.css">
    <title>Sunday Crud</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Name :</label>
                <input type="text" name="name" class="form-control w-50">
            </div>
            <div class="form-group">
                <label for="">Email address</label>
                <input type="email" name="email" class="form-control w-50">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control w-50">
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="number" name="mobile" class="form-control w-50">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



    <script type="text/javascript" src="bootstrap-4.6/js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap-4.6/js/popper.js"></script>

</body>

</html>