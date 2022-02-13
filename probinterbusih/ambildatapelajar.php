<?php

 $vsemail = $_GET['vsemail'];

$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");



        if (mysqli_connect_errno()) { 
            echo 'Database connection error: ' . mysqli_connect_error(); 
            exit(); 
        } 

         
        #Query the database to get the user details. 
        $leveldetails = mysqli_query($con, "SELECT * FROM tblpelajar WHERE email= '$vsemail' "); 

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
                'sekolah' => $row[2],
                  'jurusan' => $row[3],
              'nilairatarataraporsmp' => $row[4],
              'nilaisttbsmp' => $row[5],
              'nilaiujianakhirsekolah' => $row[6],
            'bahasaindonesia' => $row[7],
              'bahasainggris' => $row[8],
              'matematika' => $row[9],
              'ipa' => $row[10],
              'ips' => $row[11],
              'fisika' => $row[12],
              'kimia' => $row[13],
              'biologi' => $row[14],
              'geografi' => $row[15],
              'ekonomi' => $row[16],
              'sosiologi' => $row[17],
              'teknologiinformasi' => $row[18],             
              'ektrakulikuler1' => $row[19],
              'ektrakulikuler2' => $row[20],
              'ektrakulikuler3' => $row[21],
              'ektrakulikuler4' => $row[22],
              'ektrakulikuler5' => $row[23]
       
            ); 



        #Output the JSON data 
        echo json_encode($result_data);  

    //   $response["success"] = 1;
    //   echo json_encode($response);
     
?>