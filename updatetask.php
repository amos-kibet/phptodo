<?php

if (isset($_GET["id"])){
    $id = $_GET["task_id"];
    require "db.php";
    $sql = "select * from tasks where status = $status";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);
}

if (isset($_POST["update"])){
    //$date_todo = $_REQUEST["date_todo"];
    //$task_name = $_REQUEST["task_name"];
    $id = $_REQUEST["id"];
    require 'db.php';
    $sql = "update tasks set status=$status where task_id=$id";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
    header("location:showtasks.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Movie</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<?php
require "navbar.php";
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">


            <div class="card">
                <div class="card-header">
                    Updating Task <?php echo $task_name; ?>
                </div>
                <div class="card-body">
                    <form action="updatetask.php" method="post">


                        <input type="hidden" name="id" value="<?=$task_id?>">

                        <div class="form-group">
                            <label for="title">Complete/Delete</label>
                            <input min="1" type="text" class="form-control" name="task_name" required>
                        </div>
                        <button name="update" class="btn btn-info btn-block">Update Task</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>