<?php
if (isset($_POST['register'])) {

  // Checking for user logged in or not
      /*if (!$user->get_session())
      {
         header("location:index.php");
      }*/

          $name = $_POST["name"];
          $mobile = $_POST["mobile"];
          $email = $_POST["email"];
          $password = $_POST["password1"];
          $password2 = $_POST["password2"];
          $usergroup = $_POST["usergroup"];
          if ($password === $password2) {
            $register = $user->reg_user($name, $mobile, $email, $password, $usergroup);
            if ($register) {
                // Registration Success
                echo "<div style='text-align:center'>Registration successful <a href='./account.php?source=login'>Click here</a> to login</div>";
            } else {
                // Registration Failed
                echo "<div style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
            }

          } else {
            echo "<script>alert('Passwords do not match check and try again');</script>";
      echo '<script>window.history.go(-1); </script>';
          }
}
 ?>






 <div class="slider-area">


                          <form action="" class=" form-inline">



                          </form>
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-6">
<div class="woocommerce-info"><h2 style="text-align:center">Registration</h2></a>
</div>

<form id="" class="" method="post">
   <div class="form-group">

                              <h4>Are You an Employer or Job Seeker?</h4>

                          <select class="form-control" size="" name="usergroup" id="usergroup">
                             <option selected value="Job Seeker">Click To Choose your Role</option>
                        <option value="Job Seeker">Job Seeker</option>
                        <option value="Employer">Employer</option>
                           </select>
   </div>
   <br>
     <p>Enter Personal Details Below If you are a returning member please <a href="account.php?source=login">Login</a></p>
     <div class="form-group">
       <label class="" for="name">Name <abbr title="required" class="required">*</abbr>
              </label>
         <input type="text" value="" placeholder="" id="name" name="name" class="form-control" placeholder="Email" required>
     </div>
     <div class="form-group">
         <label class="" for="mobile">Mobile Phone Number <abbr title="required" class="required">*</abbr>
         </label>
         <input type="text" value="+2547" placeholder="" id="mobile" class="form-control" name="mobile" placeholder="+254" required>
     </div>
     <div class="form-group">
         <label for="username">Email <span class="required">*</span>
         </label>
         <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
     </div>
     <div class="form-group">
         <label for="password1">Password <span class="required">*</span>
         </label>
         <input type="password1" id="password1" name="password1" class="form-control" placeholder="Password" required>
     </div>
     <div class="form-group">
         <label for="password2">Confirm Password <span class="required">*</span>
         </label>
         <input type="password" id="password2" name="password2" class="form-control" placeholder="Password" required>
     </div>
     <div class="clear"></div>
     <p class="form-row">
                         <input type="submit" value="REGISTER" name="register" class="btn btn-info">

                     </p>

                 </div>
               </form>
     <div class="clear"></div>
 </form>
</div>
                        </div>


        </div>
<?php
// include 'includes/footer.php';
 ?>
