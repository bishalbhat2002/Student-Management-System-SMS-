<?php

       session_start();
       if(!isset($_SESSION['username'])){
              header('location:login.php');
              exit();
       }

       if($_SESSION['role'] === 'admin'){
              header("location: src/admin/dashboard.php"); 
              exit();
       }
  
       if($_SESSION['role'] === 'teacher'){
              header("location: src/teacher/dashboard.php"); 
              exit();
       }
       if($_SESSION['role'] === 'student'){
              header("location: src/student/dashboard.php"); 
              exit();
       }
?>