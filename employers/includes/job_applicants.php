<?php
        $position = $_GET['position'];
         ?>
<div class="container">
  <h4 style="text-align:center;"><a href="manifest.php?position=<?php echo $position;?>"><button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.8s">View Manifest</button></a></h4>
    <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
        <h5>Job Applications</h5>
        <h2><span></span> <?php
        echo $position;
         ?> :Position</h2>
    </div>
    <div class="row jobs">
        <div class="col-md-12">
            <div class="job-posts table-responsive">
              <div style="margin-top: 30px; margin-bottom: 21px;">
                        <button  style="float:right;" class="btn btn-success btn-mini"><a href="javascript:Clickheretoprint()"> Print</button></a>
                    </div>
                <table class="table table-responsive">
                    <tr class="odd wow fadeInUp" data-wow-delay="1s">
                      <?php
                      employerViewJobApplicants();
                       ?>
                       </tr>
                    </tbody>
            </div>
        </div>
    </div>
</div>
<hr>
</div>