<?php

function check_if_table_exists($db, $table)
{
    $query = "SELECT 1 FROM information_schema.tables 
        WHERE table_schema = database() AND table_name = ?";
    $stmt = mysqli_stmt_init($db);

    if (!mysqli_stmt_prepare($stmt, $query)) {
        throw new Exception('Cannot prepare sql statement');
    } else {
        mysqli_stmt_bind_param($stmt, 's', $table);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        $row = mysqli_fetch_assoc($result);

        mysqli_stmt_close($stmt);
        if ($row) {
            return true;
        } else {
            return false;
        }
    }
}

function create_users_table($db)
{
    $query = "CREATE TABLE users (
                userId INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                username varchar(255) NOT NULL,
                email varchar(255) NOT NULL,
                password varchar(255) NOT NULL
            )";
    $stmt = mysqli_stmt_init($db);

    if (!mysqli_stmt_prepare($stmt, $query)) {
        throw new Exception('Unable to prepare sql statement');
    } else {
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        $row = $result && mysqli_fetch_assoc($result);

        mysqli_stmt_close($stmt);
        if ($row) {
            return true;
        } else {
            return false;
        }
    }
}
