<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','attendancesystem');

$dbc=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("could not connect DB-Contact BCA... ".mysql_error());
@mysql_select_db(DB_NAME) or die("Could not select DB-Contact BCA_Subong ... ".mysql_error());

?>
