<?php
/*
 * (c) Konrad Baron <konradbaron@gmail.com>
 *
 */

namespace KonradBaron\FantasyData;

final class FantasyDataNBAStats extends FantasyDataNBA
{
	protected $urlSegment = "stats";
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
	 * Box Score
	 * Required parameters
	 * format | gameId
	 */
	public function boxScores($format, $gameId)
	{
		$this->validateFormat($format);
		$this->validateGameId($gameId);

		$urlSuffix = 'BoxScore/'.$gameId;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Box Scores by Date
	 * Required parameters
	 * format | date
	 */
	public function boxScoresByDate($format, $date)
	{
		$this->validateFormat($format);
		$this->validateDate($date);

		$urlSuffix = 'BoxScores/'.$date;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Box Scores by Date Delta
	 * Required parameters
	 * format | date | minute
	 */
	public function boxScoresByDateDelta($format, $date, $minute)
	{
		$this->validateFormat($format);
		$this->validateDate($date);
		$this->validateMinutes($minute);

		$urlSuffix = 'BoxScoresDelta/'.$date.'/'.$minute;
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
	 * Games By Date
	 * Required parameters
	 * format | date
	 */
	public function gamesByDate($format, $date)
	{
		$this->validateFormat($format);
		$this->validateDate($date);

		$urlSuffix = 'GamesByDate/'.$date;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
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
	 * News By Date
	 * Required parameters
	 * format | date
	 */
	public function newsByDate($format, $date)
	{
		$this->validateFormat($format);
		$this->validateDate($date);

		$urlSuffix = 'NewsByDate/'.$date;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
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

		$urlSuffix = 'NewsByPlayerID/'.$playerId;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Details by Active
	 * Required parameters
	 * format
	 */
	public function playerDetailsByActive($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'Players';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Details by Free Agent
	 * Required parameters
	 * format
	 */
	public function playerDetailsByFreeAgent($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'FreeAgents';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Details by Player
	 * Required parameters
	 * format | playerid
	 */
	public function playerDetailsByPlayer($format, $playerId)
	{
		$this->validateFormat($format);
		$this->validatePlayerId($playerId);

		$urlSuffix = 'Player/'.$playerId;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Game Stats by Date
	 * Required parameters
	 * format | date
	 */
	public function playerGameStatsByDate($format, $date)
	{
		$this->validateFormat($format);
		$this->validateDate($date);

		$urlSuffix = 'PlayerGameStatsByDate/'.$date;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Player Game Stats by Player
	 * Required parameters
	 * format | date | playerid
	 */
	public function playerGameStatsByPlayer($format, $date, $playerId)
	{
		$this->validateFormat($format);
		$this->validateDate($date);
		$this->validatePlayerId($playerId);

		$urlSuffix = 'PlayerGameStatsByPlayer/'.$date.'/'.$playerId;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Player Season Stats
	 * Required parameters
	 * format | season
	 */
	public function playerSeasonStats($format, $season)
	{
		$this->validateFormat($format);
		$this->validateSeason($season);

		$urlSuffix = 'PlayerSeasonStats/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Season Stats By Player
	 * Required parameters
	 * format | season | playerid
	 */
	public function playerSeasonStatsByPlayer($format, $season, $playerId)
	{
		$this->validateFormat($format);
		$this->validateSeason($season);
		$this->validatePlayerId($playerId);

		$urlSuffix = 'PlayerSeasonStatsByPlayer/'.$season.'/'.$playerId;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Player Season Stats by Team
	 * Required parameters
	 * format | season | team
	 */
	public function playerSeasonStatsByTeam($format, $season, $team)
	{
		$this->validateFormat($format);
		$this->validateSeason($season);
		$this->validateTeam($team);

		$urlSuffix = 'PlayerSeasonStatsByTeam/'.$season.'/'.$team;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Players by Team
	 * Required parameters
	 * format | team
	 */
	public function playersByTeam($format, $team)
	{
		$this->validateFormat($format);
		$this->validateTeam($team);

		$urlSuffix = 'Players/'.$team;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
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

		$urlSuffix = 'Games/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
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

		$urlSuffix = 'Standings/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
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

		$urlSuffix = 'TeamGameStatsByDate/'.$date;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
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

		$urlSuffix = 'TeamSeasonStats/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Team Stats Allowed by Position
	 * Required parameters
	 * format | season
	 */
	public function teamStatsAllowedByPosition($format, $season)
	{
		$this->validateFormat($format);
		$this->validateSeason($season);

		$urlSuffix = 'TeamStatsAllowedByPosition/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Teams (Active)
	 * Required parameters
	 * format
	 */
	public function teamsActive($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'teams';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
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
		return $this->request($requestUrl);
	}
}