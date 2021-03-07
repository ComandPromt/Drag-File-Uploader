<?php

header('Content-Type:applcation/json') ;

$uploaded = array() ; 

if (!empty($_FILES['file']['name'][0])) {

foreach ($_FILES['file']['name'] as $dir => $name) {

	mkdir('upload');
	if (move_uploaded_file($_FILES['file']['tmp_name'][$dir], 'upload/'.$folder.'/'. $name )) {
		$uploaded[]  = array('name' => $name, 
             'file' => 'upload/'.$folder.'/'. $name
			);
	}
}
}

echo json_encode($uploaded);
?>