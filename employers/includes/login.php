<?php

if (isset($_POST['login'])) {
  $password = escape($_POST["password"]);
  $email = escape($_POST["email"]);
  $passwordmd5 = md5($password);
  loginEmployer();

  	    // if ($login) {
  	    //     // Login Success
  	    //    echo "<script>alert('login successful');</script>";
        //    echo '<script>window.location="./index.php" </script>';
  	    // } else {
  	    //     // Login Failed
        //     echo "<script>alert('invalid credentials check and try again.');</script>";
        //     echo '<script>window.history.go(-1); </script>';
  	    // }
}


 ?>
 <div class="slider-area">

<br>
                     <div class="col-md-3">
                     </div>
                     <div class="col-md-6">
<div class="woocommerce-info"><h4>Returning Employer? Login</h4>
</div>
<hr>
<form id="" class="" method="post">


<p>If you have been with us before, please enter your details in the boxes below. If you are a new member please proceed to the registration section.</p>

<div class="form-group">
  <label for="username">Email <span class="required">*</span>
  </label>
  <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
</div>
<div class="form-group">
  <label for="password">Password <span class="required">*</span>
  </label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
</div>
<div class="clear"></div>


<p class="form-row">
  <input type="submit" value="Login" name="login" class="btn btn-info">

</p>


<div class="clear"></div>
</form>
<br>
<hr>
<h3>New Employer? <a href="index.php?source=register">Register</h3></a>
</div>
                 </div>


 </div>
