<?php
$target = "photo/" . basename($_FILES['files']['name']);

if (file_exists($target)) {
	// Use unlink() function to delete a file 
	if (!unlink($target)) {
		echo ("$target cannot be deleted due to an error");
	} else {
		echo ("$target has been deleted");
	}
}

if (isset($_REQUEST['submit'])) {
	if (move_uploaded_file($_FILES['files']['tmp_name'], $target)) {
		echo "uploaded";
	} else {
		echo "failed";
	}
}
