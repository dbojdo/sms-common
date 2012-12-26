<?php
namespace Webit\Api\SmsCommon\Error;
class Error {
	const ERROR_NO_RESPONSE = 'no_response';
	
	/**
	 * @var string
	 */
	protected $code;

	/**
	 * 
	 * @var string
	 */
	protected $message;

	/**
	 * 
	 * @param string $code
	 * @param string $message
	 */
	public function __construct($code = null§, $message = null) {
		$this->code = $code;
		$this->message = $message;
	}

	/**
	 * 
	 * @return string
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * 
	 * @param string $code
	 */
	public function setCode($code) {
		$this->code = $code;
	}

	/**
	 * 
	 * @return string
	 */
	public function getMessage() {
		return $this->message;
	}

	/**
	 * 
	 * @param string $message
	 */
	public function setMessage($message) {
		$this->message = $message;
	}
}
?>
