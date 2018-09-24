<?php

if (isset($_POST['add_product'])) {
          $post_date = date('m-d-y');
          $product_category = escape($_POST['category']);
          $product_sub_category = escape($_POST['sub_category']);
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


          $query = "INSERT INTO products(post_date, brand, model, processor, Ram, ssd, hdd, display, ports, tags,recommended, image1,price,Description,category,sub_category,quantity)";
          $query .="VALUES (now(), '{$product_brand}', '{$product_model}', '{$product_processor}', '{$product_ram}', '{$product_ssd}', '{$product_hdd}',
          '{$product_display}', '{$product_ports}', '{$product_tags}', '{$product_recommended}','{$product_image}', '{$product_price}', '{$product_description}', '{$product_category}', '{$product_sub_category}', '{$product_quantity}')";
           $add_product_query= mysqli_query($connection, $query);
           echo "<script>alert('Product Added successfully');</script>";

           if(!$add_product_query){
             die("QUERY FAILED" .mysqli_error($connection));
             echo "<script>alert('Failed to add new product, try again');</script>";
           }
}
 ?>






<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" name="category">
      <?php

              $query = "SELECT * FROM categories";
              $select_categories = mysqli_query($connection,$query);
              while($row = mysqli_fetch_assoc($select_categories )) {
              $cat_id = $row['category_id'];
              $cat_title = $row['category_title'];
                  echo "<option value='$cat_title'>{$cat_title}</option>";
              }
              ?>
    </select>
  </div>
  <div class="form-group">
    <label for="subcategory">Sub-Category</label>
    <select class="form-control" name="sub_category">
      <?php

              $query = "SELECT * FROM sub_categories";
              $select_sub_categories = mysqli_query($connection,$query);
              while($row = mysqli_fetch_assoc($select_sub_categories )) {
              $sub_cat_id = $row['sub_category_id'];
              $sub_cat_title = $row['sub_category_title'];
                  echo "<option value='$sub_cat_title'>{$sub_cat_title}</option>";
              }
              ?>
    </select>
  </div>
  <div class="form-group">
    <label for="brand">Brand</label>
    <select class="form-control" name="brand">
      <?php

              $query = "SELECT * FROM brands";
              $select_brands = mysqli_query($connection,$query);
              while($row = mysqli_fetch_assoc($select_brands )) {
              $id = $row['id'];
              $brand_name = $row['brand_name'];
                  echo "<option value='$brand_name'>{$brand_name}</option>";
              }
              ?>
    </select>
  </div>
  <div class="form-group">
    <label for="model">Model</label>
    <input type="text" name="model" class="form-control">
  </div>
  <div class="form-group">
    <label for="processor">Processor</label>
    <input type="text" name="processor" class="form-control">
  </div>
  <div class="form-group">
    <label for="ram">Ram</label>
    <input type="text" name="ram" class="form-control">
  </div>
  <div class="form-group">
    <label for="ssd">SSD</label>
    <input type="text" name="ssd" class="form-control">
  </div>
  <div class="form-group">
    <label for="hdd">HDD</label>
    <input type="text" name="hdd" class="form-control">
  </div>
  <div class="form-group">
    <label for="display">Display</label>
    <input type="text" name="display" class="form-control">
  </div>
  <div class="form-group">
    <label for="ports">Ports</label>
    <input type="text" name="ports" class="form-control">
  </div>
  <div class="form-group">
    <label for="tags">Tags</label>
    <input type="text" name="tags" class="form-control">
  </div>
  <div class="form-group">
    <label for="recommended">Recommended</label>
    <input type="text" name="recommended" class="form-control">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image" class="form-control">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" name="price" class="form-control">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="" rows="10" cols="30"></textarea>
  </div>

  <div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="number" name="quantity" class="form-control">
  </div>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="add_product" value="ADD PRODUCT">
  </div>

</form>
