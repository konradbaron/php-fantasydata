<?php 
/*
 * (c) Konrad Baron <konradbaron@gmail.com>
 *
 */

namespace KonradBaron\FantasyData;

use GuzzleHttp\Client as HttpClient;

abstract class FantasyData
{
    protected $baseUrl = 'https://api.fantasydata.net/v3';
	private $client;
    private $formats = array('json','xml');
	private $timeFrameTypes = array('current', 'upcoming', 'completed', 'recent', 'all');
	private $minuteMax = 2;

	protected function buildClient($apiKey)
	{
		$this->client = new HttpClient(['headers' => ['Ocp-Apim-Subscription-Key' => $apiKey]]);
	}

	protected function request($url)
	{
		$res = $this->client->request('GET', $url);
		return $res->getBody();
    }

	protected function validateFormat($format)
	{
		if(!in_array($format, $this->formats)) {
			throw new \Exception('Format is not valid. Must be set as one of the following: '.implode(', ',$this->formats).'');
		}
		return true;
	}

	protected function validateTimeFrameType($type)
	{
		if(!in_array($type, $this->timeFrameTypes)) {
			throw new \Exception('Type is not valid. Must be set as one of the following: '.implode(', ',$this->timeFrameTypes).'');
		}
		return true;
	}

	protected function validatePlayerId($playerId)
	{
		if(!is_int($playerId)) {
			throw new \Exception('Player ID is not valid. ID must be an integer');
		}
		return true;
	}

	protected function validateMinutes($minute)
	{
		if(!is_int($minute) || $minute > $this->minuteMax || $minute < 1) {
			throw new \Exception('Minute is not valid. Minute may not be greater than 2 or less than 1');
		}
		return true;
	}
}