<?php
    $bill = $_POST['bill'];

    $connection = mysqli_connect('localhost', 'daniil', 'rh4h69rwg', 'my_db');
    if (!$connection) {
        $connect_error = true;
        include '../results/results.php';
        die();
    } else {
        $query = "DELETE FROM `balance_table` WHERE id=? LIMIT 1";
        $stmt = mysqli_prepare($connection, $query);
        $stmt->bind_param('i', $bill);
        $stmt->execute();
        $success = true;
        if ($stmt->affected_rows == 0 && !$stmt->error) {
            $success = false;
            include '../results/results.php';
        } else {
            include '../results/results.php';
        }
        $stmt->close();
        die();
    }
