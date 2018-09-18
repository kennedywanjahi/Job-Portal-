  <div id="customer_details" class="col2-set">
    <div class="col-md-6">
        <div class="woocommerce-billing-fields">
            <h3>Registration</h3></a>
            <p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                <label class="" for="billing_country">Country <abbr title="required" class="required">*</abbr>
                </label>
                <select class="country_to_state country_select" id="billing_country" name="billing_country">

                    <option value="KE">Kenya</option>

                </select>
            </p>
  <form class="" action="" method="post">
   <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                <label class="" for="fname">First Name <abbr title="required" class="required">*</abbr>
                </label>
                <input type="text" value="" placeholder="" id="billing_first_name" name="fname" class="input-text" required>
            </p>

            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                <label class="" for="lname">Last Name <abbr title="required" class="required">*</abbr>
                </label>
                <input type="text" value="" placeholder="" id="billing_last_name" name="lname" class="input-text" required>
            </p>
            <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                <label class="" for="mobile">Mobile Phone Number<abbr title="required" class="required">*</abbr>
                </label>
                <input type="text" value="+2547" placeholder="" id="billing_phone" name="mobile" class="input-text" required>
            </p>
            <div class="clear"></div>
            <div class="clear"></div>
            <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                <label class="" for="email">Email Address <abbr title="required" class="required">*</abbr>
                </label>
                <input type="email" value="" placeholder="" id="billing_email" name="email" class="input-text" required>
            </p>
            <p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                <label class="" for="county">County</label>
                <input type="text" id="billing_state" name="county" placeholder="County" value="" class="input-text " required>
            </p>
            <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                <label class="" for="town">Town<abbr title="required" class="required">*</abbr>
                </label>
                <input type="text" value="" placeholder="Town" id="billing_city" name="town" class="input-text" required>
            </p>

            <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                <label class="" for="street">Street<abbr title="required" class="required">*</abbr>
                </label>
                <input type="text" value="" placeholder="Street" id="billing_city" name="street" class="input-text" required>
            </p>
            <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                <label class="" for="building">Building<abbr title="required" class="required">*</abbr>
                </label>
                <input type="text" value="" placeholder="building" id="billing_city" name="building" class="input-text" required>
            </p>
            <div class="clear"></div>

            <div class="create-account">
                <p>Create an account by entering the information below. If you are a returning customer please <a href="account.php?source=login">Login</a></p>
                <p id="account_password_field" class="form-row validate-required">
                    <label class="" for="account_password">Account password <abbr title="required" class="required">*</abbr>
                    </label>
                    <input type="password" value="" placeholder="Password" id="account_password" name="account_password" class="input-text" required>
                </p>
                <p id="account_password_field" class="form-row validate-required">
                    <label class="" for="account_password">Confirm password <abbr title="required" class="required">*</abbr>
                    </label>
                    <input type="password" value="" placeholder="Confirm Password" id="account_password2" name="account_password2" class="input-text" required>
                </p>
                <div class="clear"></div>
                <p class="form-row">
                    <input type="submit" value="REGISTER" name="register" class="button">

                </p>

            </div>
          </form>

        </div>
    </div>
    </div>






<?php
// include 'includes/footer.php';
 ?>
