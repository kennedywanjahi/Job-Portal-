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
    case 'add_employer':
    include "includes/add_employer.php";
    break;
    case 'edit_employer':
    include "includes/edit_employer.php";
    break;
    case 'open_positions':
    include "includes/open_positions.php";
    break;
    case 'view_employer':
    include "includes/employer_details.php";
    break;

    default:
      include "includes/view_all_employers.php";
      break;
  }











?>





                    </div


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/admin_footer.php" ?>
