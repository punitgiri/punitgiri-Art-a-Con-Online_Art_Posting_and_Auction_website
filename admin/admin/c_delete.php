<?php
    session_start();
    if (!isset($_SESSION['name'])) { 
        header('location:login.php');
    } else {
        include 'connection.php'; 
        $id = $_GET['id'];

        $deletequery = " delete from categories where id=$id ";
        $query = mysqli_query($con, $deletequery);
        ?>
        <script>
            alert("Category successfully deleted!");
            location.replace("index.php?page=categories");
        </script> 
        <?php 
    }

?>