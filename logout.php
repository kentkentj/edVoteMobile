
<?php 
session_start();

session_unset();
session_destroy();

if(isset($_COOKIE['student_id'])):
    setcookie('student_id', '', time()-7000000, '/');
endif;
header("Location: page-login");