<?php

// if($_SERVER['REQUEST_METHOD']=='POST'){


    $vsemail = $_POST['vsemail'];
    $vsusername = $_POST['vsusername'];
    $vssekolah = $_POST['vssekolah'];
    $vsjurusan = $_POST['vsjurusan'];
    $vssemester = $_POST['vssemester'];
    $vstahunajaran = $_POST['vstahunajaran'];

    $vsnilairatarata = $_POST['vsnilairatarata'];
    $vsurlraport = $_POST['vsurlraport'];
  

    

$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");


        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 

	$sql = "INSERT INTO tblakademiksiswa ( email, username, sekolah ,jurusan, semester, tahunajaran, nilairatarata, urlraport)
	VALUES ('$vsemail', '$vsusername', '$vssekolah', '$vsjurusan',  '$vssemester' , '$vstahunajaran', '$vsnilairatarata' , '$vsurlraport' )";
  
 


		if(mysqli_query($con,$sql)){
			echo 'Simpan data berhasil';
		}else{
			echo 'Terjadi kesalahan, ulangi lagi!';
		}

  
	mysqli_close($con);


	
		
// }else{
// echo 'Terjadi Kesalahan';
// }