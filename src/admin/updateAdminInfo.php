<?php require_once "../../includes/header.php"; ?>

<div class="updateAdminInfo">
       <div>
              <?php
                     if (isset($_GET['adminInfo'])) {
              ?>
                     <h1 class="heading">UPDATE FORM</h1>
                     <form action="" name="updateAdminInfo" method="post" enctype="multipart/form-data" class="form">
                            <div>
                                   <label for="adminId">Admin ID:</label> <br>
                                   <input type="text" name="adminId" readonly value="">
                            </div>
                            <div>
                                   <label for="faculty">Faculty:</label> <br>
                                   <input type="text" name="faculty" readonly value="">
                            </div>
                            <div>
                                   <label for="name">Name:</label> <br>
                                   <input type="text" name="name" value="">
                            </div>
                            <div class="gender">
                                   <label for="gender">Gender:</label> <br>
                                   <input type="radio" name="gender" value="male">Male
                                   <input type="radio" name="gender" value="female">Female
                            </div>
                            <div>
                                   <label for="dob">Mobile:</label> <br>
                                   <input type="date" name="dob" value="" max="">
                            </div>
                            <div>
                                   <label for="mobile">Mobile:</label> <br>
                                   <input type="number" name="mobile" value="">
                            </div>
                            <div>
                                   <label for="email">Email:</label> <br>
                                   <input type="email" name="email" value="">
                            </div>
                            <div>
                                   <label for="address">Adress:</label> <br>
                                   <input type="text" name="address" value="">
                            </div>

                            <input type="submit" value="Save Changes" class="update-btn">
                     </form>
              <?php
              }
              ?>
              <?php
              if (isset($_GET['adminPassword'])) {
              ?>
                     <h1 class="heading">UPDATE PASSWORD</h1>
                     <form action="" name="updateAdminPassword" method="post" enctype="multipart/form-data" class="form">
                            <div>
                                   <label for="adminId">Admin ID:</label> <br>
                                   <input type="text" name="adminId" readonly value="">
                            </div>
                            <div>
                                   <label for="Name">Name:</label> <br>
                                   <input type="text" name="name" readonly value="">
                            </div>
                            <div>
                                   <label for="currentPassword">current Password:</label> <br>
                                   <input type="text" name="currentPassword" value="">
                            </div>
                            <div>
                                   <label for="newPassword">New Password:</label> <br>
                                   <input type="text" name="newPassword" value="">
                            </div>
                            <div>
                                   <label for="confirmNewPassword">Confirm New Password:</label> <br>
                                   <input type="text" name="confirmNewPassword" value="">
                            </div>
                            <input type="submit" value="Save Changes" class="update-btn">
                     </form>
              <?php
              }
              ?>
       </div>
</div>







<?php require_once "../../includes/footer.php"; ?>