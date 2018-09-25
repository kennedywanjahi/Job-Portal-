<div class="slider-area">

  <?php
  if (isset($_POST['add_employer'])) {
    // Checking for user logged in or not
        /*if (!$user->get_session())
        {
           header("location:index.php");
        }*/
            echo $industry = $_POST['industry'];
          echo  $name = $_POST["name"];
            $mobile = $_POST["mobile"];
            $email = $_POST["email"];
            $city = $_POST['city'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $password = $_POST["password1"];
            $password2 = $_POST["password2"];
            if ($password === $password2) {
              echo "passwords match";
              $query = "INSERT INTO employers (`Name`, `Mobile`, `Industry`, `City`)";
              $query .="VALUES ('{$name}', '{$mobile}', '{$industry}', '{$city}')";
               $add_employer_query= mysqli_query($connection, $query);
               if(!$add_employer_query){
                 die("QUERY FAILED" .mysqli_error($connection));
               }
               $query = "INSERT INTO employer_accounts (`Email`, `Company_name`, `Password`, `First_name`, `Last_name`)";
               $query .="VALUES ('{$email}', '{$name}', '{$password}', '{$fname}', '{$lname}' )";
                $add_employer_account= mysqli_query($connection, $query);
                if(!$add_employer_account){
                  die("QUERY FAILED" .mysqli_error($connection));
                }
                echo "<h1>Employer account Added successfully</h1>" ;

            }else {
              echo "<h1>Passwords do not match</h1>" ;
            }
          }
   ?>                         <form action="" class=" form-inline">



                         </form>
                         <div class="col-md-3">
                         </div>
                         <div class="col-md-6">
<div class="woocommerce-info"><h2 style="text-align:center">Add Employer Account</h2></a>
</div>

<form id="" class="" method="post">
  <div class="form-group">

                             <h4>What Nature of Business is the Organization In?</h4>

                             <select class="form-control" name="industry" id="industry">
                               <option selected value="Job Seeker">Click To Choose Role</option>
         <?php

                 $query = "SELECT * FROM industry";
                 $select_categories = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($select_categories )) {
                 $cat_id = $row['Id'];
                 $cat_title = $row['Name'];
                     echo "<option selected value='$scat_title'>{$cat_title}</option>";
                 }
                 ?>
       </select>
  </div>
  <br>
    <div class="form-group">
      <label class="" for="name">Company Name <abbr title="required" class="required">*</abbr>
             </label>
        <input type="text" value="" placeholder="" id="name" name="name" class="form-control" placeholder="Email" required>
    </div>
    <div class="form-group">
        <label class="" for="mobile">Company Mobile Phone Number <abbr title="required" class="required">*</abbr>
        </label>
        <input type="text" value="+2547" placeholder="" id="mobile" class="form-control" name="mobile" placeholder="+254" required>
    </div>
    <div class="form-group">
        <label class="" for="city">City <abbr title="required" class="required">*</abbr>
        </label>
        <input type="text" value="e.g Nairobi" placeholder="" id="city" class="form-control" name="city" placeholder="" required>



                        <div class="woocommerce-info"><h2 style="text-align:center">Add Organization Operator Account</h2></div>




    <div class="form-group">
        <label for="fname">First Name <span class="required">*</span>
        </label>
        <input type="text" id="fname" name="fname" class="form-control" placeholder="First Name Here" required>
    </div>
    <div class="form-group">
        <label for="lname">Last Name <span class="required">*</span>
        </label>
        <input type="lname" id="lname" name="lname" class="form-control" placeholder="Last Name Goes Here" required>
    </div>
    <div class="form-group">
        <label for="username">Email <span class="required">*</span>
        </label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
    </div>
    <div class="form-group">
        <label for="password1">Password <span class="required">*</span>
        </label>
        <input type="password" id="password1" name="password1" class="form-control" placeholder="Password" required>
    </div>
    <div class="form-group">
        <label for="password2">Confirm Password <span class="required">*</span>
        </label>
        <input type="password" id="password2" name="password2" class="form-control" placeholder="Password" required>
    </div>
    <div class="clear"></div>
    <p class="form-row">
                        <input type="submit" value="ADD EMPLOYER" name="add_employer" class="btn btn-info">

                    </p>

                </div>
              </form>
    <div class="clear"></div>
</form>
</div>
                       </div>


       </div>
