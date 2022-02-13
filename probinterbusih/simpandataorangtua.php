<?php

// if($_SERVER['REQUEST_METHOD']=='POST'){


    $vsemail = $_POST['vsemail'];
    $vsusername = $_POST['vsusername'];
    $vsnamaayah = $_POST['vsnamaayah'];

    $vstanggallahir = $_POST['vstanggallahir'];
    $vsumur = $_POST['vsumur'];
    $vsmasihhidupayah = $_POST['vsmasihhidupayah'];
    $vssuku= $_POST['vssuku'];
    $vspekerjaanayah = $_POST['vspekerjaanayah'];
    $vsalamatlengkapayah = $_POST['vsalamatlengkapayah'];
    $vsnotelp = $_POST['vsnotelp'];

    $vsnamaibu = $_POST['vsnamaibu'];
    $vsmasihhidupibu = $_POST['vsmasihhidupibu'];
    $vspekerjaanibu = $_POST['vspekerjaanibu'];
    $vsalamatlengkapibu = $_POST['vsalamatlengkapibu'];

 
 
//   $vsemail = "coba";
//     $vsusername = "coba";
//     $vsnamaayah ="coba";

//     $vstanggallahir = "2000-11-11";
//     $vsumur ="coba";
//     $vsmasihhidupayah = "coba";
//     $vssuku= "coba";
//     $vspekerjaanayah = "coba";
//     $vsalamatlengkapayah ="coba";
//     $vsnotelp ="coba";

//     $vsnamaibu ="coba";
//     $vsmasihhidupibu = "coba";
//     $vspekerjaanibu ="coba";
//     $vsalamatlengkapibu = "coba";


$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");


        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 
        
        
         $sql2 = "DELETE FROM tblorangtua WHERE  email='$vsemail'";
            if(mysqli_query($con,$sql2)){
	    	}

	$sql = "INSERT INTO tblorangtua ( email, username, namaayah , tanggallahir, umur, masihhidupayah, suku , pekerjaanayah, alamatlengkapayah, notelp, namaibu, masihhidupibu, pekerjaanibu, alamatlengkapibu)
	VALUES ('$vsemail', '$vsusername', '$vsnamaayah', '$vstanggallahir' , '$vsumur', '$vsmasihhidupayah', '$vssuku' , '$vspekerjaanayah', '$vsalamatlengkapayah', '$vsnotelp' , '$vsnamaibu' , '$vsmasihhidupibu' , '$vspekerjaanibu' , '$vsalamatlengkapibu' )";



		if(mysqli_query($con,$sql)){
		
		}

  
  
   $sql3 = "UPDATE tblusers SET     statusproses='Proses' WHERE  email='$vsemail'";
            if(mysqli_query($con,$sql3)){
	    	}
  
	mysqli_close($con);


	
		
// }else{
// echo 'Terjadi Kesalahan';
// }