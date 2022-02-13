<?php

// if($_SERVER['REQUEST_METHOD']=='POST'){


    $vsemail = $_POST['vsemail'];
    $vsusername = $_POST['vsusername'];
    $vsnamalembagastudi = $_POST['vsnamalembagastudi'];
    $vsstatusakreditasi = $_POST['vsstatusakreditasi'];
    $vsjenis = $_POST['vsjenis'];
    $vsnamafakultas= $_POST['vsnamafakultas'];
    $vsnamajurusan = $_POST['vsnamajurusan'];
    $vsjenjangpendidikan = $_POST['vsjenjangpendidikan'];
    $vsprestasikumulatif = $_POST['vsprestasikumulatif'];
    $vsprestasisemester= $_POST['vsprestasisemester'];
    $vstamggalmasuk = $_POST['vstamggalmasuk'];

    $vstanggallulusdiharapkan = $_POST['vstanggallulusdiharapkan'];
    $vsjenjangstudi = $_POST['vsjenjangstudi'];
    $vsalamatlembaga = $_POST['vsalamatlembaga'];

    $vskabupatenkota = $_POST['vskabupatenkota'];
    $vstelepon = $_POST['vstelepon'];
    $vsrekeninglembaga = $_POST['vsrekeninglembaga'];
    $vsbank = $_POST['vsbank'];




$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");


        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 

 $sql2 = "DELETE FROM tbllembagastudi WHERE  email='$vsemail'";
            if(mysqli_query($con,$sql2)){
	    	}

	$sql = "INSERT INTO tbllembagastudi ( email, username, namalembagastudi , statusakreditasi, jenis, namafakultas, namajurusan, jenjangpendidikan, prestasikumulatif, prestasisemester , tanggalmasuk, tanggallulusdiharapkan, jenjangstudi, alamatlembaga, kabupatenkota, telepon, rekeninglembaga, bank)
	VALUES ('$vsemail', '$vsusername', '$vsnamalembagastudi',  '$vsstatusakreditasi' , '$vsjenis' , '$vsnamafakultas' , '$vsnamajurusan' , '$vsjenjangpendidikan', '$vsprestasikumulatif', '$vsprestasisemester' , '$vstamggalmasuk', '$vstanggallulusdiharapkan', '$vsjenjangstudi', '$vsalamatlembaga' , '$vskabupatenkota' , '$vstelepon' , '$vsrekeninglembaga' , '$vsbank' )";

 
  

 


		if(mysqli_query($con,$sql)){
			echo 'Simpan data berhasil';
		}else{
			echo 'Terjadi kesalahan, ulangi lagi!';
		}

  
	mysqli_close($con);


	
		
// }else{
// echo 'Terjadi Kesalahan';
// }