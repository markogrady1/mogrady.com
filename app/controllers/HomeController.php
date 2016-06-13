<?php namespace App\Controllers;

class HomeController {
	private $msg;
	function __construct($msg = null) {
		 $this->msg = $msg;
	}
	
	public function getState() {
		if($this->msg == "construction") {
			return "<br><br><h1 style='text-align:center'>This site is under construction.</h1>";
		} else if(!isset($this->msg)) {
			return "";
		}
	}

	public function getIntroduction($opt) {
		if($opt === 1) {
			return "My name is Mark O Grady. I am a recent Computer Science graduate. Also first and foremost, I am very passionate	about sofware development. I find it absolutely fascinating that almost anything is possible, with the implementation of a bit of code.";
		}
		
	}
}

