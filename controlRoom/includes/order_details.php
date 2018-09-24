<?php
if (isset($_GET['order_id'])) {
  $the_order_id = $_GET['order_id'];
}
$query = "SELECT * FROM orders WHERE order_id = $the_order_id";
$select_orders =mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_orders)){
  $orderID = $row['order_id'];
  $orderDate = $row['order_date'];
  $email = $row['Email'];
  $total = $row['amount_payable'];
  $paid = $row['amount_paid'];
  $status = $row['status'];
}
        ?>

<div class="col-md-8">

</div>
<table width= '700' class="table table-bordered table-hover table-condensed">

  <thead>
    <tr>
      <th class="text-center">PRODUCT DETAILS</th>
    </tr>

    <tr>
      <th>Product Name</th>
      <th>Operating System</th>
      <th>Media Player</th>
      <th>Text Editor</th>
      <th>Quantity</th>
      <th>Subtotal</th>


    </tr>
    <?php

     ?>

  </thead>
  <tbody>
    <?php  $query = "SELECT * FROM order_items WHERE order_id = $the_order_id";
    $select_order_items =mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_order_items)){
      $productID = $row['product_id'];
      $quantity = $row['quantity'];
      $os = $row['operating_system'];
      $media_player = $row['media_player'];
      $text_editor = $row['text_editor'];
      $query = "SELECT * FROM products WHERE product_id = $productID";
      $select_products_by_id = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($select_products_by_id)){

        $Brand = $row['brand'];
        $Model = $row['model'];
        $Price = $row['price'];

        $subTotal = $Price * $quantity;

            ?>
  <tr>
                <td><?php echo $Brand; ?> <?php echo $Model; ?></td>
                <td><?php echo $os; ?></td>
                <td><?php echo $media_player; ?></td>
                <td><?php echo $text_editor; ?></td>
                <td><?php echo $quantity; ?></td>
                <td><?php echo $subTotal; ?></td>

                <?php
}
}
                 ?>
    </tr>


  </tbody>
</table>
</div>
<table width= '700' class="table table-bordered table-hover table-condensed">

  <thead>
    <tr>
      <th class="text-center">TOTAL PAYABLE</th>
    </tr>
  </thead>
  <tbody>
    <h1> <td class="text-center text-danger"><?php echo $total; ?></td></h1>
  </tbody>
</table>
  <table width= '700' class="table table-bordered table-hover table-condensed">

    <thead>
      <tr>
        <th class="text-center ">SHIPPING DETAILS</th>
      </tr>
      <tr>
        <th>Email</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>County</th>
        <th>Town</th>
        <th>Street</th>
        <th>Building</th>


      </tr>


    </thead>
    <tbody>
      <?php
       $query = "SELECT * FROM users WHERE Email = '{$email}'";
      $select_users =mysqli_query($connection,$query);
      if(!$select_users){
        die("QUERY FAILED" . mysqli_error($connection));
      }
      while($row = mysqli_fetch_assoc($select_users)){
        $db_Fname = $row['Fname'];
        $db_Lname = $row['Lname'];
        $db_Mobile = $row['Mobile'];
        $db_Email = $row['Email'];
        $db_County = $row['County'];
        $db_Town = $row['Town'];
        $db_Street = $row['Street'];
        $db_Building = $row['Building'];
        echo "<tr>";
                    echo "<td>{$db_Email}</td>";
                    echo "<td>{$db_Fname} {$db_Lname}</td>";
                    echo "<td>{$db_Mobile}</td>";
                    echo "<td>{$db_County}</td>";
                    echo "<td>{$db_Town}</td>";
                    echo "<td>{$db_Street}</td>";
                    echo "<td>{$db_Building}</td>";
                    echo "</tr>";


                  }
     ?>

    </tbody>
  </table>
  <?php
        if (isset($_POST['completeOrder'])) {
            $status = "completed";
            $query = "UPDATE orders SET status ='{$status}' WHERE order_id = '$the_order_id'";
            $complete_order_query = mysqli_query($connection, $query);
            echo '<script>alert(order completion successful)</script>';
              echo '<script>window.location="orders.php" </script>';
            if (!$complete_order_query) {
              die("QUERY FAILED" .mysqli_error($connection));
            }
        }

   ?>
  <div class="form-group">
    <form class="" action="" method="post">
      <input class="btn btn-primary" type="submit" name="completeOrder" value="COMPLETE ORDER">
    </form>

  </div>
