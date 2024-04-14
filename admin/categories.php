<html>
<head>
<style type="text/css">
.addcategory{
    display: flex; 
    align-items: center;
    padding: 10px 20px;
    margin: 10px;

}
.addcategory input{   
  padding: 10px 20px;  
  border: 2px solid #ddd;
  text-align: center;
}
.addcategory button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 2px solid #ddd;
  color: white;
  cursor: pointer;
}

.addcategory button:hover {
  background-color: royalblue;
}

table {
margin: 40px;
border: 2px solid black;
width: 60%;
height: 80%;
}
th {
font-family: Arial, Helvetica, sans-serif;
font-size: 1.1em;
background: #212529;
color: #FFF;
padding: 10px 5px;
border-collapse: separate;
border: 2px solid #000;
text-align: center;
}
td {
font-family: Arial, Helvetica, sans-serif;
font-size: 1.0em;
border: 1px solid #DDD;
font-weight: bold;
text-align: center;
}
</style>
<?php 
    if (!isset($_SESSION['name'])) {
        header('location:login.php');
    }
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome! in Categories</h1>
</div>
<?php
     include "connection.php";
     $selectquery = " select * from categories ";
     $query = mysqli_query($con, $selectquery);

     if(isset($_POST['submit'])){
        $categories = $_POST['categories'];
        $insertquery = "insert into categories (name) values ('$categories')";
        $iquery = mysqli_query($con, $insertquery);

        if ($iquery) { ?>
            <script>
            alert("Category successfully added!");
            location.replace("index.php?page=categories");
            </script> 
    <?php } else { ?>
            <script>
            alert("Failed to add category!");
            location.replace("index.php?page=categories");
            </script> 
    <?php }   
     }
?>
<form class="addcategory" action="" method="POST">
    <input type="text" placeholder="Add categories" autocomplete="off" name="categories" required>
    <button type="submit" name="submit" value="Submit">Submit</button>
</form>
<table>
    <thead>
        <tr>
            <th>Categories</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($res = mysqli_fetch_array($query)) { ?>
        <tr>
            <td><?= $res['name'] ?></td>
            <td><a href="c_delete.php?id=<?= $res['id'] ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>


</body>
</html>