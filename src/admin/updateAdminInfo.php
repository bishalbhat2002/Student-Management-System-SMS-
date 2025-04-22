<?php require_once "../../includes/header.php"; ?>

<div class="center-fdct main">
       <div>
              <?php
                     if (isset($_GET['adminInfo'])) {
              ?>
                     <h1 class="heading">Update Admin Info</h1>
                     <form action="" name="updateAdminInfo" method="post" enctype="multipart/form-data" class="form-expan">
                            <input type="hidden" name="adminId" value="">

                            <div class="col-span-2 center mb-2">
                                   <img src="../../assets/image.jpg" alt="Photo" class="image">
                            </div>

                            <div>
                                   <label for="username">Username:</label> <br>
                                   <input type="text" name="username" value="">
                            </div>
                            <div>
                                   <label for="name">Name:</label> <br>
                                   <input type="text" name="name" value="">
                            </div>
                            <div>
                                   <label for="dob">DOB:</label> <br>
                                   <input type="date" name="dob" value="" max="">
                            </div>
                            <div class="gender">
                                   <label for="gender">Gender:</label> <br>
                                   <input type="radio" name="gender" value="male">Male
                                   <input type="radio" name="gender" value="female">Female
                            </div>
                            <div>
                                   <label for="faculty">Faculty:</label> <br>
                                   <input type="text" name="faculty" readonly value="">
                            </div>
                            <div>
                                   <label for="phone">Mobile:</label> <br>
                                   <input type="number" name="phone" value="">
                            </div>
                            <div>
                                   <label for="email">Email:</label> <br>
                                   <input type="email" name="email" value="">
                            </div>
  
                            <div>
                                   <label for="address">Adress:</label> <br>
                                   <input type="text" name="address" value="">
                            </div>
                            <div>
                                   <label for="photo">Upload Photo:</label> <br>
                                   <input type="file" name="photo" id="photo" value="">
                            </div>


                            <div class="center btn-container">
                                   <input type="submit" value="Save Changes" class="update-btn">
                            </div>
                     </form>
              <?php
              }
              ?>
              <?php
              if (isset($_GET['adminPassword'])) {
              ?>
                     <h1 class="heading">UPDATE PASSWORD</h1>
                     <form action="" name="updateAdminPassword" method="post" enctype="multipart/form-data" class="form-expan">
                            <input type="hidden" name="adminId" value="">
                            <div>
                                   <label for="username">Username:</label> <br>
                                   <input type="text" name="username" for="username" readonly value="">
                            </div>
                            <div>
                                   <label for="Name">Name:</label> <br>
                                   <input type="text" name="name" readonly value="">
                            </div>
                            <div>
                                   <label for="currentPassword">current Password:</label> <br>
                                   <input type="text" name="currentPassword" value="">
                            </div>
                            <br>
                            <div>
                                   <label for="newPassword">New Password:</label> <br>
                                   <input type="text" name="newPassword" value="">
                            </div>
                            <div>
                                   <label for="confirmNewPassword">Confirm New Password:</label> <br>
                                   <input type="text" name="confirmNewPassword" value="">
                            </div>
                            <div class="center btn-container">
                                   <input type="submit" value="Save Changes" class="update-btn">
                            </div>
                     </form>
              <?php
              }
              ?>
       </div>
</div>







<?php require_once "../../includes/footer.php"; ?>