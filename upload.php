<?php
if (isset($_FILES['image'] )) {
	$file = $_FILES['image'];
	$targetDir = 'uploads/';
	$targetFile = $targetDir.basename($file['name']);

	if (move_uploaded_file($file['tmp_name'], $targetFile)) {
		echo ('Upload image successfully');
	} else {
		echo('Upload image failed');
	}
}
?>