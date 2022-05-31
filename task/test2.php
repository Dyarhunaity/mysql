<?php
header("Content-Type:application/json");
include('./test.php');

$sql = "SELECT * FROM api ";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_assoc($result)){
    $arr['id']= $row["emp_id"];
    $arr['name']= $row["emp_name"];
    $arr['email']=$row['emp_email'];
    $arr['salary']=$row['emp_salary'];

   
}
 echo json_encode($arr);


?>