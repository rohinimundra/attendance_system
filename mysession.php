<?php
if (!(isset($_SESSION['user']) && $_SESSION['user'] != '') && !(isset($_SESSION['curr_pass']) && $_SESSION['curr_pass'] != '') )
{
header("Location:index.html?msg=invalid#?##");
}
?>