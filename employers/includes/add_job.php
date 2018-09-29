<?php
if (isset($_POST['add_job'])) {
  employerAddJob();
}
 ?>
<h3 class="page-header" style="text-align:center;">Add Open Job Position</h3>
<div class="col-md-3">
</div>
<div class="col-md-6">
<form action="" method="post" enctype="multipart/form-data">
 <div class="form-group">
   <label for="jobPosition">Position Looking to hire in</label>
   <input type="text" name="jobPosition" class="form-control" required>
 </div>
 <div class="form-group">
   <label for="jobDescription">Job Description</label>
   <input type="text" name="jobDescription" class="form-control" value="" required>
 </div>
 <div class="form-group">
   <label for="jobQualifications">Job Qualifications</label>
   <input type="text" name="jobQualifications" class="form-control" placeholder="">
 </div>
 <div class="form-group">
   <label for="jobStatus">Job Position Status</label> <br>
   <select class="form-control" name="jobStatus">
     <option value="1">Position Available</option>
     <option value="0">Position Unavailable</option>
   </select>
 </div>
 <div class="form-group">
   <label for="companyEmail">Company Email</label>
   <input type="email" name="companyEmail" class="form-control" required>
 </div>
 <div class="form-group">
   <label for="companyTelephone">Company Telephone Contacts</label>
   <input type="number" name="companyTelephone" class="form-control" required>
 </div>
 <div class="form-group">
   <input class="btn btn-primary" type="submit" name="add_job" value="ADD JOB">
 </div>

</form>
</div>
