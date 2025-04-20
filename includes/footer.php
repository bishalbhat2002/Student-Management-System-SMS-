<?php
       if(isset($_GET['error'])){
              echo "<div id='error' class='position-bottom'>Error: {$_GET['error']}</div>";
       }
?>
<?php
       if(isset($_GET['success'])){
              echo "<div id='success' class='position-bottom'>Success: {$_GET['success']}</div>";
       }
?>
</body>
<script src="../../js/script.js"></script>
<script>
       // JS code to Show Errors
       window.onload = function hide(){
       let errorElement =  document.getElementById('error');
              if(errorElement){
                     setTimeout(()=>{
                            errorElement.classList.add('hide');
                     }, 3000);
              }       
       
       let successElement =  document.getElementById('success');
              
              if(successElement){
                     setTimeout(()=>{
                            successElement.classList.add('hide');
                     }, 3000);
              }
       }
</script>
</html>