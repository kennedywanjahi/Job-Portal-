<?php

    require 'header.php';





?>

<div class="container">
    <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
        <h5>Job Applications</h5>
        <h2><span><?php
        employerOpenJobs();
        echo $_SESSION['open_job_count'];

         ?></span> Applied Positions</h2>
    </div>
    <div class="row jobs">
        <div class="col-md-12">
            <div class="job-posts table-responsive">
                <table class="table">
                    <tr class="odd wow fadeInUp" data-wow-delay="1s">
                      <?php
                      employerViewApplicants();
                       ?>
                       </tr>
                    </tbody>
            </div>
        </div>
    </div>
</div>
<hr>
</div>
