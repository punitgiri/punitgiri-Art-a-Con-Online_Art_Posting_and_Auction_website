<html>
<head>
<style type="text/css">


table {
margin: 20px 40px;
border: 2px solid #212529;
width: 60%; 
height: 80%;
}
thead{
    width: 20vh;
}
th {
font-family: Arial, Helvetica, sans-serif;
font-size: 1.1em;
background: #212529;
color: #FFF;
padding: 15px;
border-collapse: separate;
border: 2px solid #000;
}
td {
font-family: Arial, Helvetica, sans-serif;
font-size: 1.0em;
border: 1px solid #DDD;
padding: 5px 15px;
font-weight: bold;
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
    <h1 class="h2">Welcome! in Seller Requests</h1>
</div>
<!-- <a href="index.php?page=manage_product"><button>Add Product</button></a> <br> <br> -->
<table>
    <thead>
        <tr>
            <th>Seller Name</th>
            <th>Email</th>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Description</th> 
            <th>Bid Amount</th>            
            <th>Bid Start Date and Time</th>
            <th>Bid End Date and Time</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include "connection.php";
        $selectquery = " select * from seller ";
        $query = mysqli_query($con, $selectquery);
        while ($res = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?= $res['seller_name']?></td>
            <td><?= $res['email']?></td>
            <td><img src="<?= $res['image']?>" height="50px" width="100px"></td>
            <td><?= $res['product_name']?></td>
            <td><?= $res['category']?></td>
            <td><?= $res['description']?></td>
            <td><?= $res['bid_amount']?></td>            
            <td><?= $res['start_date_time']?></td>
            <td><?= $res['end_date_time']?></td>
            <!-- <td><a href="update_product.php?id=<?= $res['id']?>">Edit</a></td> -->
            <td><a href="delete_seller.php?id=<?= $res['id']?>">Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>