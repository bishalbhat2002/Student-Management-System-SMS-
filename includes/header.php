<?php
       session_start();

       if(!isset($_SESSION['username'])){
              header('location:login.php');
              exit();
       }
       
       define("BASE_URL", "http://localhost/minor%20project/Student%20Management%20System");

       if(isset($_GET['logout'])){
              session_unset();
              session_destroy();
              header("location: ".BASE_URL."/login.php");
              exit();
       }

      
?>

<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Student Management System</title>
       <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>
       <div class="logo">SMS</div>
       <nav class="navbar">

              <?php if($_SESSION['role']==='admin'){ ?>
                     <ul>
                            <li><a href="<?php echo BASE_URL.'/src/admin/dashboard.php'; ?>">Dashboard</a></li>
                            <li><a href="/">Semesters</a></li>
                            <li><a href="/">Students</a></li>
                            <li><a href="/">Teachers</a></li>
                            <li><a href="/">Courses</a></li>
                            <li><a href="/">Notices</a></li>
                            <li><a href="/">Result</a></li>
                     </ul>
              <?php } ?>

              <?php if($_SESSION['role']==='teacher'){ ?>
                     <ul>
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="/">Courses</a></li>
                            <li><a href="/">Attendance</a></li>
                            <li><a href="/">Study Materials</a></li>
                            <li><a href="/">Notices</a></li>
                     </ul>
              <?php } ?>

              <?php if($_SESSION['role']==='student'){ ?>
                     <ul>
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="/">View Fees</a></li>
                            <li><a href="/">Courses</a></li>
                            <li><a href="/">Study Materials</a></li>
                            <li><a href="/">Notices</a></li>
                            <li><a href="/">Notices</a></li>
                            <li><a href="/">Result</a></li>
                     </ul>
              <?php } ?>


              <div class="logout">
                     <a href="?logout=true" name="logout">Log out</a>
              </div>
       </nav>


