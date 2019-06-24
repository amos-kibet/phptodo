<?php
require "db.php";

//Declaring formfield variables
// Escape user inputs for security
$task_name = mysqli_real_escape_string($conn, $_REQUEST['task_name']);
$date_todo = mysqli_real_escape_string($conn, $_REQUEST['date_todo']);
$status = mysqli_real_escape_string($conn, $_REQUEST['status']);
//Adding tasks to table in db
$sqlinsert = "INSERT INTO `tasks`(`task_id`, `task_name`, `date_todo`, `status`) 
                              VALUES (null,'$task_name',$date_todo,'$status')";
//Checking if records were added successfully
if(mysqli_query($conn, $sqlinsert)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sqlinsert. " . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
//mysqli_query($conn, $sqlinsert) or die(mysqli_error($conn));

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a new task</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="js/bootstrap.js"></script>-->
</head>
<body>
<?php
require "navbar.php";
//require "db.php";

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card">
                <div class="card-header bg-secondary">New Task</div>
                <div class="card-body">
                    <form action="addtask.php" method="post">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="task_id">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="status">
                        </div>
                        <div class="form-group">
                            <label>Date:</label>
                            <input type="date" class="form-control" name="date_todo" placeholder="DD/MM/YY">
                        </div>
                        <div class="form-group">
                            <label>New Task:</label>
                            <input type="text" class="form-control" name="task_name" placeholder="Type New Task">
                        </div>
                        <button name="submit" class="btn btn-secondary">Add Task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
