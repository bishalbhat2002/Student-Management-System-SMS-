<?php 
       require_once "includes/header.php"; 
       
       if($_SESSION['role'] === 'admin')
              require_once "src/admin/dashboard.php"; 
  
       if($_SESSION['role'] === 'teacher')
              require_once "src/teachers/dashboard.php"; 

       if($_SESSION['role'] === 'student')
              require_once "src/student/dashboard.php"; 

       require_once "includes/footer.php"; 
?>