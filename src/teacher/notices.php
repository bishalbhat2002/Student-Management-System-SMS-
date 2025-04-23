<?php require_once "../../includes/header.php"; ?>

<?php
       if(isset($_GET['tnv-id'])){
?>
<!-- Code to View Teacher Notice -->
              <div class="center-fdct main">
                     <h1 class="heading">View Notice</h1>
                     <div class="box notice-view-box">
                            <h2 class="sub-heading">Notice Title...</h2>
                            <p> Notice Body Message... Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, harum accusamus excepturi voluptate cum nemo eos distinctio optio repudiandae, aliquam quas sit nisi quibusdam similique reiciendis neque, fugiat velit quam.</p>
                            <div class="center">
                                   <a href="../../assets/notice.jpeg" download="Notice-sample-name" title="Click to download Notice"><img src="../../assets/images/notice.jpeg" alt="Notice Image" class="notice-image"></a>
                            </div>
                     <div class="center">Date: 2082/01/05</div>

                     </div>
                    
              </div>

<?php
       } else if(isset($_GET['snv-id'])){
?>
<!-- Code to View student Notice -->
              <div class="center-fdct main">
                     <h1 class="heading">View Notice</h1>
                     <div class="box notice-view-box">
                            <h2 class="sub-heading">Notice Title...</h2>
                            <p> Notice Body Message... Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, harum accusamus excepturi voluptate cum nemo eos distinctio optio repudiandae, aliquam quas sit nisi quibusdam similique reiciendis neque, fugiat velit quam.</p>
                            <div class="center">
                                   <img src="../../assets/images/notice.jpeg" alt="Notice Image" class="notice-image">
                            </div>
                     <div class="center">Date: 2082/01/05</div>

                     </div>
                    
              </div>

<?php               
       }else{
?>
              <div class="notices main">
                     <div class="teacher-notices box">
                            <div class="caption">Teachers Notice</div>
                            
                            <a href="?tnv-id" class="notice" >
                                   <div class="notice-number">1</div>
                                   <div class="notice-title">6th Semester Form Fillup Notice...43242</div>
                                   <p class="notice-date">2082/01/04</p>
                            </a>
                            
                            <a href="?tnv-id" class="notice" >
                                   <div class="notice-number">1</div>
                                   <div class="notice-title">6th Semester Form Fillup Notice...</div>
                                   <p class="notice-date">2082/01/04</p>
                            </a>
                            <a href="?tnv-id" class="notice" >
                                   <div class="notice-number">1</div>
                                   <div class="notice-title">6th Semester Form Fillup Notice...</div>
                                   <p class="notice-date">2082/01/04</p>
                            </a>             
                            <a href="?tnv-id" class="notice" >
                                   <div class="notice-number">1</div>
                                   <div class="notice-title">6th Semester Form Fillup Notice...</div>
                                   <p class="notice-date">2082/01/04</p>
                            </a>
                            
              </div>   
                     
              <div class="student-notices box">
                     <div class="caption">Students Notice <a href="?add-student-notice" title="Add new Notice for Student" class="add-notice">Add Notice</a></div>
                     <a href="?snv-id" class="notice" >
                            <div class="notice-number">1</div>
                            <div class="notice-title">6th Semester Form Fillup Notice...</div>
                            <p class="notice-date">2082/01/04</p>                            
                     </a>
                     <a href="?snv-id" class="notice" >
                            <div class="notice-number">1</div>
                            <div class="notice-title">6th Semester Form Fillup Notice...</div>
                            <p class="notice-date">2082/01/04</p>                            
                     </a>                     
                     <a href="?snv-id" class="notice" >
                            <div class="notice-number">1</div>
                            <div class="notice-title">6th Semester Form Fillup Notice...</div>
                            <p class="notice-date">2082/01/04</p>                            
                     </a>                     
                     <a href="?snv-id" class="notice" >
                            <div class="notice-number">1</div>
                            <div class="notice-title">6th Semester Form Fillup Notice...</div>
                            <p class="notice-date">2082/01/04</p>                            
                     </a>                     
                     <a href="?snv-id" class="notice" >
                            <div class="notice-number">1</div>
                            <div class="notice-title">6th Semester Form Fillup Notice...</div>
                            <p class="notice-date">2082/01/04</p>                            
                     </a>              
              </div>   
<?php 
       }
?>

<?php require_once "../../includes/footer.php"; ?>





