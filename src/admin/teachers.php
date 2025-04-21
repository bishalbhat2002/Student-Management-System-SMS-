<?php require_once "../../includes/header.php"; ?>


<!-- Code for Adding New Teacher -->
<?php
       if(isset($_GET['add-teacher'])){
?>
              <div class="main center-fdct">
                     <h1 class="heading">Add Teacher</h1>
                     <form action="?view-all-teachers" method="post" name="add-teacher-form" enctype="multipart/form-data" class="form-expan">
                            <div class="col-span-2">
                                   <label for="name">Name:</label>
                                   <input type="text" name="name" id="name">
                            </div>
                            <div>
                                   <label for="phone">Phone:</label>
                                   <input type="number" name="phone" id="phone">
                            </div>
                            <div>
                                   <label for="email">Email:</label>
                                   <input type="email" name="email" id="email">
                            </div>                      
                            <div>
                                   <label for="dob">DOB:</label>
                                   <input type="date" name="dob" id="dob">
                            </div>      
                            <div class="gender">
                                   <label for="gender">Gender:</label><br>
                                   <input type="radio" name="gender" value="male">Male
                                   <input type="radio" name="gender" value="female">Female
                            </div>  

                            <div class="col-span-2">
                                   <label for="address">Address:</label>
                                   <input type="text" name="address" id="address">
                            </div>

                            <div>
                                   <label for="academic-qualifications">Academic Qualifications:</label>
                                   <input type="text" name="academic-qualifications" id="academic-qualifications">
                            </div>

                            <div>
                                   <label for="photo">Upload Photo:</label>
                                   <input type="file" name="photo" id="photo">
                            </div>

                            <div class="col-span-2 center">
                                   <button class="add-btn btn large mt-2">Add Teacher</button>
                            </div>
                            

                     </form>

              </div>


<!-- Code for Viewing All Teachers -->
<?php
       }else if(isset($_GET['view-all-teachers'])){           
?>
              <div class="main center-fdct">
                     <h1 class="heading">View Teachers</h1>
                     <div class="box-expan-normal center">
                            <table>
                                   <thead>
                                          <tr>
                                                 <th title="Teachers ID">Tid</th>
                                                 <th>Teacher Name</th>
                                                 <th>Phone</th>
                                                 <th>Address</th>
                                                 <th title="Actions you can Perfrom">Action</th>
                                          </tr>
                                   </thead>
                                   <tbody>
                                          <tr>
                                                 <td class="tac v-align-m">1001</td>
                                                 <td>Bishal Bhat</td>
                                                 <td>98064zzzz</td>
                                                 <td>Dodhara Chandani Mp-3, Kanchanpur Nepal</td>
                                                 <td>
                                                        <a href="?view-Teacher-id" class="view-btn">View</a>
                                                        <a href="?update-Teacher-id" class="edit-btn">Edit</a>
                                                        <a href="?Delete-Teacher-id" class="delete-btn">Delete</a>
                                                 </td>
                                          </tr>
                                          
                                          <tr>
                                                 <td class="tac v-align-m">1001</td>
                                                 <td>Bishal Bhat</td>
                                                 <td>98064zzzz</td>
                                                 <td>Dodhara Chandani Mp-3, Kanchanpur Nepal</td>
                                                 <td>
                                                        <a href="?view-Teacher-id" class="view-btn">View</a>
                                                        <a href="?update-Teacher-id" class="edit-btn">Edit</a>
                                                        <a href="?Delete-Teacher-id" class="delete-btn">Delete</a>
                                                 </td>
                                          </tr>                                          
                                          <tr>
                                                 <td class="tac v-align-m">1001</td>
                                                 <td>Bishal Bhat</td>
                                                 <td>98064zzzz</td>
                                                 <td>Dodhara Chandani Mp-3, Kanchanpur Nepal</td>
                                                 <td>
                                                        <a href="?view-Teacher-id" class="view-btn">View</a>
                                                        <a href="?update-Teacher-id" class="edit-btn">Edit</a>
                                                        <a href="?Delete-Teacher-id" class="delete-btn">Delete</a>
                                                 </td>
                                          </tr>                                          
                                          <tr>
                                                 <td class="tac v-align-m">1001</td>
                                                 <td>Bishal Bhat</td>
                                                 <td>98064zzzz</td>
                                                 <td>Dodhara Chandani Mp-3, Kanchanpur Nepal</td>
                                                 <td>
                                                        <a href="?view-Teacher-id" class="view-btn">View</a>
                                                        <a href="?update-Teacher-id" class="edit-btn">Edit</a>
                                                        <a href="?Delete-Teacher-id" class="delete-btn">Delete</a>
                                                 </td>
                                          </tr>                                          
                                          <tr>
                                                 <td class="tac v-align-m">1001</td>
                                                 <td>Bishal Bhat</td>
                                                 <td>98064zzzz</td>
                                                 <td>Dodhara Chandani Mp-3, Kanchanpur Nepal</td>
                                                 <td>
                                                        <a href="?view-Teacher-id" class="view-btn">View</a>
                                                        <a href="?update-Teacher-id" class="edit-btn">Edit</a>
                                                        <a href="?Delete-Teacher-id" class="delete-btn">Delete</a>
                                                 </td>
                                          </tr>
                                   </tbody>
                            </table>

                     </div>
              </div>


<!-- Code for entering Teacher ID for viewing Teacher -->
<?php
       }else if(isset($_GET['view-teacher'])){           
?>
              <div class="main center-fdct">
                     <h1 class="heading">View Teacher</h1>
                     <form action="?view-teacher-id" method="post" name="teacher-Id-from" enctype="multipart/form-data" class="form">
                            <div>
                                   <label for="tid">Enter Teacher ID:</label>
                                   <input type="text" name="tid" id="tid">                                   
                            </div>
                            <div class="center">
                                   <input type="submit" value="View Teacher" class="view-btn">
                            </div>
                     </form>
              </div>


<!-- Code for viewing Teacher -->
<?php
       }else if(isset($_GET['view-teacher-id'])){           
?>
              <div class="main center-fdct">
                     <h1 class="heading">View Teacher</h1>
                     <form action="?edit-teacher-id" method="post" name="add-teacher-form" enctype="multipart/form-data" class="form-expan">
                            <div class="col-span-2 center mb-2 mt-1">
                                   <img src="../../assets/image.jpg" alt="Photo" class="image">
                            </div>
                            <div>
                                   <label for="name">Name:</label>
                                   <input type="text" name="name" id="name">
                            </div>
                            <div>
                                   <label for="phone">Phone:</label>
                                   <input type="number" name="phone" id="phone">
                            </div>
                            <div>
                                   <label for="email">Email:</label>
                                   <input type="email" name="email" id="email">
                            </div>                      
                            <div>
                                   <label for="dob">DOB:</label>
                                   <input type="text" name="dob" id="dob">
                            </div>      
                            <div class="gender">
                                   <label for="gender">Gender:</label><br>
                                   <input type="text" name="gender" id="gender">
                            </div>  
                            <div>
                                   <label for="academic-qualifications">Academic Qualifications:</label>
                                   <input type="text" name="academic-qualifications" id="academic-qualifications">
                            </div>
                            <div class="col-span-2">
                                   <label for="address">Address:</label>
                                   <input type="text" name="address" id="address">
                            </div>


                            <div class="col-span-2 center">
                                   <button class="edit-btn btn large mt-2">Edit Teacher</button>
                            </div>    
                     </form>
              </div>


<!-- Code for editing Teacher Details -->
<?php
       }else if(isset($_GET['edit-teacher'])){           
?>




<!-- Code for editing Course schedule -->
<?php
       }else if(isset($_GET['edit-teacher-id'])){           
?>
              <div class="main center-fdct">
                     <h1 class="heading">Add Teacher</h1>
                     <form action="?view-all-teachers" method="post" name="add-teacher-form" enctype="multipart/form-data" class="form-expan">
                            <div class="col-span-2 center mb-2 mt-1">
                                   <img src="../../assets/image.jpg" alt="Photo" class="image">
                            </div>
                            <div>
                                   <label for="name">Name:</label>
                                   <input type="text" name="name" id="name">
                            </div>
                            <div>
                                   <label for="phone">Phone:</label>
                                   <input type="number" name="phone" id="phone">
                            </div>
                            <div>
                                   <label for="email">Email:</label>
                                   <input type="email" name="email" id="email">
                            </div>                      
                            <div>
                                   <label for="dob">DOB:</label>
                                   <input type="date" name="dob" id="dob">
                            </div>      
                            <div class="gender">
                                   <label for="gender">Gender:</label><br>
                                   <input type="radio" name="gender" value="male">Male
                                   <input type="radio" name="gender" value="female">Female
                            </div>  

                            <div class="col-span-2">
                                   <label for="address">Address:</label>
                                   <input type="text" name="address" id="address">
                            </div>

                            <div>
                                   <label for="academic-qualifications">Academic Qualifications:</label>
                                   <input type="text" name="academic-qualifications" id="academic-qualifications">
                            </div>

                            <div>
                                   <label for="photo">Upload Photo:</label>
                                   <input type="file" name="photo" id="photo">
                            </div>

                            <div class="col-span-2 center">
                                   <button class="add-btn btn large mt-2">Add Teacher</button>
                            </div>    
                     </form>
              </div>




<!-- Code To display Default Teacher Options... -->
<?php
       }else{
?>        
              <div class="main center">
                     <div class="center-fdct gap-2">
                            <a href="?add-teacher" class="view-btn x-width">Add Teacher</a>
                            <a href="?view-teacher" class="view-btn x-width">View Teacher</a>
                            <a href="?edit-teacher" class="view-btn x-width">Edit Teacher</a>
                            <a href="?delete-teacher" class="view-btn x-width">Delete Teacher</a>
                     </div>
              </div>
<?php
       }
?>









































<?php require_once "../../includes/footer.php"; ?>





