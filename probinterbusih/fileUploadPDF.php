
<?php
echo $_FILES['pdf']['name'] . '<br/>';


//ini_set('upload_max_filesize', '10M');
//ini_set('post_max_size', '10M');
//ini_set('max_input_time', 300);
//ini_set('max_execution_time', 300);


$target_path = "raport/";

$target_path = $target_path . basename($_FILES['pdf']['name']);

try {
    //throw exception if can't move the file
    if (!move_uploaded_file($_FILES['pdf']['tmp_name'], $target_path)) {
        throw new Exception('Could not move file');
    }

    echo "The file " . basename($_FILES['pdf']['name']) .
    " has been uploaded";
} catch (Exception $e) {
    die('File did not upload: ' . $e->getMessage());
}
?>