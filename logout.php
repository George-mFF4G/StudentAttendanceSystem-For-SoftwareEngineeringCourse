<?php
//  setcookie("username","",time()-1);
//  setcookie("password","",time()-1);

session_start();
session_unset();
session_destroy();
header("location: index.php");
