<?php
class datatable extends db{
	
public function placeData($data)
	{
	
	$conn=$this->connect();
	foreach ($data as $value){

    		$stmt = $conn->prepare("INSERT INTO data VALUES (?, ?, ?,?)");
		$stmt->bind_param("ssss", $value['id'], $value['name'], $value['lastN'],$value['identyfier']);
		$stmt->execute();
	}
}


public function deleteData()
{
	$sql="delete from data";
	$this->connect()->query($sql);
}
}
?>
