<?php
include 'dbcon.php';
include 'datatable.php';

	
$myarray=$_REQUEST['ar'];
print_r($myarray);
$data=new datatable();

$data->deleteData();
$data->placeData($myarray);



?>



