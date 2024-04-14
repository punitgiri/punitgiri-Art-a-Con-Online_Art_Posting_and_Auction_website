<html>
<head>
<style type="text/css">
table {
margin: 40px;
border: 2px solid #212529;
width: 60%;
height: 80%;
}
th {
font-family: Arial, Helvetica, sans-serif;
font-size: 1.1em;
background: #212529;
color: #FFF;
padding: 10px 20px;
border-collapse: separate;
border: 2px solid #000;
}
td {
font-family: Arial, Helvetica, sans-serif;
font-size: 1.0em;
border: 1px solid #DDD;
padding: 10px 20px;
font-weight: bold;
}
</style>
<?php 
    if (!isset($_SESSION['name'])) {
        header('location:login.php');
    }
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome! in Winners</h1>
</div>
<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Product Name</th>
            <th>Bid Amount</th> 
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<?php
    include "connection.php";

    $selectquery = " select product_name, max(bid_amount) from bids group by product_name";
    $query = mysqli_query($con, $selectquery);
    while ($res = mysqli_fetch_array($query)) {
        
        $p_name = $res['product_name'];
        $m_b_a = $res['max(bid_amount)'];
        
        $s_q = "select * from bids where product_name='$p_name' and bid_amount='$m_b_a'";
        $q = mysqli_query($con, $s_q);
        while ($r = mysqli_fetch_array($q)) { ?>
            <tr>
            <td><?= $r['user_name']?></td>
            <td><?= $r['product_name']?></td>
            <td><?= $r['bid_amount']?></td>
            <td><a href="b_delete.php?id=<?= $r['id'] ?>">Delete</a></td>
        </tr>
        <?php } 
    } 

?>