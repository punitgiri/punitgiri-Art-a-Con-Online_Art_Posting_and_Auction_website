<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="aboutus-style.css"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" />
    <title>Art-a-Con</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
        font-family: "Open Sans", sans-serif;
    }
/* body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f1f1f1;
} */
body {
        font-family: 'Segoe UI';
        height: 100vh;
        display: flex;
        flex-direction: column;

    }

.about-section{
    background: url(team_spirit.svg) no-repeat left;
    background-size: 40%;
    background-color: #d7dadd;
    overflow: hidden;
    padding-top: 80px;
    padding-bottom: 120px;
}

.inner-container{
    width: 55%;
    float: right;
    background-color: #fdfdfd;
    padding: 50px;
}

.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.text{
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}

@media screen and (max-width:1200px){
    .inner-container{
        padding: 0 500px;
    }
}

@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container{
        padding: 60px;
    }
}
section {
        background: wheat;
        background-size: cover;
        background-repeat: no-repeat;
        /* margin: 100px; */
        height: calc(100vh - 75px);
    }
    /* Footer */
    footer {
        position: fixed;
        padding: 10px 10px 0px 10px;
        bottom: 0;
        width: 100%;
        height: 50px;
        background-color: rgb(36, 35, 35);
        margin-top: auto;
        /* for footer to stick to bottom*/
    }

    footer p {
        margin-bottom: 1.5in;
        text-align: center;
        color: white;
        line-height: 2rem;
        font-size: 1rem;
    }
</style>
<body>
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

        <label class="logo"><i class="fas fa-chart-bar"></i> Art-a-Con</label>
        <ul>
            <li><a href="index.php">Home</a></li>
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
            <li><a class="active" href="aboutus.php">About Us</a></li>
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

    <div class="about-section">
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text">
                Art-a-Con is a online product selling website through conducting Auction of them. We introduced new
                way of selling products. Customer can both buy or sell products on our platform. All that you have to do
                is Register -> Bid -> and Win.
                It is good for those customers who can’t afford costly products but they wish to buy them we make that
                possible through our platform . We value our customer's security.
                <br>
                There is complete freedom to seller to give their own price to product which they wish to sell. We are
                specialized in selling products of all category. Why spending money to brand new product if you get it
                in lower price. We provide services like freedom to spend money to customer. They can have their own bid
                for a particular product which makes them satisfactory.

            </p>

            <p class="text">

            </p>
            <div class="skills">
                <span>Web Design</span>
                <span>Security</span>
                <span>Team Work</span>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
    <p class="text-center"> &copy Copyright 2024 - Art-a-Con | Designed by Punit</p>
    </footer>

</body>

</html>