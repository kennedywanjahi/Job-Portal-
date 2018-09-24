<table width= '700' class="table table-bordered table-hover table-condensed">
  <thead>
    <tr>
      <th>Message Id</th>
      <th>Date</th>
      <th>From</th>
      <th>Subject</th>
      <th>Message</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM contactus ";
    $select_messages =
    mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_messages)){
      $message_id = $row['id'];
      $date = $row['date'];
      $email = $row['Email'];
      $Subject = $row['Subject'];
      $message = $row['Message'];
      echo "<tr>";
                  echo "<td>{$message_id}</td>";
                  echo "<td>{$date}</td>";
                  echo "<td>{$email}</td>";
                  echo "<td>{$Subject}</td>";
                  echo "<td>{$message}</td>";
                  echo "<td><a href='messages.php?source=message_details&id={$message_id}'>Details</a></td>";
                  echo "<td><a href='messages.php?delete={$message_id}'>Delete</a></td>";





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
