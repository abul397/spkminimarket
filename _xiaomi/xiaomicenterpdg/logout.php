<?php
@session_start();

session_destroy();

header("location:/xiaomicenterpdg/login.php");

?>