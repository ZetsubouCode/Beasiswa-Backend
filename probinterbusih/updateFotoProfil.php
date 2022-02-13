<?php
$email = $_POST['vsemail'];
$urlphoto = $_POST['vsurlphoto'];

$con = mysqli_connect("localhost", "root", "", "cerx4333_dbinterbusih");

if (mysqli_connect_errno()) {
    echo 'Database connection error: ' . mysqli_connect_error();
    exit();
}

$sql = "UPDATE tblpribadi
        SET urlphoto='$urlphoto'
        WHERE email='$email'
    ";

if (mysqli_query($con, $sql)) {
    echo 'Update data berhasil';
} else {
    echo 'Terjadi kesalahan, ulangi lagi!';
    echo $sql;
}

mysqli_close($con);
