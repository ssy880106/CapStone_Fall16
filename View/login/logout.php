<?php
session_start();

$_SESSION = array();

session_destroy();

header('refresh: 2; URL = login.php');?>

<BODY BGCOLOR="#F9DD51">
<CENTER style="margin-top: 25%;"><h2> You have successfully logged out </h2> </CENTER>
</body>
