<?php
namespace Webit\Api\SmsCommon\Message;

class Recipient implements RecipientInterface {
	/**
   * @var string
	 */
	protected $phoneNo;
	
	public function __construct($phoneNo) {
		$this->phoneNo = $phoneNo;
	}
	
	public function getPhoneNo() {
		return $this->phoneNo;
	}
}
?>
