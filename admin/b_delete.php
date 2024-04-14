<?php
    session_start();
    if (!isset($_SESSION['name'])) { 
        header('location:login.php');
    } else {
        include 'connection.php'; 
        $id = $_GET['id'];
        $deletequery = " delete from bids where id=$id ";
        $query = mysqli_query($con, $deletequery); ?>
        <script>
            alert("Bid successfully deleted!");
            location.replace("index.php?page=bids");
        </script> 
     <?php }

?>