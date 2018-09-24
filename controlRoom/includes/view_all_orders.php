<table width= '700' class="table table-bordered table-hover table-condensed">
  <thead>
    <tr>
      <th>Order Id</th>
      <th>Order Date</th>
      <th>Email</th>
      <th>Amount Payable</th>
      <th>Amount Paid</th>
      <th>Status</th>


    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM orders ";
    $select_orders =
    mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_orders)){
      $order_id = $row['order_id'];
      $orderdate = $row['order_date'];
      $email = $row['Email'];
      $amountPayable = $row['amount_payable'];
      $amountPaid = $row['amount_paid'];
      $status = $row['status'];
      echo "<tr>";
                  echo "<td>{$order_id}</td>";
                  echo "<td>{$orderdate}</td>";
                  echo "<td>{$email}</td>";
                  echo "<td>KSH {$amountPayable}</td>";
                  echo "<td>KSH {$amountPaid}</td>";
                  echo "<td>{$status}</td>";
                  echo "<td><a href='orders.php?source=order_details&order_id={$order_id}'>Details</a></td>";
                  echo "<td><a href='orders.php?delete={$order_id}'>Delete</a></td>";





      echo "</tr>";


    }
     ?>
  </tbody>
</table>




<?php
      if (isset($_GET['delete'])) {
      $the_order_id = $_GET['delete'];
      $query = "DELETE FROM orders WHERE order_id = {$the_order_id}";
      $delete_query = mysqli_query($connection, $query);
      echo '<script>window.location="orders.php" </script>';
      }
?>
