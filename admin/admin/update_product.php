<?php session_start(); ?>
<html>
<head>
<style type="text/css">
 @import url(https://fonts.googleapis.com/css?family=Roboto:300);
 body{
     display : flex;
     flex-direction: column;
     justify-content: center;
     align-items: center;
     font-family: sans-serif;
 }
 .manage-product {
        width: 60%;
        padding: 1% 0 0;
        }

        .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 100%;
        margin:  auto ;
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
        margin-bottom : 8px;
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
        textarea{
            width: 100%;
        }
</style>
</head>
</html>

<?php 
    if (!isset($_SESSION['name'])) {
        header('location:login.php');
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silent seller</title>
</head>
<body>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Product</h1>
</div>
    <?php
        include 'connection.php'; 

        $search_cat = "select * from categories";
        $search_cat_query = mysqli_query($con,$search_cat);

        if(isset($_POST['submit'])){
            $ids = $_GET['id'];
            $name = $_POST['p_name'];
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
                $dest_image = "images/".$image_name; 
                move_uploaded_file($image_temp_path, $dest_image);
 
                $update_query = "update products set name='$name', category='$category', description='$description', bid_amount='$bid_starting_amount',	image='$dest_image', start_date_time='$bid_start_date_time', end_date_time='$bid_end_date_time' where id='$ids'";
                $query = mysqli_query($con, $update_query);
 
                if ($query) { ?>
                    <script>
                        alert("Product updated successfully!");
                        location.replace("index.php?page=products");
                    </script>
            <?php  } else { ?>
                    <script>
                        alert("Failed to update Product!");
                        location.replace("index.php?page=products");
                    </script>
            <?php  } ?>
                
            <?php } 

        }
       
    ?>
    <div class="manage-product">
        <div class="form">
            <form class="manageproduct" action="" method="post" enctype="multipart/form-data">
            <input type="text" autocomplete="off" name="p_name" placeholder="Product Name"> <br>

            <label for="p_cat">Category : </label> 
            <select type="text" name="p_category"> 
            <?php while($cat_arr = mysqli_fetch_array($search_cat_query)) { ?>
            <option value="<?= $cat_arr['name'] ?>"><?= $cat_arr['name'] ?></option>
            <?php } ?>
            </select> <br> 
            <br>
            <textarea name="p_description" cols="50" rows="5" placeholder="Description" value="<?= $arrdata['description']?>"></textarea> <br>

            <input type="number" autocomplete="off" name="p_bid_starting_amount" placeholder="Bid starting amount"> <br>

            <input type="file" name="p_img" placeholder="Choose image"> <br>

            <label for="p_start_date_time">Start Date Time : </label>
            <input type="datetime-local" name="p_start_date_time" id="p_start_date_time"> <br>

            <label for="p_end_date_time">End Date Time : </label>
            <input type="datetime-local" name="p_end_date_time" id="p_end_date_time"> <br>

            
            <button type="submit" name="submit" value="Submit">Submit</button>
            <a href="index.php?page=products">Back to Products</a>
            </form>
        </div>
    </div>
</body>
</html>