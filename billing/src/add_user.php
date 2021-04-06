<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $bill = $_POST['bill'];
    $phone = $_POST['phone'];
    $balance = $_POST['balance'];

    $connection = mysqli_connect('localhost', 'daniil', 'rh4h69rwg', 'my_db');
    if (!$connection) {
        $connect_error = true;
        include '../results/results.php';
        die();
    } else {
        $query = "INSERT INTO `balance_table`(id, phone, balance) VALUES(?, ?, ?)";
        $stmt = mysqli_prepare($connection, $query);
        $stmt->bind_param('isi', $bill, $phone, $balance);
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