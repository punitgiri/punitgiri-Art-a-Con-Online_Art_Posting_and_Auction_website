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
        body {
            margin: 0;
            font-family: 'Nunito Sans', 'Segoe UI';
            position: relative;
            overflow: auto;
            height: 200vh;
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
    footer {
        position: relative;
        padding: 10px 10px 0px 10px;
        bottom: 0;
        width: 100%;
        height: 50px;
        background-color: rgb(36, 35, 35);
        /* margin-top: auto; */
        /* for footer to stick to bottom*/
    } 

    footer p {
        margin-bottom: 1.5in;
        text-align: center;
        color: white;
        line-height: 2rem;
        font-size: 1rem;
    } 

    section{
    background: rgb(253, 242, 242);
    background-size: cover;
    background-repeat: no-repeat;
    /* margin: 100px; */
    height: 300vh;
    }

    .dropbtn{
    background: none;
    color: white;    
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
    border: none;
    }

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



    </style>
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
            <li><a class="active" href="#">Home</a></li>
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
                <a href="logout.php"> <?=$_SESSION['username'];?>  <i class="fas fa-sign-out-alt"></i></a>
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
            $selectquery = " select * from products ";
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
                <button name="bid_ended" value="submit" class="buy-3">Bid Ended</button>
                <?php  }
                ?>

            </div>
            <?php } ?>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p class="text-center"> &copy Copyright 2024 - Art-a-Con | Designed by Punit</p>
    </footer>

</body>

</html>