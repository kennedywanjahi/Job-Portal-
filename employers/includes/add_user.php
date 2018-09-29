<?php
if (isset($_POST['add_user'])) {
  employerAddUser();
  }


 ?>
<h3 class="page-header" style="text-align:center;">Add Account Manager</h3>
<div class="col-md-3">
</div>
<div class="col-md-6">
<form action="" method="post" enctype="multipart/form-data">
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
                         <input type="submit" value="ADD USER" name="add_user" class="btn btn-info">

                     </p>

                 </div>
               </form>
     <div class="clear"></div>
 </form>
 </div>
                        </div>


        </div>
