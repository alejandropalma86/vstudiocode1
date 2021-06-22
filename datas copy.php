<?php
header('Content-Type: application/json');
$conn = mysqli_connect("localhost","root","","chart");
$sqlQuery = "SELECT tbm.student_id,tbm.student_name,tbm.marks, tbt.timesum 
FROM tbl_marks  AS tbm, tbl_times AS tbt
ORDER BY student_id";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
?>