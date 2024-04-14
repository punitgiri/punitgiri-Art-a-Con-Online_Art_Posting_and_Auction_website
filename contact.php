<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Art-a-Con</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
  </head>
  <style>
*{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
    font-family: "Open Sans",sans-serif;
}
.fa-sign-out-alt{
    color: white;
}

body{
    font-family: 'Segoe UI'  ;
        height: 100vh;
        display: flex;
        flex-direction: column;
    
}
nav{
    background: rgb(36, 35, 35);
    height: 80px;
    width: 100%;
}
label.logo{
    color: white;
    font-size: 35px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
}
nav ul{
    float: right;
    margin-right: 20px;
}
nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
}
nav ul li a{
    color: white;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
}
a.active,a:hover{
    background: gray;
    transition: .5s;
}
.checkbtn{
    font-size: 30px;
    color: white;
    float: right;
    line-height: 80px;
    margin-right: 40px;
    cursor: pointer;
    display: none;
}
#check{
    display: none;
}
@media (max-width: 952px){
    label.logo{
        font-size: 30px;
        padding-left: 50px;
    }
    nav ul li a{
        font-size: 16px;
    }
}
@media (max-width: 858px){
    .checkbtn{
        display: block;
    }
    ul{
       position: fixed;
       width: 100%;
       height: 100vh;
       background: #2c3e50;
       top: 80px;
       left: -100;
       text-align: center; 
       transition: all .5s;
    }
    nav ul li{
        display: block;
        margin: 50px 0;
        line-height: 30px;
    }
    nav ul li a{
        font-size: 20px;
    }
    a:hover,a.active{
        background: none;
        color: #0082e6;
    }
    #check:checked ~ ul{
        left: 0;
    }
}
section{
    background: wheat;
    background-size: cover;
    background-repeat: no-repeat;
    /* margin: 100px; */
    height: calc(100vh - 75px);
}
/* Footer */
footer{
    width: 100%;
    height: 60px;
    background-color: rgb(36, 35, 35);
    margin-top: auto; /* for footer to stick to bottom*/
}
footer p{
    margin-bottom: 1.5in;
    text-align: center;
    color: white;
    line-height: 4rem;
    font-size: 1.2rem;
}

.dropbtn {
    background: none;
    color: white;
    
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
    border: none;
}
/* .no-focus-outline a:focus,.no-focus-outline button:focus {
    outline: none;
} */
.dropdown {
    display: inline-block;
    position: relative;
    margin: 0px 5px;
}
.dropdown-content {
    position: absolute;
    background-color: lightgrey;
    min-width: 200px;
    display: none;
    z-index: 1;
}
.dropdown-content a {
    text-align: center;
    color: black;
    padding: 3px 8px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {
    background-color: rgb(163, 162, 162);
}
.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    color: white;
    background: grey;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase; 
    border-color: black;
}



/* Contact Form   */
.contact-section{
    background: url(contact_us.svg) no-repeat center;
    background-size: 50%;
    background-position-x: 0;
   
    
    height: calc(90vh - 75px);
    padding: 40px 0;
  }

  .border{
    width: 100px;
    height: 10px;
    background-color: white;
    margin: 15px auto;
  }

  .addcontact{
    max-width: 600px;
    margin: auto;
    padding: 10px 10px 10px 10px;
    margin-left: 800px;
    border: 5px solid black;
  }

  ::placeholder{
    color: #f1f1f1;
    opacity: 1;
}

  .addcontact-text{
    display: block;
    width: 100%;
    box-sizing: border-box;
    margin: 16px 0;
    border: 0;
    background: #313538 ;
    padding: 20px 40px;
    outline: none;
    color: #ddd;
    transition: 0.5s;
  }
  .addcontact-text:focus{
    box-shadow: 0 0 10px 4px #34495e;
  }
  textarea.addcontact-text{
    resize: none;
    height: 120px;
  }
  .addcontact-btn{
    float: right;
    border: 0;
    background: #34495e;
    color: #fff;
    padding: 12px 50px;
    border-radius: 20px;
    cursor: pointer;
    transition: 0.5s;
  }
  .addcontact-btn:hover{
    background: #2980b9;
  }
  
header{
    width: 100%;
    height: 82px;
    background-color: #212529 ;
}
label.heading{
    color: white;
    align-content: center;
    font-size: 35px;
    padding-left: 680px;
    padding-top: 30px;
    padding-bottom: 30px;
    font-weight: bold;
}
  </style>



<body>
<?php
     include "admin/connection.php";
     $selectquery = " select * from contact ";
     $query = mysqli_query($con, $selectquery);

     if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];


        $insertquery = "insert into contact (name , email , phone , message) values ('$name' , '$email' , '$phone' , '$message')";
        $iquery = mysqli_query($con, $insertquery);

        if ($iquery) { ?>
            <script>
            alert("Message successfully added!");
            location.replace("index.html?page=contact");
            </script> 
    <?php } else { ?>
            <script>
            alert("Failed to add Message!");
            location.replace("index.html?page=contact");
            </script> 
    <?php }   
     }
?>
<!-- <form class="addcontact" action="" method="POST">
    <input type="text" placeholder="Name" autocomplete="off" name="name" required>
    <input type="email" placeholder="Email" autocomplete="off" name="email" required>
    <input type="number" placeholder="Phone" autocomplete="off" name="phone" required>
    <input type="text" placeholder="Message" autocomplete="off" name="message" required>
    <button type="submit" name="submit" value="Submit">Submit</button>
</form> -->
        <!-- Nav Bar -->
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn"> 
                <i class="fas fa-bars"></i>
            </label>
            
            <label class="logo"><i class="fas fa-chart-bar"></i> Art-a-Con</label> 
           <!--<a class="navbar-brand" href="#"><i class="fas fa-snowflake"></i> WeatherApp <i
                                class="fas fa-snowflake"></i></a> --> 
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><div class="dropdown">
                    <button class="dropbtn"> Categories</button>
                    <div class="dropdown-content">
                        <a href="#"> Sculpture </a>
                        <a href="#"> Painting </a>
                        <a href="#"> Drawing </a>
                        <a href="#"> Sketch </a>
                    </div>
                </div></li>
                <li><a href="seller.php">Seller</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li><a href="login.html">Login <i class="fas fa-sign-out-alt"></i></a></li>
            </ul>    
        </nav>

<!-- Form -->
<div class="contact-section">
    
    <form class="addcontact" action="" method="POST">
    <input type="text" class="addcontact-text" placeholder="Name" autocomplete="off" name="name" required>
    <input type="email" class="addcontact-text" placeholder="Email" autocomplete="off" name="email" required>
    <input type="number" class="addcontact-text" placeholder="Phone" autocomplete="off" name="phone" required>
    <textarea class="addcontact-text" placeholder="Message" autocomplete="off" name="message" required></textarea>
    <button class="addcontact-btn" type="submit" name="submit" value="Submit">Submit</button>
  </form>
</div>

<!-- Footer -->
<footer>
    <p>&copy Copyright 2024 - Art-a-Con | Designed by Punit</p>
</footer>

</body>
</html>