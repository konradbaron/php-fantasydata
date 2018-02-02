<?php
/*
 * (c) Konrad Baron <konradbaron@gmail.com>
 *
 */

namespace KonradBaron\FantasyData;

final class FantasyDataNFLPlayByPlay extends FantasyDataNFL
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
	 * format | season | week | hometeam
	 */
	public function playByPlay($format, $season, $week, $hometeam)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);
		$this->validateTeam($hometeam);

		$urlSuffix = 'PlayByPlay'.'/'.$season.'/'.$week.'/'.$hometeam;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Play By Play Delta
	 * Required parameters
	 * format | season | week | minutes
	 */
	public function playByPlayDelta($format, $season, $week, $minute)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);
		$this->validateMinutes($minute);

		$urlSuffix = 'PlayByPlayDelta'.'/'.$season.'/'.$week.'/'.$minute;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}
}