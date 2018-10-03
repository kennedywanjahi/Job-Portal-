
<div class="container">
    <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
        <h5>Recent Jobs</h5>
        <h2><span>54716</span> Available jobs for you</h2>
    </div>
    <div class="row jobs">
        <div class="col-md-9">
            <div class="job-posts table-responsive">
                <table class="table">
                    <tr class="odd wow fadeInUp" data-wow-delay="1s">
                        <?php
                          ViewJobs();
                          ?>
                    </tr>
                </table>
            </div>
            <div class="more-jobs">
                <a href=""> <i class="fa fa-refresh"></i>View more jobs</a>
            </div>
        </div>
        <div class="col-md-3 hidden-sm">
            <div class="job-add wow fadeInRight" data-wow-delay="1.5s">
                <h2>Seeking a job?</h2>
            </div>
        </div>
    </div>
</div>
<hr>
</div>
