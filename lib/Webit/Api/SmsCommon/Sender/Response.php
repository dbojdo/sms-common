<?php
namespace Webit\Api\SmsCommon\Sender;

use Webit\Api\SmsCommon\Error\Error;

class Response {
	protected $success = true;
	protected $errors = array();
	
	public function setSuccess($success) {
		$this->success = $success;
	}
	
	public function getSuccess() {
		return $this->success;
	}
	
	public function addError(Error $error) {
		$this->errors[] = $error;
	}
	
	public function getErrors() {
		return $this->errors;
	}
}
?>
