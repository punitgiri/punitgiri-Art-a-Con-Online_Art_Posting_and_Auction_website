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
    <h1 class="h2">Welcome! in Users</h1>
</div> 

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th> 
            <th>Mobile</th>
            <th>Status</th>
            <th colspan = "2">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include "connection.php";
        $selectquery = " select * from users ";
        $query = mysqli_query($con, $selectquery);
        while ($res = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?= $res['name']?></td>
            <td><?= $res['user_name']?></td>
            <td><?= $res['email']?></td>
            <td><?= $res['mobile']?></td>
            <td><?php 
                if($res['access_level'] == 100){
                    echo "Admin";
                } else {
                    echo "User";
                }
            ?></td><?php if ($res['access_level'] == 100) { ?>
                <td></td>
                <td></td>
        <?php  } else {?>
                <td><a href="update.php?id=<?= $res['id'] ?>">Edit</a></td>
                <td><a href="delete.php?id=<?= $res['id'] ?>">Delete</a></td>
        <?php  } ?>
        </tr>
  <?php } ?>
    </tbody>
</table>