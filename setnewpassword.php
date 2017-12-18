<?php
session_start();  //start of session
include('mysession.php');
$un="";
//setnewpassword---setempass
include('dbc.php');


$pass=$_GET['pass'];
$employee_id=0;
$employee_id=$_GET['empid'];
$val=0;
//echo $employee_id;
if($employee_id>0)
{

$newsql="UPDATE users SET password='".$pass."' WHERE uid=".$employee_id;

    $val=mysql_query($newsql);
    if($val==1)
    {
        echo "done";
    }else
    {
        echo "problem";
    }
}
{
    echo 'Sorry ,password can not change!!! Try again.';
}
?>