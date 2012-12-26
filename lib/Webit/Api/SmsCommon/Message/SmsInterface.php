<?php
namespace Webit\Api\SmsCommon\Message;

interface SmsInterface {
	public function getFrom();
	public function getRecivers();
	public function getEncoding();
	public function getContent();
}
?>
