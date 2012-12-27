<?php
namespace Webit\Api\SmsCommon\Message;

class Reciver implements ReciverInterface {
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
