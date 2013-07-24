<?php namespace Twilio\Laratwilio;


class Laratwilio {

	public function __construct($config)
	{
		$this->config = $config;
	}

	public function getConfig()
	{
		return $this->config['fromNumber'];
	}

	public function send($data)
	{
		$client = new \Services_Twilio($this->config['accountSid'], $this->config['authToken']);
		$fromNumber = (isset($data['from'])) ? $data['from'] : $this->config['fromNumber'];
		$message = $client->account->sms_messages->create(
			$fromNumber, // From a valid Twilio number
			$data['to'], // Text this number
			$data['text'] //what's in
		);

		return $message;
	}

}