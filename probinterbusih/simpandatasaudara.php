<?php

// if($_SERVER['REQUEST_METHOD']=='POST'){


    $vsemail = $_POST['vsemail'];
    $vsusername = $_POST['vsusername'];
    $vsanakke = $_POST['vsanakke'];
    $vsnama = $_POST['vsnama'];
    $vsumur = $_POST['vsumur'];
    $vsalamat = $_POST['vsalamat'];
    $vsketerangan = $_POST['vsketerangan'];



$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");


        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 

	$sql = "INSERT INTO tblsaudara ( email, username, anakke ,nama, umur, alamat, keterangan),
	VALUES ('$vsemail', '$vsusername', '$vsanakke', '$vsnama',  '$vsumur' , '$vsalamat' , '$vsketerangan'  )";


		if(mysqli_query($con,$sql)){
			echo 'Simpan data berhasil';
		}else{
			echo 'Terjadi kesalahan, ulangi lagi!';
		}

  
	mysqli_close($con);


	
		
// }else{
// echo 'Terjadi Kesalahan';
// }