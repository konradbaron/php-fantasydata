<?php
/*
 * (c) Konrad Baron <konradbaron@gmail.com>
 *
 */

namespace KonradBaron\FantasyData;

final class FantasyDataNFLOdds extends FantasyDataNFL
{
	protected $urlSegment = "odds";
	private $url;

	public function __construct($api)
	{
		$this->buildClient($api);
		$this->url = $this->baseUrl . '/' . $this->baseURLSegment . '/' . $this->urlSegment;
	}

	/**
	 * Live Game Odds by Week
	 * Required parameters
	 * format | season | week
	 */
	public function liveGameOddsByWeek($format, $season, $week)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);

		$urlSuffix = 'LiveGameOddsByWeek'.'/'.$season.'/'.$week;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Live Game Odds Line Movement
	 * Required parameters
	 * format | scoreid
	 */
	public function playByPlayDelta($format, $scoreId)
	{
		$this->validateFormat($format);
		$this->validateScoreId($scoreId);

		$urlSuffix = 'LiveGameOddsLineMovement'.'/'.$scoreId;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Pre-Game Odds by Week
	 * Required parameters
	 * format | season | week
	 */
	public function preGameOddsByWeek($format, $season, $week)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);

		$urlSuffix = 'GameOddsByWeek'.'/'.$season.'/'.$week;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Pre-Game Odds Line Movement
	 * Required parameters
	 * format | scoreid
	 */
	public function preGameOddsLineMovement($format, $scoreId)
	{
		$this->validateFormat($format);
		$this->validateScoreId($scoreId);

		$urlSuffix = 'GameOddsLineMovement'.'/'.$scoreId;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}
}