<h3 class="page-header">VIEW ALL PRODUCTS
<div class="col-sm-3 user_image_box">
 <span class="fa fa-list fa-1x"></span>
</div>
</h3>
<br>
<br>
<br>
<br>

<table width= '700' class="table table-bordered table-hover table-condensed">
  <thead>
    <tr>
      <th>Product Id</th>
      <th>Post Date</th>
      <th>Brand</th>
      <th>Model</th>
      <th>Processor</th>
      <th>Ram</th>
      <th>SSD</th>
      <th>HDD</th>
      <th>Display</th>
      <th>Ports</th>
      <th>Image 1</th>
      <th>Price</th>
      <th>Quantity</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM products ";
    $select_products =
    mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_products)){
      $product_id = $row['product_id'];
      $postdate = $row['post_date'];
      $Brand = $row['brand'];
      $Model = $row['model'];
      $Processor = $row['processor'];
      $Ram = $row['Ram'];
      $SSD = $row['ssd'];
      $HDD = $row['hdd'];
      $Display = $row['display'];
      $Ports = $row['ports'];
      $Tags = $row['tags'];
      $Recommended = $row['recommended'];
      $Image1 = $row['image1'];
      $Price = $row['price'];
      $Description = $row['Description'];
      $Category = $row['category'];
      $Quantity = $row['quantity'];
      echo "<tr>";
                  echo "<td>{$product_id}</td>";
                  echo "<td>{$postdate}</td>";
                  echo "<td>{$Brand}</td>";
                  echo "<td>{$Model}</td>";
                  echo "<td>{$Processor}</td>";
                  echo "<td>{$Ram}</td>";
                  echo "<td>{$SSD}</td>";
                  echo "<td>{$HDD}</td>";
                  echo "<td>{$Display}</td>";
                  echo "<td>{$Ports}</td>";
      echo "<td><img width='100' src='../img/$Image1'</td>";
                  echo "<td>{$Price}</td>";
                  echo "<td>{$Quantity}</td>";
                  echo "<td><a href='products.php?source=edit_product&p_id={$product_id}'>Edit</a></td>";
                  echo "<td><a href='products.php?delete={$product_id}'>Delete</a></td>";




      echo "</tr>";


    }
     ?>
  </tbody>
</table>




<?php
      if (isset($_GET['delete'])) {
      $the_product_id = $_GET['delete'];
      $query = "DELETE FROM products WHERE product_id = {$the_product_id}";
      $delete_query = mysqli_query($connection, $query);
      header("Location: ./products.php");
      }
