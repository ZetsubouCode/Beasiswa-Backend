<?php

// if($_SERVER['REQUEST_METHOD']=='POST'){


    $vsemail = $_POST['vsemail'];
    $vsusername = $_POST['vsusername'];
    $vsnorekening = $_POST['vsnorekening'];
    $vscabang = $_POST['vscabang'];
    $vsatasnama = $_POST['vsatasnama'];

//   $vsemail ="coba";
//     $vsusername = "coba";
//     $vsnorekening ="coba";
//     $vscabang ="coba";
//     $vsatasnama = "coba";

 

$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");


        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 
        
        
          $sql2 = "DELETE FROM tbldataperbankan WHERE  email='$vsemail'";
            if(mysqli_query($con,$sql2)){
	    	}
	    	
	    	

	$sql = "INSERT INTO tbldataperbankan ( email, username, norekening ,cabang, atasnama)
	VALUES ('$vsemail', '$vsusername', '$vsnorekening', '$vscabang',  '$vsatasnama'  )";


		if(mysqli_query($con,$sql)){
			echo 'Simpan data berhasil';
		}else{
			echo 'Terjadi kesalahan, ulangi lagi!';
		}

  
	mysqli_close($con);


	
		
// }else{
// echo 'Terjadi Kesalahan';
// }