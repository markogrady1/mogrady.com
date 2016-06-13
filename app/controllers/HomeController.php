<?php namespace App\Controllers;

use App\Lib\Curl;

class HomeController {
//	private $msg;
//    private $extracted = array();
//	function __construct($msg = null) {
//		 $this->msg = $msg;
//	}
//
//	public function getState() {
//		if($this->msg == "construction") {
//			return "<br><br><h1 style='text-align:center'>This site is under construction.</h1>";
//		} else if(!isset($this->msg)) {
//			return "";
//		}
//	}
//
//	public function getIntroduction($opt) {
//		if($opt === 1) {
//            return "";
//        }
//	}
//
//
//    public function getCurlDataArray($isArray = null) {
//        $curlData = new Curl();
//        $i = 0;
//        $val =  $curlData->getCurlData("https://api.github.com/users/markogrady1/repos?sort=updated");
//        if($isArray) {
//            if($val) {
//                foreach($val as $item) {
//                    $this->extracted[$i]["name"] = $item['name'];
//                    $this->extracted[$i]["fullname"] = $item['full_name'];
//                    $this->extracted[$i++]["html_url"] = $item['html_url'];
//                }
//
//            }
//            return $this->extracted;
//        } else {
//            return "";
//        }
//    }
}

