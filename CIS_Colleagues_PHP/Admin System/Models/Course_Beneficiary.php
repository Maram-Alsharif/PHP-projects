<?php

class Course_Beneficiary
{
	// table fields
	public $benef_name;
	public $course_name ;
	public $day;
	public $the_time;
	
    function __construct()
    {
	
    }
	// Methods
	function set_benefName($benef_name) {
	 $this->benef_name =$benef_name;
	}
	function get_benefName() {
	 return $this->benef_name;
	}
	
	function set_courseName($course_name) {
	 $this->course_name = $course_name;
	}
	function get_courseName() {
	 return $this->course_name;
	}
	
	function set_day($day) {
	 $this->day = $day;
	}
	function get_day() {
	 return $this->day;
	}
	
	function set_time($the_time) {
	 $this->the_time = $the_time;
	}
	function get_time() {
	 return $this->the_time;
	}
	
}

?>