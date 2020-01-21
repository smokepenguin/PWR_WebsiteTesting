<?php
//we include framework
use PHPUnit\Framework\TestCase;

//we will be testing functions from the main site
include ('././php_functions.php');

//a class for testing
class SampleTest extends TestCase
{
	//we are running tests for isProperPhone function

	public function testFunctionDeniesPhoneNumbersShorterThanNineCharacters() {
		$phone = "555333";
		//we assert that the function will return false
		$this->assertFalse(isProperPhone($phone));
		
	}

	public function testFunctionDeniesPhoneNumbersLongerThanNineCharacters() {
		$phone = "5553335550";
		//we assert that the function will return false
		$this->assertFalse(isProperPhone($phone));
		
	}

	public function testFunctionAcceptsPhoneNumbersWithNineCharacters() {
		$phone = "555333555";
		//we assert that the function will return true
		$this->assertTrue(isProperPhone($phone));
		
	}

		public function testFunctionDeniesPhoneNumbersWithNonDigitCharacters() {
		$phone = "555da9555";
		//we assert that the function will return false
		$this->assertFalse(isProperPhone($phone));
		
	}



}