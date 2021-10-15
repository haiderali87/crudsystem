<?php
include_once("connection.php");
if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    $sql = "UPDATE users SET name='$name',email='$email',password='$password',mobile='$mobile' WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location:show.php");
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
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM users WHERE id=$id";
            $res = mysqli_query($conn, $sql);
            foreach ($res as $data) {
            ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name :</label>
                    <input type="text" name="name" value="<?php echo $data['name'] ?>" class="form-control w-50">
                </div>
                <div class="form-group">
                    <label for="">Email address</label>
                    <input type="email" name="email" value="<?php echo $data['email'] ?>" class="form-control w-50">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" value="<?php echo $data['password'] ?>" class=" form-control w-50">
                </div>
                <div class="form-group">
                    <label for="">Mobile</label>
                    <input type="number" name="mobile" value="<?php echo $data['mobile'] ?>" class=" form-control w-50">
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" class="form-control w-50">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Edit</button>
            <?php } ?>
        </form>
    </div>



    <script type="text/javascript" src="bootstrap-4.6/js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap-4.6/js/popper.js"></script>

</body>

</html>