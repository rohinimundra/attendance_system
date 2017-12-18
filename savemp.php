<?php
session_start();  //start of session
include('mysession.php');

/*Database file connect----saveemp.php*/
include('dbc.php');
/*Variables*/
$fn="";
$ln="";
$des="";
$addr="";
$sex="";
$age=0;
$sal=0;
$doj="";
$con="";
/*Received data from addemp.php*/
$fn=$_POST['tx1'];
$ln=$_POST['tx2'];
$des=$_POST['tx3'];
$addr=$_POST['tx4'];
$sex=$_POST['tx5'];
$age=$_POST['tx6'];
$sal=$_POST['tx7'];
$doj=$_POST['tx8'];
$con=$_POST['tx9'];
if( ($fn=="") ||($sal=="") || ($addr=="") || ($ln=="") || ($age=="") || ($doj=="") || ($con==""))
   {
    /*FIELDS NOT FILLEDUP PROPERLY...MOVE TO ERROR PAGE*/
     header("Location: employee_details.php");
   }else
   {
    /*IF OKAY SAVE IN DB*/
   
$sql_ins="INSERT INTO employee (eid, fname, lname, designation, address, sex, age, salary, dateofjoining, contact) VALUES (NULL,'".$fn."', '".$ln."', '".$des."', '".$addr."', '".$sex."', '".$age."', '".$sal."', '".$doj."', '".$con."')";
$rs=0;
 $rs=mysql_query($sql_ins);
 
 if($rs>0)
 {
    /*get last id from employee table*/
    $get_userid=0;
    $sql_max="SELECT MAX(eid) AS eid FROM employee";
    //$get_userid FOR GET/KEEP LAST INSERTED EMPLOYEE ID
    $r_value=mysql_query($sql_max);
    while($row1=mysql_fetch_array($r_value))
    {
        $get_userid=$row1['eid'];
    }
  //  echo $get_userid;
    
    /*END---------get last id from employee table*/
    /*RANDOM PASSWORD GENERATE...... HERE*/
    $str2 = '123456789abcdefghijklmnopqrstuvwxyz';
    $shuffled2 = str_shuffle($str2);
    $new_ran1=substr($shuffled2,0,5);
    $new_ran2=substr((string)microtime(), 2, 4);
    $new_pass="";
    $new_pass=$new_ran1.''.$new_ran2;
    
    /*END---RANDOM PASSWORD GENERATE...... HERE*/
    $final_result=0;
    $sql_user="INSERT INTO users (uid,username,password,userstatus,category) VALUES('".$get_userid."','".$fn."','".$new_pass."',1,2)";
    $final_result=mysql_query($sql_user);
    if($final_result>0)
    {
         header("Location: employee_details.php");
    }
 }
 else
 {
     header("Location: success.php?id=101");
 }
   }
?>