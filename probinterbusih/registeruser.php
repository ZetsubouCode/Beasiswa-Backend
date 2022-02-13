<?php

// if($_SERVER['REQUEST_METHOD']=='POST'){


     
  $vsemail = $_POST['vsemail'];
  $vspassword= $_POST['vspassword'];
  $vsusername = $_POST['vsusername'];
  $vsnohp= $_POST['vsnohp'];
  $vstipemember= $_POST['vstipemember'];



$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");


        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 
   

	$sql = "INSERT INTO tblusers (email,  password, username, nohp, tipemember , statusproses) 
	VALUES ('$vsemail', '$vspassword', '$vsusername' ,'$vsnohp' , '$vstipemember','')";


		if(mysqli_query($con,$sql)){
			echo 'Simpan user berhasil';
		}else{
			echo 'Terjadi kesalahan, ulangi lagi!';
		}

	mysqli_close($con);
		
// }else{
// echo 'Terjadi Kesalahan';
// }