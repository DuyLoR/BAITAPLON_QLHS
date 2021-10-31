<?php
session_start();
unset($_SESSION['currentUser']);
unset($_SESSION['currentLevel']);


header('Location:../model/login.php');
