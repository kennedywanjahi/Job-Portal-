<?php
if (isset($_POST['add_user'])) {
  $Firstname = mysqli_real_escape_string($connection, $_POST['fname']);
  $Lastname = mysqli_real_escape_string($connection, $_POST['lname']);
  $Mobile = mysqli_real_escape_string($connection, $_POST['mobile']);
  $Email = mysqli_real_escape_string($connection, $_POST['email']);
  $usergroup = mysqli_real_escape_string($connection, $_POST['usergroup']);
  $County = mysqli_real_escape_string($connection, $_POST['county']);
  $Town = mysqli_real_escape_string($connection, $_POST['town']);
  $Street = mysqli_real_escape_string($connection, $_POST['street']);
  $Building = mysqli_real_escape_string($connection, $_POST['building']);
  $Password = mysqli_real_escape_string($connection, $_POST['password']);
  $Password2 = mysqli_real_escape_string($connection, $_POST['confirmpassword']);
  $Password1 = md5($Password);
  $Password2 = md5($Password2);
       if ($Password1 === $Password2) {
          $query = "INSERT INTO users(`Fname`, `Lname`, `Mobile`, `Email`, `usergroup`, `County`, `Town`, `Street`, `Building`, `password`)";
          $query .="VALUES ('{$Firstname}', '{$Lastname}', '{$Mobile}', '{$Email}', '{$usergroup}', '{$County}',
          '{$Town}', '{$Street}', '{$Building}', '{$Password1}')";
           $add_user_query= mysqli_query($connection, $query);

           if(!$add_user_query){
             die("QUERY FAILED" .mysqli_error($connection));
           }
           echo "<h1>User Added successfully</h1>" ;
         }else {
           echo "passwords do not match";
         }
         echo '<script>window.location="users.php" </script>';
}






 ?><h1 class="page-header">Add USER
<small>Page</small>
<div class="col-sm-3 user_image_box">
  <span class="fa fa-user fa-1x"></span>
</div>
 </h1>
 <br>
<br>
 <br>
 <br>






<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" name="fname" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" name="lname" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="text" name="mobile" class="form-control" value="+2547">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" placeholder="______@__com">
  </div>
  <div class="form-group">
    <label for="usergroup">Usergroup</label> <br>
    <select name="usergroup">
      <option value="admin">Admin</option>
      <option value="customer">Customer</option>
    </select>
  </div>
  <div class="form-group">
    <label for="county">County</label>
    <input type="text" name="county" class="form-control">
  </div>
  <div class="form-group">
    <label for="town">Town</label>
    <input type="text" name="town" class="form-control">
  </div>
  <div class="form-group">
    <label for="street">Street</label>
    <input type="text" name="street" class="form-control">
  </div>
  <div class="form-group">
    <label for="building">Building</label>
    <input type="text" name="building" class="form-control">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control">
  </div>
  <div class="form-group">
    <label for="confirmpassword">Confirm Password</label>
    <input type="password" name="confirmpassword" class="form-control">
  </div>


  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="add_user" value="ADD USER">
  </div>

</form>
