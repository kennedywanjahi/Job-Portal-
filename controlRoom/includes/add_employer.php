<div class="slider-area">

                                                        <?php
                                                                if (isset($_POST['add_employer'])) {
                                                                                                  addEmployer();
                                                                                                  }
                                                         ?>

                         <div class="col-md-12">
<div class="woocommerce-info"><h2 style="text-align:center">Add Employer Account</h2></a>
</div>

<form id="" class="form-responsive" method="post">
  <div class="form-group">
    <label for="category">Nature of Business</label>
    <select class="form-control" name="category">
                                                        <?php
                                                          showIndustry();
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
