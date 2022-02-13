<?php

 $vsemail = $_GET['vsemail'];

$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");



        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 

         
        #Query the database to get the user details. 
        $leveldetails = mysqli_query($con, "SELECT * FROM tblorangtua WHERE email= '$vsemail' "); 

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
              'namaayah' => $row[2],
              'tanggallahir' => $row[3],
              'umur' => $row[4],
              'masihhidupayah' => $row[5],
              'suku' => $row[6],
              'pekerjaanayah' => $row[7],
              'alamatlengkapayah' => $row[8],
              'notelp' => $row[9],
              'namaibu' => $row[10],
              'masihhidupibu' => $row[11],
              'pekerjaanibu' => $row[12],
              'alamatlengkapibu' => $row[13]

            ); 


        #Output the JSON data 
        echo json_encode($result_data);  

    //   $response["success"] = 1;
    //   echo json_encode($response);
     
?>