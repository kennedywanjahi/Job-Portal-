<div class="container">
  <h4 style="text-align:center;"><a href="users.php?source=add_user"><button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.8s">Add User</button></a></h4>
    <div class="page-title text-center wow bounce"  data-wow-delay="1s">
        <h2><span><?php
        employerUserCount();
        echo $_SESSION['employer_accounts'];

         ?></span> ORGANIZATION MANAGEMENT ACCOUNTS</h2>
    </div>
    <div class="row jobs">
        <div class="col-md-12">
            <div class="job-posts table-responsive">
                <table class="table">
                    <tr class="odd wow fadeInUp" data-wow-delay="1s">
                      <?php
                      employerViewUsers();
                       ?>
                    </tbody>
            </div>
        </div>
    </div
<hr>
<?php
if (isset($_GET['approve'])){
    employerApproveUser();

}
if (isset($_GET['unapprove'])){
    employerUnApproveUser();
}


 ?>
