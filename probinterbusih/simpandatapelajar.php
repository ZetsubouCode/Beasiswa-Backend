<?php

// if($_SERVER['REQUEST_METHOD']=='POST'){


    $vsemail = $_POST['vsemail'];
    $vsusername = $_POST['vsusername'];
    
    $vssekolah = $_POST['vssekolah'];
    $vsjurusan = $_POST['vsjurusan'];

    
    $vsnilairatarataraporsmp = $_POST['vsnilairatarataraporsmp'];
    $vsnilaisttbsmp = $_POST['vsnilaisttbsmp'];
    $vsnilaiujianakhirsekolah = $_POST['vsnilaiujianakhirsekolah'];
    $vsbahasaindonesia = $_POST['vsbahasaindonesia'];
    $vsbahasainggris = $_POST['vsbahasainggris'];
    $vsmatematika = $_POST['vsmatematika'];

    $vsipa = $_POST['vsipa'];
    $vsips = $_POST['vsips'];
    $vsfisika = $_POST['vsfisika'];
    $vskimia = $_POST['vskimia'];
    $vsbiologi = $_POST['vsbiologi'];
    $vsgeografi = $_POST['vsgeografi'];
    $vsekonomi = $_POST['vsekonomi'];
    $vssosiologi = $_POST['vssosiologi'];
    $vsteknologiinformasi = $_POST['vsteknologiinformasi'];
    $vsektrakulikuler1 = $_POST['vsektrakulikuler1'];
    $vsektrakulikuler2 = $_POST['vsektrakulikuler2'];
    $vsektrakulikuler3 = $_POST['vsektrakulikuler3'];
    $vsektrakulikuler4 = $_POST['vsektrakulikuler4'];
    $vsektrakulikuler5 = $_POST['vsektrakulikuler5'];





$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");


        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 

    $sql2 = "DELETE FROM tblpelajar WHERE  email='$vsemail'";
            if(mysqli_query($con,$sql2)){
	    	}

	$sql = "INSERT INTO tblpelajar ( email, username, sekolah, jurusan, nilairatarataraporsmp ,nilaisttbsmp, nilaiujianakhirsekolah, bahasaindonesia, bahasainggris, matematika, ipa, ips, fisika , kimia, biologi, geografi, ekonomi, sosiologi, teknologiinformasi, ektrakulikuler1, ektrakulikuler2, ektrakulikuler3, ektrakulikuler4, ektrakulikuler5)
	VALUES ('$vsemail', '$vsusername' , '$vssekolah', '$vsjurusan', '$vsnilairatarataraporsmp', '$vsnilaisttbsmp',  '$vsnilaiujianakhirsekolah' , '$vsbahasaindonesia' , '$vsbahasainggris' , '$vsmatematika' , '$vsipa', '$vsips', '$vsfisika' , '$vskimia', '$vsbiologi', '$vsgeografi', '$vsekonomi', '$vssosiologi',  '$vsteknologiinformasi' , '$vsektrakulikuler1' , '$vsektrakulikuler2' , '$vsektrakulikuler3' , '$vsektrakulikuler4' , '$vsektrakulikuler5')";
	



		if(mysqli_query($con,$sql)){
			echo 'Simpan data berhasil';
		}else{
			echo 'Terjadi kesalahan, ulangi lagi!';
		}

  
	mysqli_close($con);


	
		
// }else{
// echo 'Terjadi Kesalahan';
// }