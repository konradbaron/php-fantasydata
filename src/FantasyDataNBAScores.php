<?php
/*
 * (c) Konrad Baron <konradbaron@gmail.com>
 *
 */

namespace KonradBaron\FantasyData;

final class FantasyDataNBAScores extends FantasyDataNBA
{
	protected $urlSegment = "scores";
	private $url;

	public function __construct($api)
	{
		$this->buildClient($api);
		$this->url = $this->baseUrl . '/' . $this->baseURLSegment . '/' . $this->urlSegment;
	}

	/**
	 * Are Games In Progress
	 * Returns true if there is at least one game being played at the time of the request or false if there are none.
	 * Required parameters
	 * format
	 */
	public function areGamesInProgress($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'AreAnyGamesInProgress';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Current Season
	 * Required parameters
	 * format
	 */
	public function currentSeason($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'CurrentSeason';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Games by Date
	 * Required parameters
	 * format | date
	 */
	public function gamesByDate($format, $date)
	{
		$this->validateFormat($format);
		$this->validateDate($date);

		$urlSuffix = 'GamesByDate'.'/'.$date;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * News
	 * Required parameters
	 * format
	 */
	public function news($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'News';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * News by Date
	 * Required parameters
	 * format | date
	 */
	public function newsByDate($format, $date)
	{
		$this->validateFormat($format);
		$this->validateDate($date);

		$urlSuffix = 'NewsByDate'.'/'.$date;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * News by Player
	 * Required parameters
	 * format | playerid
	 */
	public function newsByPlayer($format, $playerId)
	{
		$this->validateFormat($format);
		$this->validatePlayerId($playerId);

		$urlSuffix = 'NewsByPlayerID'.'/'.$playerId;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Schedules
	 * Required parameters
	 * format | season
	 */
	public function schedules($format, $season)
	{
		$this->validateFormat($format);
		$this->validateSeason($season);

		$urlSuffix = 'Games'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Stadiums
	 * Required parameters
	 * format
	 */
	public function stadiums($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'Stadiums';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Standings
	 * Required parameters
	 * format | season
	 */
	public function standings($format, $season)
	{
		$this->validateFormat($format);
		$this->validateSeason($season);

		$urlSuffix = 'Standings'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Team Game Stats by Date
	 * Required parameters
	 * format | date
	 */
	public function teamGameStatsByDate($format, $date)
	{
		$this->validateFormat($format);
		$this->validateDate($date);

		$urlSuffix = 'TeamGameStatsByDate'.'/'.$date;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Team Season Stats
	 * Required parameters
	 * format | season
	 */
	public function teamSeasonStats($format, $season)
	{
		$this->validateFormat($format);
		$this->validateSeason($season);

		$urlSuffix = 'TeamSeasonStats'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Teams (Active)
	 * Required parameters
	 * format
	 */
	public function teams($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'teams';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Teams (All)
	 * Required parameters
	 * format
	 */
	public function teamsAll($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'AllTeams';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}
}