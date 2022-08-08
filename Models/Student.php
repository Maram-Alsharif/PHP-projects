<?php

class Student
{
    // هنا عرفنا خصائص الكلاس
	// table fields
  
	public $name;
	public $email;
	public $password;
	public $department;
	public $bio;
	
	
	// error  message  

    public $email_msg;
    public $password_msg;
    public $name_msg;
    public $department_msg;
	public $loginemail_msg;
    public $loginpassword_msg;
	
	
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
    $department_msg="";
	$loginemail_msg="";
    $loginpassword_msg="";
	
    }
	// set and get names methods
	function set_name($name) {
	 $this->name = $name;
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
	
	// set and get department methods
	function set_department($department) {
	 $this->department = $department;
	}
	function get_department() {
	 return $this->department;
	}
	
	
	
	
	
}

?>