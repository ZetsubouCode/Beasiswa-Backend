<?php

 $vscari = $_GET['vscari'];
 
//  $vscari='a';

$con = mysqli_connect("localhost","root","", "cerx4333_dbinterbusih");



    $sql = "SELECT * FROM tblpribadi  WHERE status='Terima' && username like '%$vscari%' ";

    $result = mysqli_query($con, $sql) or die("Error in Selecting " . mysqli_error($con));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
   
    $akhir = array(
   	'DataPribadi' => $emparray
    );

 	echo json_encode($akhir);


    //close the db connection
    mysqli_close($con);
?>
