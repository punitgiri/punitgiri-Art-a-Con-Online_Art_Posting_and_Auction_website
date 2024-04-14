<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="login.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <title>Silent Seller</title>
</head>

<body>

  <?php
      include 'admin/connection.php';

      if (isset($_POST['signup'])) {
        $name = $_POST['name'];
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['cpassword'];

        $pass = password_hash($password,PASSWORD_BCRYPT); // bcrypting password
        $cpass = password_verify($confirmpassword, $pass);

        // checking double email
        $emailquery = " select * from users where email = '$email'";
        $e_query = mysqli_query($con, $emailquery);
        $emailcount = mysqli_num_rows($e_query);

        // checking double mobile
        $mobilequery = " select * from users where mobile = '$mobile'";
        $m_query = mysqli_query($con, $mobilequery);
        $mobilecount = mysqli_num_rows($m_query);

        // checking double username
        $usernamequery = " select * from users where user_name = '$user_name'";
        $u_query = mysqli_query($con, $usernamequery);
        $usernamecount = mysqli_num_rows($u_query);

        if ($usernamecount>0) { ?>
          <script>alert("Username already exists");</script>
        <?php } else { 
          if ($emailcount>0) { ?>
            <script>alert("Email already exists");</script>
         <?php } else { 
            if ($mobilecount>0) { ?>
              <script>alert("Mobile already exists");</script>
           <?php } else { 

              if ($cpass){

                $insertquery = "insert into users (name, user_name, email, mobile, password) values ('$name', '$user_name', '$email', '$mobile', '$pass')";
                $iquery = mysqli_query($con, $insertquery);

                if ($iquery) { ?>
                    <script>
                    alert("Registration Successful!");
                    location.replace("login.php");
                    </script>
            <?php } else { ?>
              <script>alert("Registration Failed!");</script>
            <?php }

              } else { ?>
                  <script>alert("Passwords are not matching");</script>
            <?php }

            }
          }
        }        
      }
  ?>

  <div class="bg">
    <div class="content">
      <header>Registration Form</header>
      <form action="" method="POST">
        <div class="field">
          <span class="fa fa-user"></span>
          <input type="text" name="name" required placeholder="Name">
        </div>
        <div class="field">
          <span class="fas fa-user-circle"></span>
          <input type="text" name="user_name" required placeholder="User Name">
        </div>
        <div class="field">
          <span class="fa fa-envelope"></span>
          <input type="text" name="email" required placeholder="Email">
        </div>
        <div class="field">
          <span class="fa fa-phone-alt"></span>
          <input type="text" name="mobile" required placeholder="Phone">
        </div>
        <div class="field">
          <span class="fa fa-key"></span>
          <input type="password" name="password" class="pass-key" required placeholder="Password">
          <span class="show">SHOW</span>
        </div>
        <div class="field">
          <span class="fa fa-lock"></span>
          <input type="password" name="cpassword" class="pass-key" required placeholder="Confirm Password">
          <span class="show">SHOW</span>
        </div>
        <br>
        <div class="field">
          <input type="submit" name="signup" value="Sign Up">
        </div>
      </form>

      <BR>
      <div class="signup">
        Already have an account? Login
        <a href="login.php">Login</a>
      </div>
      <br>

      <div class="back">
        <a href="index.php">Back</a>
      </div>
    </div>
  </div>

  <script>
    const pass_field = document.querySelector('.pass-key');
    const showBtn = document.querySelector('.show');
    showBtn.addEventListener('click', function () {
      if (pass_field.type === "password") {
        pass_field.type = "text";
        showBtn.textContent = "HIDE";
        showBtn.style.color = "#3498db";
      } else {
        pass_field.type = "password";
        showBtn.textContent = "SHOW";
        showBtn.style.color = "#222";
      }
    });
  </script>
</body>

</html>