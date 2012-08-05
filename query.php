<?php

$mysqli = new mysqli('localhost', 'root', '', 'cls');
$text = $mysqli->real_escape_string($_GET['term']);
 
$query = "SELECT Student_id as idno, Name as fullname, Department as course, Year_Level as year FROM student WHERE Student_id LIKE '%$text%' ORDER BY Student_id ASC";
$result = $mysqli->query($query);
$json = '[';
$first = true;
while($row = $result->fetch_assoc())
{
    if (!$first) { $json .=  ','; } else { $first = false; }
    $json .= '{"value":"'.$row['idno'].'","label":"'.$row['idno'].'","fullname":"'.$row['fullname'].'","courseyrlvl":"'.$row['course']." - ".$row['year'].'"}';
}
$json .= ']';
echo $json;


?>