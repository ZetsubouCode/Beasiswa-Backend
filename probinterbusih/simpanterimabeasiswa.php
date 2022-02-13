<?php

// if($_SERVER['REQUEST_METHOD']=='POST'){


    $vsemail = $_POST['vsemail'];
   

$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");


        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 
        
    $sql2 = "UPDATE tblusers SET statusproses='Terima' WHERE email='$vsemail' ";
 	if(mysqli_query($con,$sql2)){
			echo 'Simpan data berhasil';
		}

	$sql = "UPDATE tblpribadi SET status='Terima' WHERE email='$vsemail' ";
 

		if(mysqli_query($con,$sql)){
			echo 'Simpan data berhasil';
		}else{
			echo 'Terjadi kesalahan, ulangi lagi!';
		}

  
	mysqli_close($con);


	
		
// }else{
// echo 'Terjadi Kesalahan';
// }