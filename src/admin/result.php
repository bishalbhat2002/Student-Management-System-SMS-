<?php require_once "../../includes/header.php"; ?>


<!-- Code for Selecting Regd. No and Semester for Result Publish -->
<?php
       if(isset($_GET['publish-result'])){
?>
              <div class="center-fdct main">
                     <h1 class="heading">Publish Result</h1>
                     <form action="?publish-result-batch-year" name="result-publish-form" method="post" enctype="multipart/form-data" class="form">
                            <div>
                                   <label for="batch">Batch:</label>
                                   <input type="number" min="2062" max="<?php echo date('Y')+57;?>" required>
                            </div>
                            <div>
                                   <label for="semester">Semester:</label>
                                   <select name="semester" id="semester" required>
                                          <option value="" selected disabled>Select Sem</option>
                                          <option value="1st Sem">1st Semester</option>
                                          <option value="2nd Sem">2nd Semester</option>
                                          <option value="8th Sem">8th Semester</option>
                                   </select>
                            </div>
                            <div class="center">
                                   <button type="submit" class="add-btn btn mt-2 large">Add</button>
                            </div>
                     </form>
              </div>

<?php
       }else if(isset($_GET['publish-result-batch-year'])){
?>
            <div class="main center-fdct">
              <h1 class="heading">20YY Batch, X semester Result Publish</h1>
              <form action="?publish-result-batch-year-regd-symbo-no" name="result-publish-form" method="post" enctype="multipart/form-data" class="form">
                     <div>
                            <label for="registration-no">Regd. No:</label>
                            <input type="text" name="registration-no" id="registration-no" required>
                     </div>

                     <div>
                            <label for="symbol-no">Symbol No:</label>
                            <input type="number" name="symbol-no" id="symbol-no" required>
                     </div>

                     <div class="center">
                                   <button type="submit" class="add-btn btn mt-2 large">Add</button>
                     </div>
              </form>

            </div>  
<?php
       }else if(isset($_GET['publish-result-batch-year-regd-symbo-no'])){
?>






<?php
       }else if(isset($_GET['publish-result-batch-year-regd-symbo-no'])){
?>







<?php
       }else if(isset($_GET['publish-result-batch-year-regd-symbo-no'])){
?>






<?php
       }else if(isset($_GET['publish-result-batch-year-regd-symbo-no'])){
?>




































<!-- Code to View Result... -->
<?php
       }else if(isset($_GET['view-result'])){
?>
               <div class="main center-fdc">
                     <div class="box-color-white result">
                     <form action="" method="POST" name="resultForm" enctype="multipart/form-data">
                                   <!-- Header Section -->
                                   <div class="header">
                                          <div class="fwu-logo">
                                                 <img src="../../assets/fwu-logo.jpg" alt="FWU-Logo">
                                          </div>  
                                          <div>
                                                 <h1>Farwestern University</h1>
                                                 <h2>Office of the central Examinations</h2>
                                                 <h3>Mahendranagar, Kanchanpur</h3>
                                          </div>                          
                                          <div class="fwu-logo">
                                                 <img src="../../assets/fwu-logo.jpg" alt="FWU-Logo">
                                          </div>
                                   </div>
                                   <!-- Student Info Section -->
                                   <div class="student-info">
                                          <div class="info-container">
                                                 <span>Name: Bishal Bhat</span>
                                                 <span>Regd. No: SC-4803-3294-3294</span>
                                          </div>
                                          <div class="info-container">
                                                 <span>Level: Undergraduate</span>
                                                 <span>Symbol No: 89003493</span>
                                          </div>
                                          <div class="info-container">
                                                 <span>Program: BSC-CSIT</span>
                                                 <span>Exam Year: 2023</span>
                                          </div>
                                          <div class="info-container">
                                                 <span>Faculty: Science & Technology</span>
                                                 <span>Batch: 2078</span>
                                          </div>
                                          <div class="info-container">
                                                 <span>Campus: FWU Central Campus</span>
                                                 <span>Semester: 1st Sem</span>
                                          </div>
                                          <div class="info-container">
                                                 <span>Date of Birth: 205x/0x/0y</span>
                                          </div>
                                   </div>
                                   <!-- Student Marks Section -->
                                   <div class="marks">
                                          <table class="result-table">
                                                 <thead>
                                                        <tr>
                                                               <th rowspan="2">Course ID</th>
                                                               <th rowspan="2">Course Title</th>
                                                               <th colspan="2">Marks Obtained</th>
                                                               <th rowspan="2">MO</th>
                                                               <th rowspan="2">FM</th>
                                                               <th rowspan="2">Result</th>
                                                        </tr>
                                                        <tr>
                                                               <th>[Th]</th>
                                                               <th>[Pr]</th>
                                                        </tr>
                                                 </thead>
                                                 <tbody>
                                                        <tr>
                                                               <td>CSIT-111</td>
                                                               <td>Subject-1 efefr erogjri rtioeh</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>Pass</td>
                                                        </tr>                             
                                                        <tr>
                                                               <td>CSIT-111</td>
                                                               <td>Subject-1</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>Pass</td>
                                                        </tr>
                                                        <tr>
                                                               <td>CSIT-111</td>
                                                               <td>Subject-1</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>Pass</td>
                                                        </tr>
                                                        <tr>
                                                               <td>CSIT-111</td>
                                                               <td>Subject-1</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>Pass</td>
                                                        </tr>
                                                        <tr>
                                                               <td>CSIT-111</td>
                                                               <td>Subject-1</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>x.y</td>
                                                               <td>Pass</td>
                                                        </tr>
                                                 </tbody>
                                                 <tfoot>              
                                                        <tr>
                                                               <td colspan="7"><b>PASS</b></td>
                                                        </tr>
                                                        <tr>
                                                               <td colspan="7"><b>Total Obtained Marks:</b> x.y</Marks:br></td>
                                                        </tr>
                                                        <tr>
                                                               <td colspan="7"><b>Total Full Marks:</b> x.y</Marks:br></td>
                                                        </tr>     
                                                 </tfoot>
                                          </table>
                                   </div>

                                   <!-- Note Section -->
                                   <div class="result-note">
                                          <b>Note:</b>
                                          <p>
                                                 This Grade Sheet is for general idea of marks you secured. This is not for 
                                                 official use. If any mistakes appear; report at Administration ledger will 
                                                 be referred.
                                          </p>
                                   </div>

                            </form>
                     </div>   
                     <div class="center mt-1">
                            <button class="save-btn btn" onclick="downloadPDF()">Download Result</button>
                     </div>
              </div>
<?php
       }else{
?>     
              <div class="main center">
                     <div class="center-fdc gap">
                     <a href="?publish-result" class="view-btn x-width">Publish Result</a>
                     <a href="?edit-result" class="view-btn x-width">Edit Result</a> 
                     <a href="?view-result" class="view-btn x-width">View Result</a> 
                     <a href="?analyze-result" class="view-btn x-width">Analyze Result</a>
                     </div>
              </div>
<?php
       }
?>



<?php require_once "../../includes/footer.php"; ?>