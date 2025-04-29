<?php 

include 'connection.php';

$query = "SELECT * FROM skills";
$result = mysqli_query($conn, $query);

$skills = array();

while($row = mysqli_fetch_assoc($result)){
    $skills[] = $row;
}
echo json_encode($skills);
?>