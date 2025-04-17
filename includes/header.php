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
       <link rel="stylesheet" href="../../CSS/mediaqueries.css">
</head>
<body>
       <div class="logo">SMS</div>
       <div id="hambuger-icon"><a href=""><img src="../../assets/hambuger.png" alt="Hamburger icon"></a></div>
       <nav class="navbar">

              <?php if($_SESSION['role']==='admin'){ ?>
                     <ul>
                            <li><a href="<?php echo BASE_URL.'/src/admin/dashboard.php'; ?>">Dashboard</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/admin/semesters.php'; ?>">Semesters</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/admin/students.php'; ?>">Students</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/admin/teachers.php'; ?>">Teachers</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/admin/courses.php'; ?>">Courses</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/admin/notices.php'; ?>">Notices</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/admin/result.php'; ?>">Result</a></li>
                     </ul>
              <?php } ?>

              <?php if($_SESSION['role']==='teacher'){ ?>
                     <ul>
                            <li><a href="<?php echo BASE_URL.'/src/teacher/dashboard.php'; ?>">Dashboard</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/teacher/courses.php'; ?>">Courses</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/teacher/attendance.php'; ?>">Attendance</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/teacher/study-materials.php'; ?>">Study Materials</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/teacher/notices.php'; ?>">Notices</a></li>
                     </ul>
              <?php } ?>

              <?php if($_SESSION['role']==='student'){ ?>
                     <ul>
                            <li><a href="<?php echo BASE_URL.'/src/student/dashboard.php'; ?>">Dashboard</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/student/view-fees.php'; ?>">View Fees</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/student/courses.php'; ?>">Courses</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/student/study-materials.php'; ?>">Study Materials</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/student/notices.php'; ?>">Notices</a></li>
                            <li><a href="<?php echo BASE_URL.'/src/student/result.php'; ?>">Result</a></li>
                     </ul>
              <?php } ?>


              <div class="logout">
                     <a href="?logout=true" name="logout">Log out</a>
              </div>
       </nav>


