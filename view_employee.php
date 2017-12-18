<?php
session_start();  //start of session
include('mysession.php');
include('dbc.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>
    <title>My Portal Design</title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <link href="style/table.css" rel="stylesheet" type="text/css">
	 <link href="css/headmenu.css" rel="stylesheet" type="text/css">
        <style type="text/css">
.con{
margin:10px auto;
width:650px;
height:250px;

padding:2px;
}
#m2{
    font-weight:bold;
    color:#000;
	
}
</style>
</head>
<body>
    
    <div id='container'>
        <?php include("adminmenu.php"); ?>
	<br/><br/>
	<h2 class='yk'>View Employee Details</h2>
        </div> <!-- END OF toparea-->
        
    <!-- Dynamic table -->
        <div class="table_container">
           
            <div id="table_data"  style="min-height:420px;"  class="table_data">
                
                
                <table cellpadding="0" cellspacing="0" border="0" class="content_table" id="table_cont">
                    <thead>
                                <tr role="row">
                                        <th  tabindex="0"  rowspan="1" colspan="1">
                                                        <div class="Data_sort">Sl.No
                                                       
                                                        </div>
                                        </th>
                                        
                                         <th  tabindex="0"  rowspan="1" colspan="1">
                                                        <div class="Data_sort">Employee  Name
                                                       
                                                        </div>
                                                   </th>
                                         <th  tabindex="0"  rowspan="1" colspan="1">
                                                        <div class="Data_sort">Department
                                                       
                                                        </div>
                                        </th>
                                         
                                                    <th  tabindex="0"  rowspan="1" colspan="1">
                                                        <div class="Data_sort">Designation
                                                       
                                                        </div>
                                                   </th>
                                                    
                                                    <th  tabindex="0"  rowspan="1" colspan="1" >
                                                        <div class="Data_sort"> Address
                                                            
                                                        </div>
                                                    </th>
                                                    
                                                    <th  tabindex="0"  rowspan="1" colspan="1">
                                                        <div class="Data_sort">DOJ
                                                            
                                                        </div>
                                                    </th>
                                                    <th  tabindex="0"  rowspan="1" colspan="1" id="last_cell">
                                                               <div class="Data_sort">Contact
                                                                   
                                                                </div>
                                                    </th>
                                                  
                                </tr>
                    </thead>
            
                    <tbody  id="table_records">
                        <?php
                        /*GET ALL EMPLOYEES*/
                        $sql="SELECT *,d.name FROM  employee JOIN department d";
                           $rs=mysql_query($sql);
                            $i=0;
                        while($row=mysql_fetch_array($rs))
                        {
                                  $sno=$row['eid'];
                                    $empname=$row['fname'].' '.$row['lname'];
                                   $name=$row['designation'];
                                   $location=$row['address'];
                                   $duration=$row['dateofjoining'];
                                  $starttime=$row['contact'];
                                  $dpt=$row['name'];
                                ?>
                                
                                <tr class="row_odd">
                                        <td class="inp_data"> <?php echo $sno; ?></td>                                       
                                         <td class="inp_data"> <?php echo $empname; ?></td>
                                          <td class="inp_data"> <?php echo $dpt; ?></td>
                                        <td class="inp_data"> <?php echo $name; ?></td>
                                        <td class="inp_data"> <?php echo $location; ?></td>
                                        <td class="inp_data"> <?php echo $duration; ?></td>
                                        <td class="inp_data cen"> <?php echo $starttime; ?></td>
										
                                </tr>
                          <?php
                        
                        }
                              ?>
                                                               
                               
                    </tbody>
                </table>
                        
                        
            </div>  <!--end dataTables_wrapper-->
        </div> <!--END table_container-->
       
        </div><!--END container-->
</body>
</html>