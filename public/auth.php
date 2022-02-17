<?php 
session_start();
include '../loginConfig.php';


if (isset($_POST['student_id']) && isset($_POST['password'])) {
	
	$email = $_POST['student_id'];
	$password = $_POST['password'];

	if (empty($email)) {
		header("Location: page-login.php?error=Email is required");
	}else if (empty($password)){
		header("Location: page-login.php?error=Password is required&email=$email");
	}else {
		$stmt = $conn->prepare("SELECT * FROM studentusertable WHERE student_id=?");
		$stmt->execute([$email]);

		if ($stmt->rowCount() === 1) {
			$user = $stmt->fetch();		

			// Store data in session variables
			$_SESSION["loggedin"] = true;
			$user_id = $user['student_id'];
			//$user_email = $user['student_id'];
			$user_password = $user['user_password'];
			$user_full_name = $user['firstname'] . " "  . $user['lastname'];
			$user_department = $user['department_name_abbreviation'];
			$user_school = $user['school_name'];
			$user_profile = $user['profile_pic'];
			$user_account_status = $user['account_status'];

			if ($email === $user_id) {
				if (password_verify($password, $user_password)) {
					if($user_account_status == 'active'){
						$_SESSION['student_id'] = $user_student_id;
						// $_SESSION['user_id'] = $user_id;
						$_SESSION['user_full_name'] = $user_full_name;
						$_SESSION['depatment_name'] = $user_department;
						$_SESSION['school_name'] = $user_school;
						$_SESSION['account_status'] = $user_account_status;
						//$_SESSION['admin_type'] = $user_admin_type;
						
						header("Location: ../");
					} else{
						header("Location: page-login.php?error= Your account has been deactivated");
					}

				}else {
					header("Location: page-login.php?error=Incorect User name or password&email=$email");
				}
			}else {
				header("Location: page-login.php?error=Incorect User name or password&email=$email");
			}
		}else {
			header("Location: page-login.php?error=Incorect User name or password&email=$email");
		}
	}
}