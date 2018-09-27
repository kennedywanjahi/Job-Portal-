<?php
function escape($string) {

global $connection;

return mysqli_real_escape_string($connection, trim($string));


}










function confirmQuery($result) {

    global $connection;

    if(!$result ) {

          die("QUERY FAILED ." . mysqli_error($connection));


      }


}











function addEmployer()
{
  global $connection;
  $industry = $_POST['category'];
  $name = $_POST["name"];
  $mobile = $_POST["mobile"];
  $email = $_POST["email"];
  $city = $_POST['city'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $password = $_POST["password1"];
  $password2 = $_POST["password2"];

  if ($password === $password2) {
    $query = "INSERT INTO employers (`Name`, `Mobile`, `Industry`, `City`)";
    $query .="VALUES ('{$name}', '{$mobile}', '{$industry}', '{$city}')";
     $add_employer_query= mysqli_query($connection, $query);
     if(!$add_employer_query){
       die("QUERY FAILED" .mysqli_error($connection));
     }
     $password = md5($password);
     $query = "INSERT INTO employer_accounts (`Email`, `Company_name`, `Password`, `First_name`, `Last_name`)";
     $query .="VALUES ('{$email}', '{$name}', '{$password}', '{$fname}', '{$lname}' )";
      $add_employer_account= mysqli_query($connection, $query);
      if(!$add_employer_account){
        die("QUERY FAILED" .mysqli_error($connection));
      }
      echo "<h1 style='text-align:center;'>Employer account Added successfully</h1>" ;

  }else {
    echo "<h1>Passwords do not match</h1>" ;
  }
}






function showIndustry()
{
  global $connection;
  $query = "SELECT * FROM industry";
  $showIndustry_query = mysqli_query($connection,$query);
  confirmQuery($showIndustry_query);
  while($row = mysqli_fetch_assoc($showIndustry_query )) {
  $cat_id = $row['Id'];
  $cat_title = $row['Name'];
      echo "<option value='$cat_title'>{$cat_title}</option>";
  }

}










function loginEmployer()
{ global $connection;

  /*************Query To Check if username Exists***/
  $query = "SELECT * FROM employer_accounts WHERE Email = '{$email}' ";
  $select_employer_accounts =mysqli_query($connection,$query);
  confirmQuery($select_employer_accounts);
  /*************Query***/
  while ($row = mysqli_fetch_array($select_employer_accounts)) {
      $db_Email = $row['Email'];
      $db_company = $row['Company_name'];
      $db_Password = $row['Password'];
      $db_Status = $row['Status'];




    }
    if (!$db_Email) {

      echo "<script>alert('Incorrect credentials, try again');</script>";
      echo '<script>window.location="index.php?source=account" </script>';

    }
    $db_Passwordmd5 = md5($db_Password);
    if ($email === $db_Email && $passwordmd5 === $db_Password) {
       echo $_SESSION['account_operator'] = $db_Email;
       echo $_SESSION['company'] = $db_company;
       echo $_SESSION['account_status'] = $db_Status;

       if($_SESSION['account_status'] == 1){

       echo '<script>window.location="home.php" </script>';
       }else {
      echo "account unapproved";
  }
}else {
  echo "<script>alert('Incorrect credentials, try again');</script>";
}

}











 ?>
