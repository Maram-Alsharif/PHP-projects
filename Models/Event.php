<?php

class Event
{
	// table fields
	public $title;
	public $the_date;
	public $location;
	public $poster;
	public $rigister_link;
	
    function __construct()
    {
	
    }
	// Methods
	function set_title($title) {
	 $this->title = $title;
	}
	function get_title() {
	 return $this->title;
	}
	
	function set_date($the_date) {
	 $this->the_date = $the_date;
	}
	function get_date() {
	 return $this->the_date;
	}
	
	function set_location($location) {
	 $this->location = $location;
	}
	function get_location() {
	 return $this->location;
	}
	
	function set_poster($poster) {
	 $this->poster = $poster;
	}
	function get_poster() {
	 return $this->poster;
	}
	
	function set_rigLink($rigister_link) {
	 $this->rigister_link = $rigister_link;
	}
	function get_rigLink() {
	 return $this->rigister_link;
	}
}

?>