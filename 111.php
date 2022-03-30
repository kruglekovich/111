<?php
header('Content-type: text/html; charset=utf-8');
require_once 'user.php';
$user = new User();
$user->set ('pppp','ggg', '123');
$user->saveToSession();
$user->show ();
?>
    

