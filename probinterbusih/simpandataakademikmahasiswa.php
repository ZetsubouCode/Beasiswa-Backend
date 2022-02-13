<?php

// if($_SERVER['REQUEST_METHOD']=='POST'){


    $vsemail = $_POST['vsemail'];
    $vsusername = $_POST['vsusername'];
    $vspergururantinggi = $_POST['vspergururantinggi'];
    $vsprogramstudi = $_POST['vsprogramstudi'];
    $vssemester = $_POST['vssemester'];
    $vstahunajaran = $_POST['vstahunajaran'];
     $vsipk = $_POST['vsipk'];
    $vsurltranskrip = $_POST['vsurltranskrip'];
  

//   $vsemail = "coba2@gmail.com";
//     $vsusername = "coba";
//     $vspergururantinggi = "coba";
//     $vsprogramstudi =  "coba";
//     $vssemester =  "coba";
//     $vstahunajaran = "coba";
//      $vsipk = "coba";
//     $vsurltranskrip = "coba";

$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");


        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 

	$sql = "INSERT INTO tblakademikmahasiswa ( email, username, perguruantinggi ,programstudi, semester, tahunajaran, ipk, urltranskrip )
	VALUES ('$vsemail', '$vsusername', '$vspergururantinggi', '$vsprogramstudi',  '$vssemester' , '$vstahunajaran' , '$vsipk', '$vsurltranskrip' )";
  


		if(mysqli_query($con,$sql)){
			echo 'Simpan data berhasil';
		}else{
			echo 'Terjadi kesalahan, ulangi lagi!';
		}

  
	mysqli_close($con);


	
		
// }else{
// echo 'Terjadi Kesalahan';
// }