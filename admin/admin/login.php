<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
       @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
        }
        .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
        }
        .form .button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #212529;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
        }
        .form .button:hover,.form .button:active,.form .button:focus {
        background: #343a40;
        }
        .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
        }
        .form .message a {
        color: #4CAF50;
        text-decoration: none;
        }
        .form .register-form {
        display: none;
        }
        .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
        }
        .container:before, .container:after {
        content: "";
        display: block;
        clear: both;
        }
        .container .info {
        margin: 50px auto;
        text-align: center;
        }
        .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
        }
        .container .info span {
        color: #4d4d4d;
        font-size: 12px;
        }
        .container .info span a {
        color: #000000;
        text-decoration: none;
        }
        .container .info span .fa {
        color: #EF3B3A;
        }
        body {
        background: #f8f9fa;
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;      
        }
    </style>
</head>
<body>
    
    <?php
        include "connection.php";

        if (isset($_POST['submit'])) {

            $user_name = $_POST['user_name'];
            $password = $_POST['password'];

            $user_name_search = " select * from users where user_name = '$user_name' ";
            $query = mysqli_query($con, $user_name_search);

            $user_name_count = mysqli_num_rows($query);

            if ($user_name_count) {
                $admin_arr = mysqli_fetch_assoc($query);
                $access_level = $admin_arr['access_level'];
                $admin_pass = $admin_arr['password'];
                $_SESSION['name'] = $admin_arr['name'];
                $admin_pass_check = password_verify($password, $admin_pass);
                if ($admin_pass_check && $access_level == 100) {
                    header('location:index.php?page=home');
                } else { ?>
                    <script>
                        alert("Invalid Login Details");
                    </script>
               <?php }
            } else { ?>
                <script>
                    alert("Invalid Login Details");
                </script>
        <?php  } 

        }
    ?>

    <div class="login-page">
        <div class="form">
            <h1>Admin Login</h1>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"> 
                <input type="text"name="user_name" placeholder="Enter Username" autocomplete="off" required>
                <input type="password" name="password" placeholder="Enter Password" autocomplete="off" required>
                <input type="submit" class="button" name="submit" value="Login">
            </form>
        </div>
    </div>

    <script>
        $('.message a').click(function () {
            $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
        });
    </script>
</body>
</html>


<!-- #212529 -b
#f8f9fa -v -->