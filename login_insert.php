<?php
session_start();
include('dbc.php');
$un="";
$pass="";

$dbun="";
$dbpass="";
$dbuid=0;
/*DROM INDEX PAGE UN-PASS*/
$un=trim(strtolower($_POST['log_username']));
$pass=trim($_POST['log_pass1']);

$status=1;
$category="";
//PASS INDEX PAGE USERNAME AND PASSWORD TO DATABASE MYSQL--CHECK VALID
$sql="SELECT uid,username,password,login_status,category FROM users WHERE username='".$un."' AND password='".$pass."'";

$result=mysql_query($sql);
while($output=mysql_fetch_array($result))
{
$dbuid=$output['uid'];
$dbun=strtolower($output['username']);
$dbpass=$output['password'];
$status=$output['login_status'];
$category=$output['category'];
}



if( ($dbun==$un) && ($dbpass==$pass)  )
{
    $_SESSION['curr_id']=$dbuid;
    $_SESSION['curr_pass']=$dbpass;
    $_SESSION['status']=$status;
    $_SESSION['user']=$dbun;
    $_SESSION['category']=$category;
    /*Save for login history of use*/
    
    
/*for todays date*/



        $sql_history="INSERT INTO userlogin(uid) VALUES($dbuid)";
        mysql_query($sql_history);
        
        if($category=='1')
        {
            header("Location: admin.php");
        }else
        {
            header("Location: employee.php");
        }
}else
{
    header("Location:invalid.php?error=2");
}
exit(0);
?>