

<div class="col-md-8">

</div>
<table width= '700' class="table table-bordered table-hover table-condensed">

  <thead>
    <tr>
      <th class="text-center">MESSAGE DETAILS</th>
    </tr>

    <tr>

      <th>Sender Email</th>
      <th>Sender Name</th>
      <th>Subject</th>
      <th>Message</th>


    </tr>


  </thead>
  <tbody>
    <?php
    if (isset($_GET['id'])) {
      $the_message_id = $_GET['id'];
    }
    $query = "SELECT * FROM contactus WHERE id = $the_message_id";
    $select_messages = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_messages)){
      $message_id = $row['id'];
      $date = $row['date'];
      $email = $row['Email'];
      $name = $row['Name'];
      $Subject = $row['Subject'];
      $message = $row['Message'];

            ?>
  <tr>
                <td><?php echo $email; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $Subject; ?></td>
                <td><?php echo $message; ?></td>

                <?php
}
                 ?>
    </tr>


  </tbody>
</table>
</div>
  <div class="form-group">
    <input class="btn btn-primary" type="button" name="markAsRead" value="Mark As Read">
  </div>
