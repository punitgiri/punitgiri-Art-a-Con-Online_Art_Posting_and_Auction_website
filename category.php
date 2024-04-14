<?php
    session_start();
?>
<!Doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" />
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
            margin: 20px 0;
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

        #amount {
            font-size: 20px;
        }

        h4 {
            margin-top: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <!-- Nav Bar -->
    <?php
            include 'admin/connection.php';

            $id = $_GET['id'];

            $search_cat = "select * from categories";
            $search_cat_query = mysqli_query($con,$search_cat);
            
            $select_cat = "select * from categories where id='$id'";
            $cat_query = mysqli_query($con, $select_cat);
            $category_arr = mysqli_fetch_array($cat_query);
            $category_name = $category_arr['name'];
        ?>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>

        <label class="logo"><i class="fas fa-chart-bar"></i> Art-a-Con</label>
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
            <li><a href="seller.php">Seller</a></li>
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
    <div class="gallery">
            <?php
            $selectquery = " select * from products where category='$category_name'";
            $query = mysqli_query($con, $selectquery);
            while ($res = mysqli_fetch_array($query)) {
        ?>
 
            <div class="content">
                <img src="admin/<?=$res['image']?>">
                <h3>
                    <?=$res['name']?>
                </h3>
                <h4>Category :
                    <?=$res['category']?>
                </h4>
                <h4>Bid Higher Than : <span id="amount">
                        <?=$res['bid_amount']?>Rs
                    </span></h4>
                <?php 

                    $set_time = date_default_timezone_set('Asia/Kolkata');

                    $s_time = $res['start_date_time'];
                    $e_time = $res['end_date_time'];

                    $s_strTime = strtotime($s_time);
                    $e_strTime = strtotime($e_time);
                    $c_time = time();  

                ?>
                <h4>Bid Start Time :
                    <?=date( "d:m:y h:i A", $s_strTime);?>
                </h4>
                <h4>Bid End Time :
                    <?=date( "d:m:y h:i A", $e_strTime);?>
                </h4>
                <br>
                <?php  
                    if ($c_time <= $s_strTime) { ?>
                <button value="submit" class="buy-3">Bid Not Started</button>
                <?php    } else if ($c_time >= $s_strTime && $c_time <= $e_strTime){ ?>
                <a href="products.php?id=<?=$res['id']?>"><button class="buy-3">Bid Now</button></a>
                <?php   } else { ?>
                <button name="bid_ended" value="submit" class="buy-3">Bid is Ended</button>
                <?php  }
                ?>

            </div>
        
        <?php } ?>
        </div>
    </section>

    <!-- Footer -->
    <footer>
    <p class="text-center"> &copy Copyright 2023 - Art-a-Con | Designed by Punit</p>
    </footer>

</body>

</html>

