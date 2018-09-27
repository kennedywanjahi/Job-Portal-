<?php
	include "./includes/db.php";
	class User{
		protected $db;
		public function __construct(){
			$this->db = new DB_con();
			$this->db = $this->db->ret_obj();
		}

		/*** for registration process ***/

		public function reg_user($name,$mobile,$email,$password){
			//echo "k";

			$password = md5($password);

			//checking if the username or email is available in db
			$query = "SELECT * FROM users WHERE Name='$name' OR Email='$email'";

			$result = $this->db->query($query) or die($this->db->error);

			$count_row = $result->num_rows;

			//if the username is not in db then insert to the table

			if($count_row == 0){
				$query = "INSERT INTO users SET Name='$name', Mobile='$mobile', Email='$email', Password='$password'";

				$result = $this->db->query($query) or die($this->db->error);

				return true;
			}
			else{
				echo "<script>alert('Registration failed. Email or Username already exists please try again.');</script>";
				return false;}


			}


	/*** for login process ***/
		public function check_login($emailusername, $password){
        $password = md5($password);

		$query = "SELECT Id from users WHERE Email='$emailusername' and Password='$password'";

		$result = $this->db->query($query) or die($this->db->error);


		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		$count_row = $result->num_rows;

		if ($count_row == 1) {
	            $_SESSION['login'] = true; // this login var will use for the session thing
	            $_SESSION['uid'] = $user_data['Id'];
	            return true;
	        }

		else{return false;}


	}


	public function get_fullname($uid){
		$query = "SELECT Name FROM users WHERE Id = $uid";

		$result = $this->db->query($query) or die($this->db->error);

		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		$_SESSION['current_user'] = $user_data['Name'];

	}

	/*** starting the session ***/
	public function get_session(){
	    return $_SESSION['login'];
	    }

	public function user_logout() {
	    $_SESSION['login'] = FALSE;
		unset($_SESSION);
	    session_destroy();
	    }
}
