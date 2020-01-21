<?php
		function isProperName($name){
			if (ctype_alpha($name)==false)
			{
				$_SESSION['e_name']="Name have to contain alphabetic characters!";
				return false;
			}

			return true;
		}
		
		function isProperEmail($email){
			$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
			if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
			{
				$_SESSION['e_email']="Please give a correct email!";
				return false;
			}

			return true;
		}
		
		function isProperPassword($password){
			if ((strlen($password)<8) || (strlen($password)>20))
			{
				$_SESSION['e_password']="Password has to contain between 8 and 20 characters!";
				return false;
			}	

			return true;
		}

		function isProperPhone($phone){
			//phone validity
			if (strlen($phone) != 9 or !ctype_digit($phone)){
				{
					$_SESSION['e_phone']="Phone has to contain exactly 9 numeric characters!";
					return false;
				}	
			}
			return true;
		}	
?>
