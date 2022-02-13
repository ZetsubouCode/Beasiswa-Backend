<?php

// if($_SERVER['REQUEST_METHOD']=='POST'){


    $vsemail = $_POST['vsemail'];
    $vsusername = $_POST['vsusername'];

    $vsnamakeluarga = $_POST['vsnamakeluarga'];
    $vsnamadepan = $_POST['vsnamadepan'];
    $vsnotelp = $_POST['vsnotelp'];

    $vsnoktp = $_POST['vsnoktp'];
    $vstempatlahir = $_POST['vstempatlahir'];

    $vstanggallahir = $_POST['vstanggallahir'];
    $vsjeniskelamin = $_POST['vsjeniskelamin'];
    $vsalamatlengkap = $_POST['vsalamatlengkap'];
    $vsurlphoto = $_POST['vsurlphoto'];
    $vsalamattetap = $_POST['vsalamattetap'];
    $vsalamatsementara = $_POST['vsalamatsementara'];

    $vsareaasal = $_POST['vsareaasal'];
    $vsagama = $_POST['vsagama'];
    $vssuku = $_POST['vssuku'];
    $vswilayahadat = $_POST['vswilayahadat'];
    $vstipemember = $_POST['vstipemember'];


//  $vsemail = "coba";
//     $vsusername = "coba";

//     $vsnamakeluarga = "coba";
//     $vsnamadepan = "coba";
//     $vsnotelp = "coba";

//     $vsnoktp ="coba";
//     $vstempatlahir = "coba";

//     $vstanggallahir ="2000-11-11";
//     $vsjeniskelamin = "coba";
//     $vsalamatlengkap ="coba";
//     $vsurlphoto = "coba";
//     $vsalamattetap ="coba";
//     $vsalamatsementara ="coba";

//     $vsareaasal ="coba";
//     $vsagama = "coba";
//     $vssuku = "coba";
//     $vswilayahadat = "coba";
//     $vstipemember = "coba";


$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");


        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 
        
	    $sql2 = "DELETE FROM tblpribadi WHERE  email='$vsemail'";
            if(mysqli_query($con,$sql2)){
	    	}

	$sql = "INSERT INTO tblpribadi ( email, username,  namakeluarga, namadepan, notelp,noktp, tempatlahir, tanggallahir, jeniskelamin, alamatlengkap , urlphoto, alamattetap, alamatsementara, areaasal, agama, suku, wilayahadat, tipemember, status )
	VALUES ('$vsemail', '$vsusername',   '$vsnamakeluarga' , '$vsnamadepan' , '$vsnotelp' , '$vsnoktp' , '$vstempatlahir' , '$vstanggallahir', '$vsjeniskelamin', '$vsalamatlengkap' , '$vsurlphoto', '$vsalamattetap', '$vsalamatsementara' , '$vsareaasal' , '$vsagama' , '$vssuku' , '$vswilayahadat', '$vstipemember', '')";



		if(mysqli_query($con,$sql)){
			echo 'Simpan data berhasil';
		}else{
			echo 'Terjadi kesalahan, ulangi lagi!';
		}

  
	mysqli_close($con);


	
		
// }else{
// echo 'Terjadi Kesalahan';
// }