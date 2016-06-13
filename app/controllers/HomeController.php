<?php namespace App\Controllers;

class HomeController {
	private $msg;
	function __construct($msg = null) {
		 $this->msg = $msg;
	}
	
	public function getMessage() {
		if($this->msg == "construction") {
			return "<br><br><h1 style='text-align:center'>This site is under construction.</h1>";
		} else if(!isset($this->msg)) {
			return "";
		}
	}
}

