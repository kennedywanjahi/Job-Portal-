<?php
if(isset($_GET['user_id'])){
  $the_user_id = $_GET['user_id'];


}
$query = "SELECT * FROM users WHERE Email = '{$the_user_id}'";
$select_users_by_id = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_users_by_id)){
    $db_Name = $row['Name'];
    $db_Mobile = $row['Mobile'];
    $db_Email = $row['Email'];
    $db_Usergroup = $row['Usergroup'];
    $db_Availability = $row['Availability'];
    $db_Subscription = $row['Subscription_status'];
}
if(!$select_users_by_id){
  die("QUERY FAILED" .mysqli_error($connection));
}




if (isset($_POST['update_profile'])) {
  $Email = mysqli_real_escape_string($connection, $_POST['email']);
  $Name = mysqli_real_escape_string($connection, $_POST['name']);
  $Mobile = mysqli_real_escape_string($connection, $_POST['mobile']);
  $Availability = mysqli_real_escape_string($connection, $_POST['availability']);
  $Subscription = mysqli_real_escape_string($connection, $_POST['subscription_status']);
  $Usergroup = mysqli_real_escape_string($connection, $_POST['usergroup']);



  $query = "UPDATE users SET Email = '$Email', Name = '$Name', Mobile = '$Mobile', Availability = '$Availability', Subscription_status = '$Subscription', Usergroup = '$Usergroup' WHERE Email = '$Email'";



  $update_user_query = mysqli_query($connection, $query);


  if(!$update_user_query){
    die("QUERY FAILED" .mysqli_error($connection));
  }else {
    echo '<script>alert(user profile updated succesfully)</script>';
      echo '<script>window.location="users.php" </script>';
  }





}


 ?>
<form class="form-responsive" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="email">Email</label>
    <input value="<?php echo $db_Email;  ?>" type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input value="<?php echo $db_Name;  ?>" type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="Mobile">Mobile</label>
    <input value="<?php echo $db_Mobile;  ?>"  type="text" name="mobile" class="form-control">
  </div>
  <div class="form-group">
    <label for="availability">Availability</label>
    <input value="<?php echo $db_Availability;  ?>" type="text" name="availability" class="form-control">
  </div>
  <div class="form-group">
    <label for="subscription_status">Subscription Status</label>
    <input value="<?php echo $db_Subscription;  ?>"  type="text" name="subscription_status" class="form-control">
  </div>
  <div class="form-group">
    <label for="usergroup">Usergroup</label>
    <select class="form-control" name="usergroup">
      <option value="customer">Customer</option>
      <option value="admin">Admin</option>

    </select>
  </div>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_profile" value="UPDATE PROFILE">
  </div>
</form>
</div>
<?php
if (isset($_POST['changepassword'])) {
   $newPassword = md5($_POST['newpassword']);
   $confirmNewPaswword = md5($_POST['confirmnewpassword']);
    if ($newPassword === $confirmNewPaswword) {
       $query = "UPDATE users SET password = '$newPassword'  WHERE Email = '$the_user_id'";
       echo '<script>alert(password change successful)</script>';
       echo "successful";
    }else {
      echo '<script>alert(passwords do not match check and try again)</script>';
      echo "bitch";

    }
   }
?>




<form class="form-responsive" action="" method="post" enctype="multipart/form-data">
<div class="form-group">
  <label for="newpassword">New Password</label>
  <input value="" type="password" name="newpassword" class="form-control">
</div>
<div class="form-group">
  <label for="confirmnewpassword">Confirm New Password</label>
  <input value="" type="password" name="confirmnewpassword" class="form-control">
</div>
<div class="form-group">
  <input class="btn btn-primary" type="submit" name="changepassword" value="CHANGE PASSWORD">
</div>

</form>
