<?php  

//select.php
 
include('db_pdo.php');

$query = "SELECT * FROM member_premier_data ORDER BY id DESC";
$statement = $connect->prepare($query);
if($statement->execute())
{
  while($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $data[] = $row;
  }
  echo json_encode($data);
}

?>