<?php

if (isset($_GET['id'])){
    $id = $_GET["id"];
    //extract($_GET);

    require "db.php";
    $sql = "delete from tasks where task_id = $id";
    mysqli_query($conn,$sql);
}
header("location:showtasks.php"); //redirects to showtasks.php