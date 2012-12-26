<?php
namespace Webit\Api\SmsCommon\Message;
class Sms {
	const ENCODING_UTF8 = 'utf-8';
	const ENCODING_CP1250 = 'windows-1250';
	const ENCODING_ISO88592 = 'iso-8859-2';

	/**
   * @var string
	 */
	protected $from;
	
	/**
   * @var array<ReciverInterface>
	 */
	protected $recivers = array();
	
	/**
   * @var string
	 */
	protected $encoding = self::ENCODING_UTF8;
	
	/**
	 * 
	 * @var string
	 */
	protected $content;
	
	/**
	 * 
	 * @param string $from
	 */
	public function setFrom($from) {
		$this->from = $from;
	}
	
	/**
	 * @return string
	 */
	public function getFrom() {
		return $this->from;
	}
	
	public function addReciver(ReciverInterface $reciver) {
		if(!in_array($reciver, $this->recivers)) {
			$this->recivers[] = $reciver;
		}
	}
	
	public function getRecivers() {
		return $this->recivers;
	}
	
	/**
	 * @return string
	 */
	public function getEncoding() {
		return $this->encoding;
	}

	/**
	 * 
	 * @param string $encoding
	 */
	public function setEncoding($encoding) {
		$this->encoding = $encoding;
	}

	/**
	 * @return string
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * 
	 * @param string $content
	 */
	public function setContent($content) {
		$this->content = $content;
	}
}
?>