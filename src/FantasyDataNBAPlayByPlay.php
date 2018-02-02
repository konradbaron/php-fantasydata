<?php
/*
 * (c) Konrad Baron <konradbaron@gmail.com>
 *
 */

namespace KonradBaron\FantasyData;

final class FantasyDataNBAPlayByPlay extends FantasyDataNBA
{
	protected $urlSegment = "pbp";
	private $url;

	public function __construct($api)
	{
		$this->buildClient($api);
		$this->url = $this->baseUrl . '/' . $this->baseURLSegment . '/' . $this->urlSegment;
	}

	/**
	 * Play By Play
	 * Required parameters
	 * format | gameId
	 */
	public function playByPlay($format, $gameId)
	{
		$this->validateFormat($format);
		$this->validateGameId($gameId);

		$urlSuffix = 'PlayByPlay'.'/'.$gameId;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}
}