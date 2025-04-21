<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Login page</title>
       <link rel="stylesheet" href="CSS/loginStyle.css">
</head>

<body>
       <nav><a href="">SMS</a></nav>

       <form action="" method="POST" name="loginForm" enctype="multipart/form-data">
              <div class="login">Login</div>
              <div>
                     <label for="role">As:</label> <br>
                     <select name="role" id="role" >
                            <option value="" selected disabled>select role</option>
                            <option value="admin">Admin</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                     </select> <br>
              </div>
                
              <div>
                     <label for="username">Username</label> <br>
                     <input type="text" name="username" id="username"> <br>
              </div>

              <div>
                     <label for="password"> Password</label> <br>
                     <input type="password" name="password" id="password" > <br>
              </div>

              <button id="login-btn" name="login">login</button>
       </form>

       <?php
              if(isset($_GET['error'])){
                     echo "<div id='error'>Error: {$_GET['error']}</div>";
              }
       ?>
</body>
<script>
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

<?php
       if(isset($_POST['login'])){
              if(isset($_POST['role']) && isset($_POST['username']) && isset($_POST['password'])){
                    print_r($_POST);
              //       exit();
                     $role = $_POST['role'];
                     $username = $_POST['username'];
                     $password = $_POST['password'];

                     require_once "config/db_config.php";
                     try{
                            $sql = "SELECT username, password, role from users 
                                   --  where username = '$username' AND password = '$password' AND role = '$role'
                                     where username = '{$_POST['username']}' AND password = '{$_POST['password']}' AND role = '{$_POST['role']}'";
                            $result = $conn->query($sql);
                     }catch(Exception $e){
                            die("<b>Error: </b>".$e->getMessage());
                     }

                     if($result->num_rows>0){
                            $row = $result->fetch_assoc();
                            session_start();
                            $_SESSION['username'] = $row['username'];
                            $_SESSION['password'] = $row['password'];
                            $_SESSION['role'] = $row['role'];
                            

                            header("location: index.php");
                            exit();
                     }else{
                            header("location:login.php?error=  Wrong Username or Password...");
                            exit();  
                     }


                     



              }else{
                     header("location:login.php?error= User must fill all fields");
                     exit();
              }      
       }


?>