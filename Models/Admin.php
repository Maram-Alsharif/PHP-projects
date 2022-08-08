<?php

class Admin
{
    // هنا عرفنا خصائص الكلاس
	// Admin fields
  
	public $name;
	public $email;
	public $password;
	public $bio;
	
	
	// error  message  

    public $email_msg;
    public $password_msg;
    public $name_msg;
 
	
	
    function __construct()//هنا سوينا دكلريشون للقيم
    {
  
	$name="";
	$email="";
	$password=0;
    $bio="";
	$department="";
	$email_msg="";
    $password_msg="";
	$name_msg="";

    }
	// set and get names methods
	function set_name($name) {
	 $this->$name = $name;
	}
	function get_name() {
	 return $this->name;
	}


    // set and get email methods

	function set_email($email) {
	 $this->email = $email;
	}
	function get_email() {
	 return $this->email;
	}
	
	// set and get password methods
	function set_password($password) {
	 $this->password = $password;
	}
	function get_password() {
	 return $this->password;
	}
	
	// set and get bio methods
	
	function set_bio($bio) {
	 $this->bio = $bio;
	}
	function get_bio() {
	 return $this->bio;
	}
	
	
	
}

?>