<?php
include 'includes/admin_header.php';
include 'includes/admin_top_navigation.php';
 ?>

 <div id="page-wrapper">

       <div class="container-fluid">

         <!-- Page Heading -->
         <div class="row">
             <div class="col-lg-12">
                 <h1 class="page-header">
                     Welcome To Admin




                     <small><?php
                      echo $_SESSION['current_user'];?>
                      </small>
                 </h1>
             </div>
<?php

        if (isset($_POST['submit'])) {
                                        $category_name = mysqli_real_escape_string($connection, $_POST['category_name']);
                                        $query = "INSERT INTO industry(Name)";
                                        $query .="VALUES ('{$category_name}')";
                                        $add_product_query= mysqli_query($connection, $query);
                                        echo "<script>alert('Category Added successfully');</script>";

                                                    if(!$add_product_query){
                                                            die("QUERY FAILED" .mysqli_error($connection));
                                                            echo "<script>alert('Failed to add new category, try again');</script>";
                                                          }
        }


?>


<?php  ?>

<form action="" method="post">
<div class="form-group">
<label for="category_name-title">Add Category</label>
<input type="text" class="form-control" name="category_name">
</div>
<div class="form-group">
<input class="btn btn-primary" type="submit" name="submit" value="Add Category">
</div>

</form>
<hr>

<div class="col-md-8">

</div>
<table width= '700' class="table table-bordered table-hover table-condensed">


<thead>
<tr>
<th>Id</th>
<th>Category Title</th>
</tr>
</thead>
<tbody>

                    <?php


                    $query = "SELECT * FROM industry";
                    $select_categories = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_assoc($select_categories)) {
                    $cat_id = $row['Id'];
                    $cat_title = $row['Name'];

                    echo "<tr>";

                    echo "<td>{$cat_id}</td>";
                    echo "<td>{$cat_title}</td>";
                    echo "<td><a href='jobCategories.php?delete={$cat_id}'>Delete</a></td>";
                    echo "</tr>";

                    }




                    ?>




</tbody>
</table>




</div>


</div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>



<?php


if(isset($_GET['delete'])){
$the_cat_id = $_GET['delete'];
$query = "DELETE FROM industry WHERE Id = {$the_cat_id} ";
$delete_query = mysqli_query($connection,$query);
echo "<script>alert('Deleted successfully');</script>";
echo '<script>window.location="jobCategories.php" </script>';

}

?>





<!-- /#page-wrapper -->

<?php include "includes/admin_footer.php" ?>
