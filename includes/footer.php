<?php
       if(isset($_GET['error'])){
              echo "<div id='error'>Error: {$_GET['error']}</div>";
       }
?>
</body>
<script src="../../js/script.js"></script>
<script>
       // JS code to Show Errors
       window.onload = function hide(){
       let element =  document.getElementById('error');
              if(element){
                     setTimeout(()=>{
                            element.classList.add('hide');
                     }, 1000);
              }
       }
</script>
</html>