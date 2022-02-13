<?php 

$PdfUploadFolder = 'raport/';
$ServerURL = 'https://www.cerdasplayer.my.id/probinterbusih/'.$PdfUploadFolder;

$PdfName = $_POST['name']; 
$PdfInfo = pathinfo($_FILES['pdf']['name']); 
$PdfFileExtension = $PdfInfo['extension']; 

$PdfFileURL = $ServerURL . $PdfName . '.' . $PdfFileExtension; 
// $PdfFileFinalPath = $ServerURL . $PdfName . '.'. $PdfFileExtension; 

 try{
     
move_uploaded_file($_FILES['pdf']['tmp_name'],$PdfFileURL); 

 }catch(Exception $e){ 
 echo 'gagal';
 
 }

?>