<?php
    include 'dbConfig.php';

    $con = mysqli_connect($server,$username,$password,$db); // connecting to db

    if ($con) { 
        
    } else { ?>
        <script>
            alert("Connection failed!");
        </script>
    <?php  }
    
?>