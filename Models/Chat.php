<?php

class Chat
{
	// table fields
  
	public $room_num;
	public $msg;
	public $the_time;
	public $the_date;

    function __construct()
    {
	
    }
	// Methods
	function set_roomNum($room_num) {
	 $this->room_num = $room_num;
	}
	function get_roomNum() {
	 return $this->room_num;
	}
	
	function set_msg($msg) {
	 $this->msg = $msg;
	}
	function get_msg() {
	 return $this->msg;
	}
	
	function set_time($the_time) {
	 $this->the_time = $the_time;
	}
	function get_time() {
	 return $this->the_time;
	}
	
	function set_date($the_date) {
	 $this->the_date = $the_date;
	}
	function get_date() {
	 return $this->the_date;
	}
	
}

?>