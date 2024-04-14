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

/* Footer */
footer{
    position: fixed;
    padding: 10px 10px 0px 10px;
    bottom: 0;
    width: 100%;
    height: 50px;
    background-color: rgb(36, 35, 35);
    margin-top: auto; /* for footer to stick to bottom*/
}
footer p{
    margin-bottom: 1.5in;
    text-align: center;
    color: white;
    line-height: 2rem;
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
.seller{
    background: url(seller.svg) no-repeat center;
    background-size: 30%;
    background-position-x: 8%;
   
    
    height: calc(90vh - 75px);
    padding: 40px 0;
  }

  .border{
    width: 100px;
    height: 10px;
    background-color: white;
    margin: 15px auto;
  }

  .requestproduct{
    max-width: 600px;
    margin: auto;
    padding: 10px 10px 10px 10px;
    margin-left: 800px;
    border: 5px solid black;
  }

  ::placeholder{
    color: grey;
    opacity: 1;
}

  .requestproduct-text{
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
  .requestproduct-text:focus{
    box-shadow: 0 0 10px 4px #34495e;
  }
  textarea.requestproduct-text{
    resize: none;
    height: 120px;
  }
  .requestproduct-btn{
    display: block;
    /* float: right; */
    border: 0;
    background: #34495e;
    color: #fff;
    margin: 6px 50px 50px 50px;
    padding: 20px 40px;
    border-radius: 20px;
    cursor: pointer;
    outline: none;
    transition: 0.5s;
  }
  .requestproduct-btn:hover{
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
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art-a-Con</title>
</head>
<body>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <!-- <h1 class="h2">Add Product Request</h1> -->
</div>
    <?php 
        include "admin/connection.php";
        $search_cat = "select * from categories";
        $search_cat_query = mysqli_query($con,$search_cat);

        if(isset($_POST['submit'])){
            
            $seller_name = $_POST['s_name'];
            $email = $_POST['email'];
            $product_name = $_POST['p_name'];
            $category = $_POST['p_category'];
            $description = $_POST['p_description'];
            $bid_starting_amount = $_POST['p_bid_starting_amount'];
            $image = $_FILES['p_img'];
            $bid_start_date_time = $_POST['p_start_date_time'];
            $bid_end_date_time = $_POST['p_end_date_time'];

            $image_name = $image['name'];
            $image_temp_path = $image['tmp_name'];
            $image_err = $image['error'];

            if ($image_err == 0) { 
                $dest_image = "admin/images/".$image_name; 
                move_uploaded_file($image_temp_path, $dest_image);
 
                $insert_query = "insert into seller (seller_name, email, product_name, category, description, bid_amount, image, start_date_time, end_date_time) values ('$seller_name', '$email', '$product_name', '$category', '$description', '$bid_starting_amount', '$dest_image', '$bid_start_date_time', '$bid_end_date_time')";
                $query = mysqli_query($con, $insert_query);
 
                if ($query) { ?>
                    <script>
                        alert("Product request submited successfully!");
                        location.replace("seller.php");
                    </script>
            <?php  } else { ?>
                    <script>
                        alert("Failed to submmit Product request!");
                        location.replace("seller.php");
                    </script>
            <?php  } ?>
                
            <?php } 

        }
        
    ?> 
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
                <li><a class="active" href="seller.php">Seller</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.html">Login <i class="fas fa-sign-out-alt"></i></a></li>
            </ul>    
        </nav>
    <!-- form -->
    <div class="seller">
        
            <form class="requestproduct" action="" method="post" enctype="multipart/form-data">
            <input type="text" class="requestproduct-text" autocomplete="off" name="s_name" placeholder="Seller Name">
            <input type="email" class="requestproduct-text" autocomplete="off" name="email" placeholder="Email">
            <input type="text" class="requestproduct-text" autocomplete="off" name="p_name" placeholder="Product Name"> 

            <label for="p_cat">Category : </label> 
            <select type="text" name="p_category"> 
            <?php while($cat_arr = mysqli_fetch_array($search_cat_query)) { ?>
            <option value="<?= $cat_arr['name'] ?>"><?= $cat_arr['name'] ?></option>
            <?php } ?>
             </select> <br> 
                <br>
            <textarea name="p_description" class="requestproduct-text" cols="50" rows="5" placeholder="Description"></textarea> 

            <input type="number" class="requestproduct-text" autocomplete="off" name="p_bid_starting_amount" placeholder="Bid starting amount"> <br>

            <input type="file" name="p_img" placeholder="Choose image"> <br>
                <br>
            <label for="p_start_date_time">Start Date Time : </label>
            <input type="datetime-local" class="requestproduct-text" name="p_start_date_time" id="p_start_date_time"> 

            <label for="p_end_date_time">End Date Time : </label>
            <input type="datetime-local" class="requestproduct-text" name="p_end_date_time" id="p_end_date_time"> 
    
            <button class="requestproduct-btn" type="submit" name="submit" value="Submit">Submit</button>
            </form>      
    </div>


    <!-- Footer -->
<footer>
    <p>&copy Copyright 2024 - Art-a-Con | Designed by Punit</p>
</footer>
</body>
</html>