<?php
include('dbc.php');
$sql='';
$empnum='';
$sts=0;
$empnum=$_POST['empnum'];
$sts=$_POST['sts'];
$dt="";
$rs=0;
$dt=date('Y-m-d');
if($empnum>0)
{
$sql="INSERT INTO attendance(empid,day,status) values('".$empnum."','".$dt."',".$sts.")";
//aday.php
$rs=mysql_query($sql);
echo $rs;
}else
{
    $rs=0;
    echo $rs;
}

?>
 
