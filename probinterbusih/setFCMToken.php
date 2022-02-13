<?php
$email = $_POST['vsemail'];
$fcm_token = $_POST['vstoken'];
if ($fcm_token == "") {
    echo 'Token tidak ditemukan';
    return false;
}
$con = mysqli_connect("localhost", "root", "", "cerx4333_dbinterbusih");

if (mysqli_connect_errno()) {
    echo 'Database connection error: ' . mysqli_connect_error();
    exit();
}

$sql = "UPDATE tblusers
        SET fcm_token='$fcm_token'
        WHERE email='$email'
    ";

if (mysqli_query($con, $sql)) {
    echo 'Update data berhasil';
} else {
    echo 'Terjadi kesalahan, ulangi lagi!';
    echo $sql;
}

mysqli_close($con);
