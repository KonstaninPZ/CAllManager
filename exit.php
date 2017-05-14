<?php
unset($_COOKIE['userID']);
unset($_COOKIE['email']);
setcookie('userID', '', -1, '/');
setcookie('email', '', -1, '/');
$work_Page_url='http://'.$_SERVER['HTTP_HOST'].'/CallManager2/index.php';
       
     header('Location: '. $work_Page_url);
?>