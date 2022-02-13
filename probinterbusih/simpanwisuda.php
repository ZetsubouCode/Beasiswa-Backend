<?php

// if($_SERVER['REQUEST_METHOD']=='POST'){


    $vsemail = $_POST['vsemail'];
    $vsusername = $_POST['vsusername'];
    $vsperguruantinggi = $_POST['vsperguruantinggi'];
    $vsprogramstudi = $_POST['vsprogramstudi'];
    $vsjenjangpendidikan = $_POST['vsjenjangpendidikan'];
    $vstanggalselesai = $_POST['vstanggalselesai'];
    $vsipk = $_POST['vsipk'];
    $vsurlijazah = $_POST['vsurlijazah'];
    
    
  
    
    
    //  $vsemail = "doba";
    // $vsusername = "doba";
    // $vsperguruantinggi =  "doba";
    // $vsprogramstudi =  "doba";
    // $vsjenjangpendidikan =  "doba";
    // $vstanggalselesai = "2020-11-11";
    // $vsipk = "doba";
    // $vsurlijazah = "doba";
    


$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");


        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 

	$sql = "INSERT INTO tblwisuda ( email, username, perguruantinggi ,programstudi, jenjangpendidikan, tanggalselesai, ipk, urlijazah)
	VALUES ('$vsemail', '$vsusername', '$vsperguruantinggi', '$vsprogramstudi',  '$vsjenjangpendidikan' , '$vstanggalselesai' , '$vsipk' , '$vsurlijazah' )";
	
	


		if(mysqli_query($con,$sql)){
			echo 'Simpan data berhasil';
		}else{
			echo 'Terjadi kesalahan, ulangi lagi!';
		}

  
	mysqli_close($con);


	
		
// }else{
// echo 'Terjadi Kesalahan';
// }