<?php
    session_start(); 
    if (!isset($_SESSION['username'])) {
        header('location:login.php');
    }
?>
<!Doctype html>
<html lang="en" dir="ltr"> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
        <title>Art-a-Con</title>
        <style type="text/css">
        body {
            margin: 0;
            font-family: Nunito Sans;
        }

        h3 {
            text-align: center;
            font-size: 30px;
            margin: 0;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        a {
            text-decoration: none;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            justify-content: center;
            align-items: center;
            margin: 30px 0;
        }

        .content {
            width: 24%;
            background: white;
            margin: 15px;
            box-sizing: border-box;
            float: left;
            text-align: center;
            border-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            padding-top: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: .3s;
        }

        .content:hover {
            box-shadow: 0 0 11px rgba(33, 33, 33, .2);
            transform: translate(0px, -8px);
            transition: .3s;
        }

        img {
            width: 280px;
            height: 200px;
            text-align: center;
            margin: 0 auto;
            display: block;
        }

        p {
            text-align: center;
            color: black;
            padding: 0 8px;
        }

        h6 {
            font-size: 26px;
            text-align: center;
            color: #222f3e;
            margin: 0;
            padding-top: 6px;
        }

        ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0px;
        }

        li {
            padding: 5px;
        }

        .fa {
            color: #ff9f43;
            font-size: 26px;
            transition: .4s;
        }

        .fa:hover {
            transform: scale(1.3);
            transition: .6s;
        }

        button {
            text-align: center;
            font-size: 24px;
            color: #fff;
            width: 100%;
            padding: 15px;
            border: 0px;
            outline: none;
            cursor: pointer;
            margin-top: 5px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .buy-3 {
            background-color: #0b0b0b;
        }

        @media(max-width: 1000px) {
            .content {
                width: 46%;
            }
        }

        @media(max-width: 750px) {
            .content {
                width: 100%;
            }
        }
        #bid_amount{
            padding : 8px;
            width : 90%;
            border : 2px solid #0b0b0b;
            border-radius: 10px;
            font-size: 16px;
            text-align:center;
        }
        ::placeholder {
            color: #0b0b0b;
            text-align:center;
        }
        #amount{
            font-size : 20px;
        }
        h4{
            margin-top : 5px;
            margin-bottom : 5px;
        }
    </style>
    <!---->
    </head>
    <body>
        <!-- Nav Bar -->
        <?php
            include 'admin/connection.php';

            $search_cat = "select * from categories";
            $search_cat_query = mysqli_query($con,$search_cat);
        ?>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn"> 
                <i class="fas fa-bars"></i>
            </label>
            
            <label class="logo"><i class="fas fa-chart-bar"></i>Art-a-Con</label> 
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li>
                <div class="dropdown">
                    <button class="dropbtn"> Categories</button>
                    <div class="dropdown-content">
                        <?php while($cat_arr = mysqli_fetch_array($search_cat_query)) { ?>
                        <a href="category.php?id=<?= $cat_arr['id'] ?>">
                            <?= $cat_arr['name'] ?>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="winners.php">Winners</a></li>
                <li>
                  <?php 
                  if (isset($_SESSION['username'])) { ?>
                  <a href="logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
                <?php  } else { ?>
                  <a href="login.php">Login <i class="fas fa-sign-out-alt"></i></a>
                <?php }
                   ?>
                </li>
            </ul>    
        </nav>
        <section>
        <?php
         
           
           $id = $_GET['id'];
           $s_product_query = " select * from products where id = '$id'";
           $p_query = mysqli_query($con, $s_product_query);
           $response = mysqli_fetch_array($p_query);

           $set_time = date_default_timezone_set('Asia/Kolkata');

           $s_time = $response['start_date_time'];
           $e_time = $response['end_date_time'];

           $s_strTime = strtotime($s_time);
           $e_strTime = strtotime($e_time);
           $c_time = time(); 

           if($c_time > $e_strTime){ ?>
                <script>
                    location.replace("index.php");
                </script>
        <?php }

           $product_name = $response['name'];
           $user_name = $_SESSION['username'];
           $p_amount = $response['bid_amount'];

           if (isset($_POST['submit'])) {
            $bid_amount = $_POST['bid_amount'];
            if ($bid_amount > $p_amount) {

              $up_query = "update products set bid_amount = '$bid_amount' where id='$id'";
              $u_query = mysqli_query($con, $up_query);

              $insert_query = "insert into bids (product_name, user_name, bid_amount) values ('$product_name', '$user_name', '$bid_amount')";
              $i_query = mysqli_query($con, $insert_query);

              if ($i_query) { ?>
                    <script>
                    alert("Your bid has been placed successfully!");
                    location.replace("index.php");
                    </script>
             <?php } else { ?>
                <script>alert("Unable to bid!");</script>
            <?php  }

            } else {  ?>
                <script>alert("Bid should be higher than previous bid!");</script>
            <?php  
            }
              
           }

           $select_product_query = " select * from products where id = '$id'";
           $product_query = mysqli_query($con, $select_product_query);
           while ($res = mysqli_fetch_array($product_query)) {
        ?>
        <div class="gallery">
            <div class="content">
                <img src="admin/<?=$res['image']?>">
                <h3><?=$res['name']?></h3>
                <h4>Category : <?=$res['category']?></h4>
                <h4>Description : <?=$res['description']?></h4>
                <h4>Bid Higher Than : <span id="amount"><?=$res['bid_amount']?>Rs</span></h4>
                <form action="" method="POST">
                <input id="bid_amount" name="bid_amount" type="text" placeholder="Enter Bidding Amount" autocomplete="off" name="categories" required>
                <button name="submit" class="buy-3">Bid Now</button>
                </form>
            </div>
        </div>
        <?php } ?>
        </section>

         <!-- Footer -->
        <footer>
        <p class="text-center"> &copy Copyright 2024 - Art-a-Con | Designed by Punit</p>
        </footer>

    </body>
</html>     




