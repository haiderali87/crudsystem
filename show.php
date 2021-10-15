<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.6/css/bootstrap.min.css">
    <title>Sunday Crud With php</title>
</head>

<body>
    <div class="container">
        <h2 class="text-primary text-uppercase text-center">yor can manage your account here</h2>
        <a href="index.php" class="btn btn-info">Go Back</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">MOBILE</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once("connection.php");
                $sql = "SELECT * FROM users";
                $res = mysqli_query($conn, $sql);
                foreach ($res as $row) {

                ?>


                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['password']  ?></td>
                        <td><?php echo $row['mobile']  ?></td>
                        <td><a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">EDIT</a></td>
                        <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">DELETE</a></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript" src="bootstrap-4.6/js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap-4.6/js/popper.js"></script>

</body>

</html>