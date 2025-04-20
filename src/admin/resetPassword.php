<?php require_once "../../includes/header.php"; ?>

<?php
if (isset($_GET['resetStudentPassword'])) {
       ?>
       <div class="center-fdct main">  
              <h1 class="heading">Student Password Reset</h1>
              <form action="?resetStudentPasswordID" name="resetStudentPassword" method="post" enctype="multipart/form-data" class="form">
                     <div>
                            <label for="regdNo">Registration No.:</label> <br>
                            <input type="text" name="regdNo" for="regdNo" value="">
                     </div>
                     <div class="center">
                            <input type="submit" value="Reset Password" class="reset-btn">
                     </div>
              </form>
       </div>
<?php
} else if (isset($_GET['resetTeacherPassword'])) {
?>
       <div class="center-fdct main"> 
       <h1 class="heading">Teacher Password Reset</h1>
       <form action="?resetTeacherPasswordID" name="resetStudentPassword" method="post" enctype="multipart/form-data" class="form">
              <div>
                     <label for="tid">Teacher ID:</label> <br>
                     <input type="text" name="tid" for="tid" value="">
              </div>
              <div class="center">
                     <input type="submit" value="Reset Password" class="reset-btn">
              </div>
       </form>
       </div>

<?php
} else if (isset($_GET['resetStudentPasswordID'])) {
?>
       <div class="center-fdct main"> 
              <h1 class="heading">Student Password Reset</h1>
              <form action="" name="resetStudentPassword" method="post" enctype="multipart/form-data" class="form-expan">
                     <div>
                            <label for="regdNo">Registration No.:</label> <br>
                            <input type="text" name="regdNo" for="regdNo" value="">
                     </div>
                     <div>
                            <label for="name">Name:</label> <br>
                            <input type="text" name="name" value="">
                     </div>
                     <div>
                            <label for="faculty">Faculty:</label> <br>
                            <input type="text" name="faculty" readonly value="">
                     </div>                     
                     <div class="gender">
                            <label for="gender">Gender:</label> <br>
                            <input type="text" name="gender" value="male">
                     </div>
                     <div>
                            <label for="mobile">Mobile:</label> <br>
                            <input type="number" name="mobile" value="" max="">
                     </div>
                     <div>
                            <label for="email">Email:</label> <br>
                            <input type="email" name="email" value="">
                     </div>
                     <div class="col-span-2">
                            <label for="address">Adress:</label> <br>
                            <input type="text" name="address" value="">
                     </div> <br>

                     <div class="center btn-container">
                            <input type="submit" value="Reset Password" class="reset-btn">
                     </div>
              </form>
       </div>
<?php
} else if (isset($_GET['resetTeacherPasswordID'])) {
?>
       <div class="center-fdct main"> 
              <h1 class="heading">Teacher Password Reset</h1>
              <form action="" name="resetTeacherPassword" method="post" enctype="multipart/form-data" class="form-expan">
                     <div>
                            <label for="tid">Teacher ID:</label> <br>
                            <input type="text" name="tid" for="tid" value="">
                     </div>
                     <div>
                            <label for="name">Name:</label> <br>
                            <input type="text" name="name" value="">
                     </div>
                     <div>
                            <label for="faculty">Faculty:</label> <br>
                            <input type="text" name="faculty" readonly value="">
                     </div>                     
                     <div class="gender">
                            <label for="gender">Gender:</label> <br>
                            <input type="text" name="gender" value="male">
                     </div>
                     <div>
                            <label for="mobile">Mobile:</label> <br>
                            <input type="number" name="mobile" value="" max="">
                     </div>
                     <div>
                            <label for="email">Email:</label> <br>
                            <input type="email" name="email" value="">
                     </div>
                     <div class="col-span-2">
                            <label for="address">Adress:</label> <br>
                            <input type="text" name="address" value="">
                     </div>
                     <div class="center btn-container">
                            <input type="submit" value="Reset Password" class="reset-btn">
                     </div>
              </form>
       </div>
<?php
} else {
?>
       <div class="center-fdc main"> 
              <a href="?resetStudentPassword" class="reset-btn large">Reset Student Password</a> <br><br>
              <a href="?resetTeacherPassword" class="reset-btn large">Reset Teacher Password</a>
       </div>
<?php
}
?>

</div>
<?php require_once "../../includes/footer.php"; ?>