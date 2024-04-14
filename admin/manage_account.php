<html>
<head>
<style type="text/css">
 @import url(https://fonts.googleapis.com/css?family=Roboto:300);
 .manage-account {
        width: 70%;
        padding: 1% 0 0;
        margin-right: 10%;
        }

        .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 70%;
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
        .form button {
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
        .form button:hover,.form button:active,.form button:focus {
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
</style>
</head>
</html>

<?php 
    if (!isset($_SESSION['name'])) {
        header('location:login.php');
    }
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome! in Manage Account</h1>
</div>
<?php
    include "connection.php";

    $selectquery = "select * from users where access_level=100";
    $query = mysqli_query($con, $selectquery);
    $res = mysqli_fetch_array($query);

    if (isset($_POST['update'])) {

        $id = $res['id'];
        $access_level = $res['access_level'];
        $name = $_POST['name']; // for extre security = mysqli_real_escape_string($con,$_POST['name']) 
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $new_password = $_POST['new_password'];
        $old_password = $res["password"];

        $check_password = password_verify($password, $old_password);

        if ($check_password) {

            $username_query = " select * from users where user_name = '$user_name'";
            $query = mysqli_query($con, $username_query);
            $username_count = mysqli_num_rows($query);

            if ($username_count > 0) { ?>

                <script>alert("Username already exist");</script>

     <?php } else {

                if (empty($new_password)) {

                    $updatequery = "update users set id='$id', name='$name', user_name='$user_name', email='$email', mobile='$mobile', password='$old_password', access_level='$access_level' where access_level='$access_level'";
                    $uquery = mysqli_query($con, $updatequery);

                    if ($uquery) { ?>
                        <script>
                           alert("Data updated successfully!");
                           location.replace("index.php?page=users");
                       </script>
                   <?php} else { ?>
                       <script>alert("Data updation failed!");</script>
                  <?php }

                } else {

                    $new_password = password_hash($new_password, PASSWORD_BCRYPT);
                    $updatequery = "update users set id='$id', name='$name', user_name='$user_name', email='$email', mobile='$mobile', password='$new_password', access_level='$access_level' where access_level='$access_level' ";
                    $uquery = mysqli_query($con, $updatequery);

                    if ($uquery) { ?>
                        <script>
                           alert("Data updated successfully!");
                           location.replace("index.php?page=users");
                       </script>
                   <?php} else { ?>
                       <script>alert("Data updation failed!");</script>
                  <?php }
                  
                }
                
            }
            
        } else { ?>
            <script>alert("Password is incorrect");</script>
  <?php }


     }

?>
<div class="manage-account">
        <div class="form">
            
            <form class="manageaccount" action="" method="POST">
            <input type="text" autocomplete="off" name="name" placeholder="Name" value="<?= $res["name"] ?>" required> <br>
            <input type="text" autocomplete="off" name="user_name" placeholder="Username" value="<?= $res["user_name"] ?>" required> <br>
            <input type="text" autocomplete="off" name="email" placeholder="Email" value="<?= $res["email"] ?>" required> <br>
            <input type="text" autocomplete="off" name="mobile" placeholder="Mobile No." value="<?= $res["mobile"] ?>" required> <br>
            <input type="password" autocomplete="off" name="password" placeholder="Password" required> <br>
            <input type="password" autocomplete="off" name="new_password" placeholder="New Password"> <br>
            <!-- <input type="submit" name="update" value="Update"> -->
            <br>
            <button type="submit" name="update" value="Submit">Submit</button>
            </form>
        </div>
</div>        
