<?php
if(isset($_GET['p_id'])){
  $the_product_id = $_GET['p_id'];
}
$query = "SELECT * FROM products WHERE product_id = $the_product_id";
$select_products_by_id = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_products_by_id)){
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
  $sub_category = $row['sub_category'];
  $Quantity = $row['quantity'];
}
function escape($string) {
global $connection;
return mysqli_real_escape_string($connection, trim($string));
}
if (isset($_POST['update_product'])) {
  $post_date = date('m-d-y');
  $product_category = escape($_POST['category']);
  $product_sub_category = escape($_POST['subcategory']);
  $product_brand = escape($_POST['brand']);
  $product_model = escape($_POST['model']);
  $product_processor = escape($_POST['processor']);
  $product_ram = escape($_POST['ram']);
  $product_ssd= escape($_POST['ssd']);
  $product_hdd = escape($_POST['hdd']);
  $product_display = escape($_POST['display']);
  $product_ports = escape($_POST['ports']);
  $product_tags = escape($_POST['tags']);
  $product_recommended = escape($_POST['recommended']);
  $product_image = $_FILES['image']['name'];
  $product_image_temp = $_FILES['image']['tmp_name'];
  $product_price = escape($_POST['price']);
  $product_description = escape($_POST['description']);
  $product_quantity = $_POST['quantity'];
  move_uploaded_file($product_image_temp, "./images/$product_image");
  if (empty($product_image))
  {
    $query = "SELECT * FROM products where product_id =$the_product_id";
    $select_image_query = mysqli_query($connection, $$query);
    while ($row = mysqli_fetch_array(select_image_query)) {
      $product_image = $row['image1'];
    }
  }
$query = "UPDATE products SET ";
  $query .="post_date = now(), ";
  $query .="brand = '{$product_brand}', ";
  $query .="model = '{$product_model}', ";
  $query .="processor = '{$product_processor}', ";
  $query .="Ram = '{$product_ram}', ";
  $query .="ssd = '{$product_ssd}', ";
  $query .="hdd = '{$product_hdd}', ";
  $query .="display = '{$product_display}', ";
  $query .="ports = '{$product_ports}', ";
  $query .="tags = '{$product_tags}', ";
  $query .="recommended = '{$product_recommended}', ";
  $query .="image1 = '{$product_image}', ";
  $query .="price = '{$product_price}', ";
  $query .="Description = '{$product_description}', ";
  $query .="category = '{$product_category}', ";
  $query .="sub_category = '{$product_sub_category}', ";
  $query .="quantity = '{$product_quantity}' ";
  $query.= "WHERE product_id = {$the_product_id} ";
  $update_product_query = mysqli_query($connection, $query);
  if(!$update_product_query){
    die("QUERY FAILED" .mysqli_error($connection));
  }else {
    echo "UPDATE SUCCESSFUL";
      header("Location: ./products.php");
  }
}
 ?>



<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="date">Post Date</label>
    <input value="<?php echo $postdate;  ?>" type="date" name="date" class="form-control">
  </div>
  <div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" name="category" id="">
    <?php

      $query = "SELECT * FROM categories ";
      $select_categories = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($select_categories )) {
      $cat_id = $row['category_id'];
      $cat_title = $row['category_title'];
      if($cat_title == $Category) {
      echo "<option selected value='{$cat_title}'>{$cat_title}</option>";
      } else {
        echo "<option value='{$cat_title}'>{$cat_title}</option>";
      }
      }
?>
</select>
  </div>
  <div class="form-group">
    <label for="subcategory">Sub-Category</label>
    <select class="form-control" name="subcategory" id="">
    <?php

      $query = "SELECT * FROM sub_categories ";
      $select_categories = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($select_categories )) {
      $cat_id = $row['sub_category_id'];
      $cat_title = $row['sub_category_title'];
      if($cat_title == $sub_category) {
      echo "<option selected value='{$cat_title}'>{$cat_title}</option>";
      } else {
        echo "<option value='{$cat_title}'>{$cat_title}</option>";
      }
      }
?>
</select>
  </div>
  <div class="form-group">
    <label for="brand">Brand</label>
    <select class="form-control" name="brand" id="">
    <?php

      $query = "SELECT * FROM brands ";
      $select_categories = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($select_categories )) {
      $cat_id = $row['id'];
      $cat_title = $row['brand_name'];
      if($cat_title == $Brand) {
      echo "<option selected value='{$cat_title}'>{$cat_title}</option>";
      } else {
        echo "<option value='{$cat_title}'>{$cat_title}</option>";
      }
      }
?>
</select>
  </div>
  <div class="form-group">
    <label for="model">Model</label>
    <input value="<?php echo $Model;  ?>" type="text" name="model" class="form-control">
  </div>
  <div class="form-group">
    <label for="processor">Processor</label>
    <input value="<?php echo $Processor;  ?>" type="text" name="processor" class="form-control">
  </div>
  <div class="form-group">
    <label for="ram">Ram</label>
    <input value="<?php echo $Ram;  ?>"  type="text" name="ram" class="form-control">
  </div>
  <div class="form-group">
    <label for="ssd">SSD</label>
    <input value="<?php echo $SSD;  ?>" type="text" name="ssd" class="form-control">
  </div>
  <div class="form-group">
    <label for="hdd">HDD</label>
    <input value="<?php echo $HDD;  ?>"  type="text" name="hdd" class="form-control">
  </div>
  <div class="form-group">
    <label for="display">Display</label>
    <input value="<?php echo $Display;  ?>" type="text" name="display" class="form-control">
  </div>
  <div class="form-group">
    <label for="ports">Ports</label>
    <input value="<?php echo $Ports;  ?>" type="text" name="ports" class="form-control">
  </div>
  <div class="form-group">
    <label for="tags">Tags</label>
    <input value="<?php echo $Tags;  ?>" type="text" name="tags" class="form-control">
  </div>
  <div class="form-group">
    <label for="recommended">Recommended</label>
    <input value="<?php echo $Recommended;  ?>" type="text" name="recommended" class="form-control">
  </div>
  <div class="form-group">
    <label for="image">Image</label>

    <input value="<?php echo $Image1;  ?>" type="file" name="image" class="form-control">
    <img width="200" src="./images/<?php echo "$Image1"; ?>" alt="">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input value="<?php echo $Price;  ?>" type="number" name="price" class="form-control">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="" rows="10" cols="30"><?php echo $Description;  ?></textarea>
  </div>

  <div class="form-group">
    <label for="quantity">Quantity</label>
    <input value="<?php echo $Quantity;  ?>" type="number" name="quantity" class="form-control">
  </div>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_product" value="UPDATE PRODUCT">
  </div>

</form>
