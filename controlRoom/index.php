<?php
include 'includes/admin_header.php';
include 'includes/admin_top_navigation.php';
 ?>

 <div id="page-wrapper">

       <div class="container-fluid">

         <!-- Page Heading -->
         <div class="row">
             <div class="col-lg-12">
                 <h1 class="page-header">
                     Welcome To Admin




                     <small><?php
                      echo $_SESSION['current_user'];?>
                      </small>
                 </h1>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="panel panel-primary">
                     <div class="panel-heading">
                         <div class="row">
                             <div class="col-xs-3">
                                 <i class="fa fa-file-text fa-5x"></i>
                             </div>
                             <div class="col-xs-9 text-right">

                               <?php

                                 $query = "SELECT * FROM jobs";
                                 $select_all_jobs = mysqli_query($connection,$query);
                                 $jobs_count = mysqli_num_rows($select_all_jobs);

                               echo  "<div class='huge'>{$jobs_count}</div>"

                                 ?>


                                 <div>JOBS</div>
                             </div>
                         </div>
                     </div>
                     <a href="jobs.php">
                         <div class="panel-footer">
                             <span class="pull-left">View Details</span>
                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                             <div class="clearfix"></div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="panel panel-green">
                     <div class="panel-heading">
                         <div class="row">
                             <div class="col-xs-3">
                                 <i class="fa fa-shopping-cart fa-5x"></i>
                             </div>
                             <div class="col-xs-9 text-right">

                               <?php

                               $query = "SELECT * FROM applications";
                               $select_all_applications = mysqli_query($connection,$query);
                               $applications_count = mysqli_num_rows($select_all_applications);

                           echo  "<div class='huge'>{$applications_count}</div>"

                             ?>


                               <div>APPLICATIONS</div>
                             </div>
                         </div>
                     </div>
                     <a href="orders.php?source=pending_orders">
                         <div class="panel-footer">
                             <span class="pull-left">View Details</span>
                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                             <div class="clearfix"></div>
                         </div>
                     </a>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="panel panel-red">
                     <div class="panel-heading">
                         <div class="row">
                             <div class="col-xs-3">
                                 <i class="fa fa-gear fa-5x"></i>
                             </div>
                             <div class="col-xs-9 text-right">

                              <?php

                             $query = "SELECT * FROM applications WHERE Status= 1";
                             $select_all_hired = mysqli_query($connection,$query);
                             $hired_count = mysqli_num_rows($select_all_hired);

                           echo  "<div class='huge'>{$hired_count}</div>"

                             ?>

                            <div>HIRED APPLICANTS</div>
                             </div>
                         </div>
                     </div>
                     <a href="orders.php">
                         <div class="panel-footer">
                             <span class="pull-left">View Details</span>
                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                             <div class="clearfix"></div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="panel panel-yellow">
                     <div class="panel-heading">
                         <div class="row">
                             <div class="col-xs-3">
                                 <i class="fa fa-user fa-5x"></i>
                             </div>
                             <div class="col-xs-9 text-right">

                                <?php

                                 $query = "SELECT * FROM users";
                                 $select_all_users = mysqli_query($connection,$query);
                                 $user_count = mysqli_num_rows($select_all_users);

                               echo  "<div class='huge'>{$user_count}</div>"

                                 ?>


                                 <div> Users</div>
                             </div>
                         </div>
                     </div>
                     <a href="users.php">
                         <div class="panel-footer">
                             <span class="pull-left">View Details</span>
                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                             <div class="clearfix"></div>
                         </div>
                     </a>
                 </div>
             </div>
         </div>
           </div>
          <!-- /.row -->
        </div>
       <!-- /.container-fluid -->
   </div>
   <!-- /#page-wrapper -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
