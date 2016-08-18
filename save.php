<?php 

// save data here 

header('Content-Type: application/json');
echo json_encode(array(
	'status' => 1,
	'des' => $_POST['des']
));