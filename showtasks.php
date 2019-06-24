<?php

require "db.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show My Tasks</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
<?php
require "db.php";
require 'navbar.php';
?>

<div class="container">
    <table class="display" id="tasks">
        <thead>
        <tr>
            <th>Id</th>
            <th>Task</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        <?php
        require "db.php";
        $sql = "select * from tasks order by task_id desc";
        $results = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($results)) {
            extract($row);
            echo "<tr>
                         <td>$task_id</td>
                         <td>$task_name</td>
                         <td>$date_todo</td>
                         <td>$status</td>
                         <td><a href='complete.php?id=$task_id' class='btn btn-success'>Complete</a>
                            <a href='delete.php?id=$task_id' class='btn btn-danger' onclick=\"return confirm('Do you want to delete this record?');\" >Delete</a>
                         </td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('#tasks').DataTable();
    });
</script>
</body>
</html>
