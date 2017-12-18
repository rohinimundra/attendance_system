<?php
include('dbc.php');
$sql='';
$emp_number='';
$emp_number=$_POST['enum'];

$sql="DELETE FROM employee WHERE eid=".$emp_number;
//delete_ajax_emp.php
$rs=mysql_query($sql);
echo $rs;

?>
 
