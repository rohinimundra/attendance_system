<?php
session_start();  //start of session
include('mysession.php');

/*Database file connect----saveemp.php*/
include('dbc.php');

extract($_POST);
$qry=mysql_query("update employee SET fname='$tx1',lname='$tx2',designation='$tx3', address='$tx4',sex='$tx5',age='$tx6',salary='$tx7',dateofjoining='$tx8',contact='$tx9' where eid='$eid'")or die(mysql_error());
if($qry)
{
   header("Location: update_employee.php");
}
else
{
	print mysql_error();
}




?>
