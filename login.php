<?php
    session_start();
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="login.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <title>Art-a-Con</title>
</head>
<body>
  <?php
      include 'admin/connection.php';

      if (isset($_POST['login'])) { 

          $user_name = $_POST['user_name'];
          $password = $_POST['password'];

          $username_search = "select * from users where user_name = '$user_name'";
          $query = mysqli_query($con, $username_search);

          $username_count = mysqli_num_rows($query);

          if ($username_count) {
            $username_pass = mysqli_fetch_assoc($query);

            $dbpass = $username_pass['password'];
            $_SESSION['username'] = $username_pass['user_name']; 

            $pass_check = password_verify($password, $dbpass);

            if ($pass_check) { ?>
  <script>
    location.replace("index.php"); 
  </script>
  
  <?php } else { ?>
  <script>
    alert("Invalid Login details!");
  </script>
  <?php  }
  } else { ?>
  <script>
    alert("Invalid Login details!"); 
  </script>
  <?php  }    
      }
?>
  <div class="bg-img">
    <div class="content">
      <header>Login Form</header>
      <form action="" method="POST">
        <div class="field">
          <span class="fa fa-user"></span>
          <input type="text" required name="user_name" placeholder="Enter Username">
        </div>
        <div class="field space">
          <span class="fa fa-lock"></span>
          <input type="password" class="pass-key" name="password" required placeholder="Enter Password">
          <span class="show">SHOW</span>
        </div>
        <br>
        <div class="field">
          <input type="submit" name="login" value="LOGIN">
          
        </div>
        <br>
      </form>
      <div class="signup">
        Don't have account?
        <a href="signup.php">Signup Now</a>
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