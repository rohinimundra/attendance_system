<?php
//logout-DU

session_start();
session_unset();
session_destroy();


header("Location: index.html");

?>