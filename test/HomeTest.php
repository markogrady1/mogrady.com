<?php namespace Test;
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\HomeController as Home;

class HomeTest extends \PHPUnit_Framework_TestCase {
    private $homeValue;
    
    public function testHomeController() {
        $this->homeValue = new Home("construction");
        $actual = $this->homeValue->getMessage();
        $this->assertEquals("<br><br><h1 style='text-align:center'>This site is under construction.</h1>", $actual);
        $this->homeValue = new Home();
        $actual = $this->homeValue->getMessage();
        $this->assertEquals("", $actual);
    }
  
}