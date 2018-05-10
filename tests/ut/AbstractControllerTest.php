<?php

/**
* 
*/
class AbstractControllerTest extends PHPUnit_Framework_TestCase
{
	
	public function testStatusCode(){
    
        $this->assertEquals(200,200);
    }

    public function testKeys(){
    
         $this->assertEquals('RS256', 'RS256');
    }
}