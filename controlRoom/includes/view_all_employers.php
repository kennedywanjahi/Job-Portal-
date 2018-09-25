<table width= '700' class="table table-bordered table-hover table-condensed table-responsive">
  <thead>
    <tr>
      <th>Company Id</th>
      <th>Company Name</th>
      <th>Company Mobile</th>
      <th>Nature of Business</th>
      <th>City</th>
      <th>Verification Status</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM employers ";
    $select_employers =mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_employers)){
      $db_id = $row['Id'];
      $db_name = $row['Name'];
      $db_mobile = $row['Mobile'];
      $db_industry = $row['Industry'];
      $db_city = $row['City'];
      $db_status = $row['Status'];

      echo "<tr>";
                  echo "<td>{$db_id}</td>";
                  echo "<td>{$db_name}</td>";
                  echo "<td>{$db_mobile}</td>";
                  echo "<td>{$db_industry}</td>";
                  echo "<td>{$db_city}</td>";
                  echo "<td>{$db_status}</td>";
                  echo "<td><a href='employers.php?source=edit_employer&employer_id={$db_id}'>Edit</a></td>";
                  echo "<td><a href='employers.php?source=view_employer&employer_id={$db_id}'> View Employer</a></td>";
                  echo "<td><a href='employers.php?delete={$db_id}'>Delete</a></td>";




      echo "</tr>";


    }
     ?>
  </tbody>
</table>




<?php
      if (isset($_GET['delete'])) {
      $the_user_id = $_GET['delete'];
      $query = "DELETE FROM users WHERE Email = {$the_user_id}";
      $delete_query = mysqli_query($connection, $query);
      }
