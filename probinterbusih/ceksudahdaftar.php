<?php 

        $vsemail = $_GET['vsemail'];
        // $vspassword = $_GET['vspassword'];

            // $vsemail = "coba@gmail.com";
        // $vspassword = "12345678";
        


$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");



        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 

         
        #Query the database to get the user details. 
        $leveldetails = mysqli_query($con, "SELECT * FROM tblpribadi WHERE email= '$vsemail' "); 

        #If no data was returned, check for any SQL errors 
        if (!$leveldetails) { 
	echo 'Could not run query: ' . mysqli_error($con); 
          		exit;
        } 
  
        #Get the first row of the results 
        $row = mysqli_fetch_row($leveldetails); 

        #Build the result array (Assign keys to the values) 
             $result_data = array( 
              'email' => $row[0],
              'username' => $row[1],
              'namakeluarga' => $row[2],
              'namadepan' => $row[3],
              'notelp' => $row[4],
            'noktp' => $row[5],
            'tempatlahir' => $row[6],
            'tanggallahir' => $row[7],
            'jeniskelamin' => $row[8],
            'alamatlengkap' => $row[9],
            'urlphoto' => $row[10],
            'alamattetap' => $row[11],
            'alamatsementara' => $row[12],
            'areaasal' => $row[13],
            'agama' => $row[14],
            'suku' => $row[15],
            'wilayahadat' => $row[16],
            'tipemember' => $row[17],
            'status' => $row[18]

            ); 



        #Output the JSON data 
        echo json_encode($result_data);  

    //   $response["success"] = 1;
    //   echo json_encode($response);
     
?>