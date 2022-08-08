<?php

class Course_Volunteer
{
	// table fields
  
	public $volun_name;
	public $course_name ;
	public $day;
	public $the_time;
	
    function __construct()
    {
	
    }
	// Methods
	function set_volunName($volun_name) {
	 $this->volun_name =$volun_name;
	}
	function get_volunName() {
	 return $this->volun_name;
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