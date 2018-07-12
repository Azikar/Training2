<?php
include 'dbcon.php';
include 'datatable.php';

	
$myarray=$_REQUEST['ar'];
print_r($myarray);
$data=new datatable();
$values=array( array('id'=>3,'name'=>'jon','lastN'=>'snow','identyfier'=>'adafawdadad'),
		array('id'=>2,'name'=>'jon','lastN'=>'snow','identyfier'=>'adafawdadad'),
		array('id'=>3,'name'=>'jon','lastN'=>'snow','identyfier'=>'adafawdadad')
);
print_r($values);
$data->deleteData();
$data->placeData($myarray);



?>



