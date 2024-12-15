<?php
if(session_status() != PHP_SESSION_ACTIVE)
session_start() ;
$_SESSION['authorized'] = true;

echo "<a href='user.php'>user</a>";