<?php
/*
 * (c) Konrad Baron <konradbaron@gmail.com>
 *
 */

namespace KonradBaron\FantasyData;

final class FantasyDataNFLScores extends FantasyDataNFL
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
	 * Bye Weeks
	 * Get bye weeks for the teams during a specified NFL season.
	 * Required parameters
	 * format | season
	 */
	public function byeWeeks($format, $season)
	{
		$this->validateFormat($format);

		$urlSuffix = 'Byes'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Game Stats by Season
	 * Required parameters
	 * format | season
	 */
	public function gameStatsBySeason($format, $season)
	{
		$this->validateFormat($format);

		$urlSuffix = 'GameStats'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Game Stats by Week
	 * Required parameters
	 * format | season | week
	 */
	public function gameStatsByWeek($format, $season, $week)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);

		$urlSuffix = 'GameStatsByWeek'.'/'.$season.'/'.$week;
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
	 * News by Team
	 * Required parameters
	 * format | team
	 */
	public function newsByTeam($format, $team)
	{
		$this->validateFormat($format);
		$this->validateTeam($team);

		$urlSuffix = 'NewsByTeam'.'/'.$team;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Recent News
	 * Required parameters
	 * format
	 */
	public function newsRecent($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'News';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Schedule
	 * Game schedule for a specified season.
	 * Required parameters
	 * format | season
	 */
	public function schedule($format, $season)
	{
		$this->validateFormat($format);

		$urlSuffix = 'Schedules'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Scores by Season
	 * Game scores for a specified season.
	 * Required parameters
	 * format | season
	 */
	public function scoresBySeason($format, $season)
	{
		$this->validateFormat($format);

		$urlSuffix = 'Scores'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Scores by Week
	 * Get game scores for a specified week of a season.
	 * Required parameters
	 * format | season | week
	 */
	public function scoresByWeek($format, $season, $week)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);

		$urlSuffix = 'ScoresByWeek'.'/'.$season.'/'.$week;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Season Current
	 * Year of the current NFL season. This value changes on July 1st. The earliest season for Fantasy data is 2001.
	 * The earliest season for Team data is 1985. The earliest season for Fantasy data is 2001.
	 * The earliest season for Team data is 1985.
	 * Required parameters
	 * format
	 */
	public function seasonCurrent($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'CurrentSeason';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Season Last Completed
	 * Year of the most recently completed season. this value changes immediately after the Super Bowl.
	 * The earliest season for Fantasy data is 2001. The earliest season for Team data is 1985.
	 * Required parameters
	 * format
	 */
	public function seasonLastCompleted($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'LastCompletedSeason';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Season Upcoming
	 * Year of the current NFL season, if we are in the mid-season.
	 * If we are in the off-season, then year of the next upcoming season.
	 * This value changes immediately after the Super Bowl.
	 * The earliest season for Fantasy data is 2001. The earliest season for Team data is 1985.
	 * Required parameters
	 * format
	 */
	public function seasonUpcoming($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'UpcomingSeason';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Stadiums
	 * This method returns all stadiums.
	 * Required parameters
	 * format
	 */
	public function stadiums($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'Stadiums';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Standings
	 * Required parameters
	 * format | season
	 */
	public function standings($format, $season)
	{
		$this->validateFormat($format);

		$urlSuffix = 'Standings'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Team Game Stats
	 * Required parameters
	 * format | season | week
	 */
	public function teamGameStats($format, $season, $week)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);

		$urlSuffix = 'TeamGameStats'.'/'.$season.'/'.$week;
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

		$urlSuffix = 'TeamSeasonStats'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Teams (Active)
	 * Gets all active teams.
	 * Required parameters
	 * format
	 */
	public function teamsActive($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'Teams';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Teams (All)
	 * Gets all teams, including pro bowl teams.
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

	/**
	 * Teams by Season
	 * List of teams playing in a specified season.
	 * Required parameters
	 * format | season
	 */
	public function teamsBySeason($format, $season)
	{
		$this->validateFormat($format);

		$urlSuffix = 'Teams'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Timeframes
	 * Get detailed information about past, present, and future timeframes.
	 * Required parameters
	 * format | type
	 */
	public function timeFrames($format, $type)
	{
		$this->validateFormat($format);
		$this->validateTimeFrameType($type);

		$urlSuffix = 'Timeframes'.'/'.$type;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Week Current
	 * Number of the current week of the NFL season.
	 * This value usually changes on Tuesday nights or Wednesday mornings at midnight EST.
	 * Week number is an integer between 1 and 21 or the word current. Weeks 1 through 17 are regular season weeks.
	 * Weeks 18 through 21 are post-season weeks.
	 * Required parameters
	 * format
	 */
	public function weekCurrent($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'CurrentWeek';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Week Last Completed
	 * Number of the last completed week in the current NFL season.
	 * This value changes immediately after the last game of the week is completed and the data is available.
	 * This usually happens right after the Monday night game.
	 * Week number is an integer between 1 and 21 or the word current. Weeks 1 through 17 are regular season weeks.
	 * Weeks 18 through 21 are post-season weeks.
	 * Required parameters
	 * format
	 */
	public function weekLastCompleted($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'LastCompletedWeek';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Week Upcoming
	 * Number of the last completed week in the current NFL season.
	 * This value changes immediately after the last game of the week is completed and the data is available.
	 * This usually happens right after the Monday night game.
	 * Week number is an integer between 1 and 21 or the word current. Weeks 1 through 17 are regular season weeks.
	 * Weeks 18 through 21 are post-season weeks.
	 * Required parameters
	 * format
	 */
	public function weekUpcoming($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'UpcomingWeek';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}
}