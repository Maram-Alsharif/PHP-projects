<?php

class Scientific_Refrences
{
	// table fields
  
	public $ref_name;
	public $ref_ID;
	public $version;
	public $description;
	public $operation;
	public $ref_image;
	

	
    function __construct()
    {
	
    }
	// Methods
	function set_refName($ref_name) {
	 $this->ref_name = $ref_name;
	}
	function get_refName() {
	 return $this->ref_name;
	}
	
	function set_refID($ref_ID) {
	 $this->ref_ID = $ref_ID;
	}
	function get_refID() {
	 return $this->ref_ID;
	}
	
	function set_version($version) {
	 $this->version = $version;
	}
	function get_version() {
	 return $this->version;
	}
	
	function set_desc($description) {
	 $this->description = $description;
	}
	function get_desc() {
	 return $this->description;
	}
	
	function set_operation($operation) {
	 $this->operation = $operation;
	}
	function get_operation() {
	 return $this->operation;
	}
	
	function set_refImg($ref_image) {
	 $this->ref_image = $ref_image;
	}
	function get_refImg() {
	 return $this->ref_image;
	}
}

?>