<?php 

$msg = move_uploaded_file($_FILES["photos"]["tmp_file"], $_FILES["photos"]["name"]);
if ($msg) {
	echo "Image Uploaded";
}else
{
	echo "Images error";
}
?>