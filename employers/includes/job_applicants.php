<div class="container">
    <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
        <h5>Job Applications</h5>
        <h2><span></span> <?php
        echo $_GET['position'];
         ?> :Position</h2>
    </div>
    <div class="row jobs">
        <div class="col-md-12">
            <div class="job-posts table-responsive">
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