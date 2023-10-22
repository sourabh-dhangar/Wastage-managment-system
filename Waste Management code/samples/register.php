<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php


include 'dbcon.php';
    if(isset($_POST['submit'])){
        $username= mysqli_real_escape_string($con,$_POST['name']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $mobail=mysqli_real_escape_string($con,$_POST['mobail']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

        $pass = password_hash($password,PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword,PASSWORD_BCRYPT);

        $emailquery= " select * from registation where email='$email' ";
        $query = mysqli_query($con,$emailquery);
        
        $emailcount= mysqli_num_rows($query);
        
        if($emailcount>0)
        {
            echo"email already exist";
        }
        else{
            if($password===$cpassword)
            {
                $insertquery = "insert into registation(username, email, mobail, password, cpassword)
                 VALUES('$username','$email','$mobail','$pass','$cpass')";

                 $iquery = mysqli_query($con,$insertquery);                
        
                 
                    if($iquery)
                   {                              
                      ?>
    <script>
    alert("Inserted SuccessFul");
    </script>
    <?php 
                  }
                  else
                  {
                      ?>
    <script>
    alert("No Insert ");
    </script>
    <?php 
                  }
                 
            }
            else
            {
                ?>
    <script>
    alert("Password Are not matching ");
    </script>
    <?php 
            }
        }
    }




    ?>



    <div class="container">
        <div class="center">
            <h1>Register</h1>
            <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
                <div class="txt_field">
                    <input type="text" name="name" required>
                    <span></span>
                    <label>Name</label>
                </div>
                <div class="txt_field">
                    <input type="email" name="email" required>
                    <span></span>
                    <label>Email</label>
                </div>
                <div class="txt_field">
                    <input type="mobail" name="mobail" required>
                    <span></span>
                    <label>Mobail Number</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="cpassword" required>
                    <span></span>
                    <label>Confirm Password</label>
                </div>
                <input name="submit" type="submit" value="Sign Up">
                <div class="signup_link">
                    Have an Account ? <a href="Login.php">Login Here</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>