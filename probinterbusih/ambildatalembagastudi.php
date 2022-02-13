<?php

 $vsemail = $_GET['vsemail'];



$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");



        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 

         
        #Query the database to get the user details. 
        $leveldetails = mysqli_query($con, "SELECT * FROM tbllembagastudi WHERE email= '$vsemail' "); 

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
                'namalembagastudi' => $row[2],
              'statusakreditasi' => $row[3],
              'jenis' => $row[4],
              'namafakultas' => $row[5],
            'namajurusan' => $row[6],
              'jenjangpendidikan' => $row[7],
              'prestasikumulatif' => $row[8],
              'prestasisemester' => $row[9],
              'tanggalmasuk' => $row[10],
              'tanggallulusdiharapkan' => $row[11],
              'jenjangstudi' => $row[12],
              'alamatlembaga' => $row[13],
              'kabupatenkota' => $row[14],
              'telepon' => $row[15],
              'rekeninglembaga' => $row[16],
              'bank' => $row[17]

            ); 



        #Output the JSON data 
        echo json_encode($result_data);  

    //   $response["success"] = 1;
    //   echo json_encode($response);
     
?>