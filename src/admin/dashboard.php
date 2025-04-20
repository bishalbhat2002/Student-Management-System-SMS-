<?php require_once "../../includes/header.php"; ?>

<div class="center-fdct main">
<div class="admin-dashboard center-fdct">
       <div class="greet">
              <h1>Welcome Admin !!</h1>
              <h3>Bishal Bhat</h3>    
       </div>

       <div class="student-status">
              <div class="total-info">
                     <div class="total-students"><img src="<?php echo BASE_URL.'/assets/student.png'?>" alt="student icon">250 <br>Total Students</div>
                     <div class="total-teachers"><img src="<?php echo BASE_URL.'/assets/hat.png'?>" alt="hat icon">250 <br>Total Teachers</div>
              </div>

              <div class="semester-info">
                     <div class="sem-container"><div class="semester-box">1st <br>Sem</div> <p>95 Students</p></div>
                     <div class="sem-container"><div class="semester-box">3rd <br>Sem</div> <p>43 Students</p></div>
                     <div class="sem-container"><div class="semester-box">5th <br>Sem</div> <p>38 Students</p></div>
                     <div class="sem-container"><div class="semester-box">6th <br>Sem</div> <p>32 Students</p></div>
                     <div class="sem-container"><div class="semester-box">8th <br>Sem</div> <p>28 Students</p></div>
              </div>

              <div class="more-options">
                     <div class="tadmission-container"><div class="tadmission-box">Total <br>Admissions</div> <p>1000 <br>Students</p></div>
                     <div><a href="resetPassword.php" class="resetPassword-btn">Reset Password</a></div>
              </div>
       </div>

       <div class="admin-info">
              <div>
                     <img src= <?php echo BASE_URL."/assets/image.jpg"; ?> alt="profile picture">
                     <!-- <form action="" method="post" name="profilePicture" enctype="multipart/form-data">
                            <input type="file" value="choose file" name="profilePicture">
                            <input type="submit" name="submit" value="save changes">
                     </form> -->
              </div>
              <p>Name: Bishal Bhat</p>
              <p>Gender: Male</p>
              <p>DOB: 2000-12-19</p>
              <p>Faculty: Department of CSIT</p>
              <p>Mobile: 98XXXXX</p>
              <p>Email: bishalbhat2002@gmail.com</p>
              <p>Address: Mahendranagar, kanchanpur</p>
              <p>username: admin-1001</p>
              <p class="center"><a href="updateAdminInfo.php?adminInfo" class="update-btn">update Info</a>
              <a href="updateAdminInfo.php?adminPassword" class="update-btn">update Password</a></p>
       </div>
</div>
</div>

<?php require_once "../../includes/footer.php"; ?>