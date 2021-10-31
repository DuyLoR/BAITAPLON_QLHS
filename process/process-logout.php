<?php
session_start();
unset($_SESSION['currentUser']);
unset($_SESSION['currentUser']);
header('location:../model/login.php');
