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
<?php
if (isset($_GET['source'])) {
  $source = $_GET['source'];
}else {
  $source = '';
}
  switch ($source) {
    case 'add_user':
    include "includes/add_users.php";
    break;
    case 'edit_user':
    include "includes/edit_user.php";
    break;
    case '150':
    echo "NICE 100";
    break;

    default:
      include "includes/view_all_users.php";
      break;
  }











?>





                    </div

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/admin_footer.php" ?>
