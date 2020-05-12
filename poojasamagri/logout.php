<?php
include 'app/call.php';
session_start();
session_destroy();
redirect('index.php');
?>