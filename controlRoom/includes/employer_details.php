
<?php
if (isset($_GET['employer_id'])) {
  $the_employer_id = $_GET['employer_id'];
}
$query = "SELECT * FROM employers WHERE Id = $the_employer_id ";
$select_employers =mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_employers)){
  $db_id = $row['Id'];
  $db_name = $row['Name'];
  $db_mobile = $row['Mobile'];
  $db_industry = $row['Industry'];
  $db_city = $row['City'];
  $db_status = $row['Status'];
}
        ?>
<input class="btn btn-primary" name="" value="ACCOUNT STATUS: ">
<h1 style="text-align: center;"><i class="fa fa-gears fa-1x"></i> Company Name: <?php echo $db_name; ?></h1>
<hr>
<h2 style="text-align: center;">Mobile: <?php echo $db_mobile; ?></h2>
<h3 style="text-align: center;">Nature Of Business: <?php echo $db_industry; ?></h3>
<h4 style="text-align: center;">Location: <?php echo $db_city; ?></h4>
<hr>
<br>
<br>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-file-text fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">

                  <?php

                    $query = "SELECT * FROM jobs WHERE Status = 1";
                    $select_all_jobs = mysqli_query($connection,$query);
                    $jobs_count = mysqli_num_rows($select_all_jobs);

                  echo  "<div class='huge'>{$jobs_count}</div>"

                    ?>


                    <div>OPEN POSITIONS</div>
                </div>
            </div>
        </div>
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

                    $query = "SELECT * FROM employer_accounts WHERE Company_name = '$db_name'";
                    $select_all_users = mysqli_query($connection,$query);
                    $user_count = mysqli_num_rows($select_all_users);

                  echo  "<div class='huge'>{$user_count}</div>"

                    ?>


                    <div> USER ACCOUNTS</div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr>
<br>
<h1 style="text-align: center;"> JOBS</h1>
<hr>

<table width= '700' class="table table-bordered table-hover table-condensed">
  <thead>
    <tr>
      <th>Job Id</th>
      <th>Company Name</th>
      <th>Position</th>
      <th>Description</th>
      <th>Qualifications</th>
      <th>Status</th>
      <th>Company Email</th>
      <th>Company Telephone</th>
      <th>Posted</th>


    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM jobs WHERE Company = '$db_name'";
    $select_orders =
    mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_orders)){
      $job_id = $row['Id'];
      $companyName = $row['Company'];
      $jobPosition = $row['Position'];
      $jobDescription = $row['Description'];
      $jobQualifications = $row['Qualifications'];
      $jobStatus = $row['Status'];
      $companyEmail = $row['Email'];
      $companyTelephone = $row['Telephone'];
      $posted = $row['Date_posted'];
      echo "<tr>";
                  echo "<td>{$job_id}</td>";
                  echo "<td>{$companyName}</td>";
                  echo "<td>{$jobPosition}</td>";
                  echo "<td>{$jobDescription}</td>";
                  echo "<td>{$jobQualifications}</td>";
                  echo "<td>{$jobStatus}</td>";
                  echo "<td>{$companyEmail}</td>";
                  echo "<td>{$companyTelephone}</td>";
                  echo "<td>{$posted}</td>";
                  echo "<td><a href='jobs.php?source=job_details&job_id={$job_id}'>Details</a></td>";
                  echo "<td><a href='jobs.php?delete={$job_id}'>Delete</a></td>";





      echo "</tr>";


    }
     ?>
  </tbody>
</table>
<br>
<br>
<h1 style="text-align: center;"> ACCOUNT MANAGERS</h1>
<table width= '700' class="table table-bordered table-hover table-condensed table-responsive">
  <thead>
    <tr>
      <th>User Id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM employer_accounts WHERE Company_name = '$db_name'";
    $select_orders = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_orders)){
      $id = $row['Id'];
      $firstName = $row['First_name'];
      $lastName = $row['Last_name'];
      $email = $row['Email'];
      $status = $row['Status'];
      echo "<tr>";
                  echo "<td>{$id}</td>";
                  echo "<td>{$firstName}</td>";
                  echo "<td>{$lastName}</td>";
                  echo "<td>{$email}</td>";
                  echo "<td>{$status}</td>";
                  echo "<td><a href='jobs.php?source=job_details&job_id={$id}'>Details</a></td>";
                  echo "<td><a href='jobs.php?delete={$id}'>Delete</a></td>";





      echo "</tr>";


    }
     ?>
  </tbody>
</table>

  <?php
        if (isset($_POST['completeOrder'])) {
            $status = "completed";
            $query = "UPDATE orders SET status ='{$status}' WHERE order_id = '$the_order_id'";
            $complete_order_query = mysqli_query($connection, $query);
            echo '<script>alert(order completion successful)</script>';
              echo '<script>window.location="orders.php" </script>';
            if (!$complete_order_query) {
              die("QUERY FAILED" .mysqli_error($connection));
            }
        }

   ?>
