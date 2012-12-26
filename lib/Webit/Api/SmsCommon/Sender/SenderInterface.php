<?php
namespace Webit\Api\SmsCommon\Sender;

use Webit\Api\SmsCommon\Message\SmsInterface;

interface SmsSenderInterface {
	public function sendSms(SmsInterface $sms);
}
?>
