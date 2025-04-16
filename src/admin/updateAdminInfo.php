<?php require_once "../../includes/header.php"; ?>

<div class="updateAdminInfo">
       <form action="" name="updateAdminInfo" method="post" enctype="multipart/form-data">
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
              <div>
                     <label for="gender">Gender:</label> <br>
                     <input type="radio" name="gender" value="male">Male
                     <input type="radio" name="gender" value="female">Female
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
</div>







<?php require_once "../../includes/footer.php"; ?>





