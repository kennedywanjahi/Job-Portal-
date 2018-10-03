<?php

    require 'header.php';
    include 'functions.php';
    include 'employers/includes/db.php';
?>





<div class="container">
    <div class="row jobs">
        <div class="col-md-9">
            <div class="job-posts table-responsive">
                <table class="table">
                    <tr class="odd wow fadeInUp" data-wow-delay="1s">
                        <?php
                          ViewJobSeekerApplications();
                          ?>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-3 hidden-sm">
        </div>
    </div>
</div>
<hr>
</div>
<?php
if (isset($_GET['withdraw'])){
    withdrawApplication();

}


 ?>





















<?php
include 'includes/footer.php';
 ?>
