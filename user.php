<?php
if(session_status() != PHP_SESSION_ACTIVE)
session_start();
if (!isset($_SESSION['authorized']) || !$_SESSION['authorized']) {
    header("Location:login.php");
    exit;
  }

  echo "<h1> {$_SESSION['test']} </h1>";