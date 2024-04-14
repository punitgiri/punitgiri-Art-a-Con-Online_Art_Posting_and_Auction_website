<?php
    session_start();
    if (!isset($_SESSION['name'])) {
        header('location:login.php');
    }
    include "header.php"; 
    include "h_nav.php";
    include "v_nav.php";
?>
 
    <div class="container-fluid"> 
        <div class="row">   
 
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <?php $page = isset($_GET['page']) ? $_GET['page'] :'home'; ?>
  	            <?php include $page.'.php' ?>
                  
            </main>

        </div>
    </div>

<?php
    include "footer.php";
?>