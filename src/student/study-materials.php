<?php require_once "../../includes/header.php"; ?>

<!-- Code to view study materials -->

      <div class="main center-fdct">
              <div class="center-fdct">
                     <h1 class="heading">Semester X, View Study Materials</h1>
                     
                     <form action="?view-attendance-sem" name="sem-select-form" method="POST" enctype="multipart/form-data" class="study-material-container">
                            <div class="id">ID</div>
                            <div class="subject-title">Web Technology - II</div>
                            <div class="id-value">1021</div>
                            <div class="main-content">
                                   <p>The file linked to this message contains PHP pdf.</p>
                                   <div class="space-between">
                                          <div>
                                                 <a href="../../uploads/study materials/PHP.pdf" download="sampleNote" class="save-btn">Click To Download</a>
                                                 <a href="../../uploads/study materials/PHP.pdf" target="_blank" class="view-btn">View Note</a>
                                                 
                                          </div>
                                          <div class="flex gap-2">
                                                 <span class="teacher-name">Bishal Bhat</span>
                                                 <span class="sent-date"><?php echo date('Y-m-d');?></span>
                                          </div>
                                   </div>
                            </div>
                            <div class="actions">
                                   <a href="?update-study-material-id" class="update-btn">update</a><br>
                                   <a href="?update-study-material-id" class="delete-btn" onclick="return confirmDelete(id)">Delete</a>
                            </div>
                     </form>                                                

              </div>
              </div> 

<?php require_once "../../includes/footer.php"; ?>