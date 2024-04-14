<?php
    session_start();
    if (!isset($_SESSION['name'])) { 
        header('location:login.php');
    } else {
        include 'connection.php'; 
        $id = $_GET['id'];

        $showquery = "select * from users where id=$id";
        $showdata = mysqli_query($con,$showquery);
        $arrdata = mysqli_fetch_array($showdata);
 
        if ($arrdata['access_level'] == 100) { ?>
        <script>
            alert("Admin Could not be deleted!");
            location.replace("index.php?page=users");
        </script> 
        <?php } else {
        $deletequery = " delete from users where id=$id ";
        $query = mysqli_query($con, $deletequery); ?>
        <script>
            alert("User successfully deleted!");
            location.replace("index.php?page=users");
        </script> 
     <?php }
    }

?>