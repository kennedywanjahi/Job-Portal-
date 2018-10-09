
<div class="container">
  <h4 style="text-align:center;"><a href="jobs.php?source=add_job"><button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.8s">Add Jobs</button></a></h4>
  <hr>
    <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
        <h5>Recent Jobs</h5>
        <h2><span><?php
        employerOpenJobs();
        echo $_SESSION['open_job_count'];

         ?></span> Open Positions</h2>
    </div>
    <div class="row jobs">
        <div class="col-md-12">
            <div class="job-posts table-responsive">
                <table class="table table-responsive">
                    <tr class="odd wow fadeInUp" data-wow-delay="1s">
                      <?php
                      employerViewJobs();
                       ?>
                       </tr>
                    </tbody>
            </div>
        </div>
    </div>
</div>
<hr>
</div>
<?php
if (isset($_GET['close'])){
    closePosition();

}
if (isset($_GET['open'])){
    openPosition();
}


 ?>
