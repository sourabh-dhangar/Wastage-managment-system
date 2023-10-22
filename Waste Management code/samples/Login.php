<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
    body {
        font-family: sans-serif;
        background: -webkit-linear-gradient(to right, #155799, #159957);
        background: linear-gradient(to right, #155799, #159957);
        color: whitesmoke;
    }


    h1 {
        text-align: center;
    }


    form {
        width: 35rem;
        margin: auto;
        color: whitesmoke;
        backdrop-filter: blur(16px) saturate(180%);
        -webkit-backdrop-filter: blur(16px) saturate(180%);
        background-color: rgba(11, 15, 13, 0.582);
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.125);
        padding: 20px 25px;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        margin: 10px 0;
        border-radius: 5px;
        padding: 15px 18px;
        box-sizing: border-box;
    }

    button {
        background-color: #030804;
        color: white;
        padding: 14px 20px;
        border-radius: 5px;
        margin: 7px 0;
        width: 100%;
        font-size: 18px;
    }

    button:hover {
        opacity: 0.6;
        cursor: pointer;
    }

    .headingsContainer {
        text-align: center;
    }

    .headingsContainer p {
        color: gray;
    }

    .mainContainer {
        padding: 16px;
    }


    .subcontainer {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    .subcontainer a {
        font-size: 16px;
        margin-bottom: 12px;
    }

    span.forgotpsd a {
        float: right;
        color: whitesmoke;
        padding-top: 16px;
    }

    .forgotpsd a {
        color: rgb(74, 146, 235);
    }

    .forgotpsd a:link {
        text-decoration: yellowgreen;
    }

    .register {
        color: white;
        text-align: center;
    }

    .register a {
        color: rgb(74, 146, 235);
    }

    .register a:link {
        text-decoration: none;
    }

    /* Media queries for the responsiveness of the page */
    @media screen and (max-width: 600px) {
        form {
            width: 25rem;
        }
    }

    @media screen and (max-width: 400px) {
        form {
            width: 20rem;
        }
    }
    </style>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login page in HTML</title>
    </head>

    <body>
        <?php
        include 'dbcon.php';
        if(isset($_POST['submit']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];

            $email_search = "select *from registation where email='$email'";
            $query=mysqli_query($con,$email_search);

            $email_count = mysqli_num_rows($query);

            if($email_count)
            {
                $email_pass= mysqli_fetch_assoc($query);
                
                $db_pass = $email_pass['password'];

                $_SESSION['username']=$email_pass['username'];
                
                $pass_decode=password_verify($password,$db_pass);
                // $pass_decode= password_verify($password,$db_pass);
                if($pass_decode)
                {
                    echo "Login Successfull";
                    ?>
        <script>
        location.replace("project.php")
        </script>
        <?php
        }
        else
        {
        echo "Password Incurrect ";
        }
        }
        else
        {
        echo "Invailid Email ";
        }

        }

        ?>
        <h1>Login</h1>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
            <!-- Headings for the form -->
            <div class="headingsContainer">
                <h3>Sign in</h3>
                <p>Sign in with your username and password</p>
            </div>

            <!-- Main container for all inputs -->
            <div class="mainContainer">
                <!-- Username -->
                <label for="username">Your username</label>
                <input type="text" placeholder="Enter Username or Email id" name="email" required>

                <br><br>

                <!-- Password -->
                <label for="pswrd">Your password</label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <!-- sub container for the checkbox and forgot password link -->
                <div class="subcontainer">
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    <p class="forgotpsd"> <a href="forget.php">Forgot Password?</a></p>
                </div>


                <!-- Submit button -->
                <button name="submit" type=" submit">Login</button>

                <!-- Sign up link -->
                <p class="register">Not a member? <a href="register.php">Register here!</a></p>


            </div>

        </form>
    </body>

    </html>
</body>

</html>