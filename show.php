<?php
if(session_status() != PHP_SESSION_ACTIVE)
session_start();
echo $_SESSION['test'];