<table width= '700' class="table table-bordered table-hover table-condensed table-responsive">
  <thead>
    <tr>
      <th>User Id</th>
      <th>Name</th>
      <th>Mobile</th>
      <th>Usergroup</th>
      <th>Availability</th>
      <th>Subscription Status</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM users ";
    $select_users =mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_users)){
      $db_name = $row['Name'];
      $db_Mobile = $row['Mobile'];
      $db_Email = $row['Email'];
      $db_usergroup = $row['Usergroup'];
      $db_availability = $row['Availability'];
      $db_subscription = $row['Subscription_status'];
      echo "<tr>";
                  echo "<td>{$db_Email}</td>";
                  echo "<td>{$db_name}</td>";
                  echo "<td>{$db_Mobile}</td>";
                  echo "<td>{$db_usergroup}</td>";
                  echo "<td>{$db_availability}</td>";
                  echo "<td>{$db_subscription}</td>";
                  echo "<td><a href='users.php?source=edit_user&user_id={$db_Email}'>Edit</a></td>";
                  echo "<td><a href='users.php?delete={$db_Email}'>Delete</a></td>";




      echo "</tr>";


    }
     ?>
  </tbody>
</table>




<?php
if (isset($_GET['delete'])) {
  $userId = $_GET['delete'];
  $query = "DELETE FROM users WHERE Email = '$userId'";
  $deleteUser = mysqli_query($connection, $query);
  echo '<script>window.location="users.php" </script>';
}
 ?>
