<?php 
ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);
$Message;
if(isset($_POST['Update'])){
if (!empty($_POST['ProfileSettings-FullName'])){
	if(!empty($_POST['OldPassword'])){
		if(!empty($_POST['NewPassword'])){
			if(!empty($_POST['ConfirmNewPassword'])){
				if($_POST['OldPassword'] =="123456789"){
		        	if(strlen((string)$_POST['NewPassword'])>=8){
						if($_POST['NewPassword'] ==$_POST['ConfirmNewPassword']){
			    			$Message="Successfully updated";
					    }else{
							$Message="The entered New Password does not match the Confirm New Password";
				        }
					}else{
						$Message="the password must be at least 8 characters";
				    }
				}else{
					$Message="The entered Old Password does not match the old Password";
				}
			}else{
				$Message="Enter new Confirm New Password";
			}
		}else{
		$Message="Enter new Password";
	    }
    }else{
	$Message="Enter Old Password";
    }
}else{
	$Message= "Enter full name";
}}
include("SProfileView.html");
?>
