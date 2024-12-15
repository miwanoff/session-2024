<?php
session_start();
if (!isset($_SESSION['test']))
$_SESSION['test']='Hello world!';

echo $_SESSION['test'];