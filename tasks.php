<?php

//Create table called tasks
if (isset($_POST['task_id'])) {
    require "db.php";
    //Create variables for table columns
    extract($_POST);
    $sqltable = "create table tasks(
             task_id INT(10) PRIMARY KEY AUTO_INCREMENT,
             task_name VARCHAR(50) NOT NULL,
             date_todo DATETIME_INTERVAL_CODE NOT NULL,
             status VARCHAR NOT NULL(50)
)";

//Check if table created successfully
    if (mysqli_query($conn, $sqltable)) {
        echo "Table created successfully";
    } else {
        echo "Error creating table $sqltable" . mysqli_error($conn);
    }

}