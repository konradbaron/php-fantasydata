<?php
/*
 * (c) Konrad Baron <konradbaron@gmail.com>
 *
 */

namespace KonradBaron\FantasyData;

final class FantasyDataNFLStats extends FantasyDataNFL
{
	protected $urlSegment = "stats";
	private $url;

	public function __construct($api)
	{
		$this->buildClient($api);
		$this->url = $this->baseUrl . '/' . $this->baseURLSegment . '/' . $this->urlSegment;
	}

	/**
	 * Box Score
	 * This method returns all box scores for a given season and week.
	 * Required parameters
	 * format | season | week
	 */
	public function boxScores($format, $season, $week)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);

		$urlSuffix = 'BoxScores'.'/'.$season.'/'.$week;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Box Scores Active
	 * This method returns box scores for all games that are either in-progress or have been updated within the last 30 minutes.
	 * Required parameters
	 * format | season | week
	 */
	public function boxScoresActive($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'ActiveBoxScores';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Box Scores Delta
	 * This method returns all box scores for a given season and week, but only returns player stats that have changed in the last X minutes.
	 * Required parameters
	 * format | season | week | minute
	 */
	public function boxScoresDelta($format, $season, $week, $minute)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);
		$this->validateMinutes($minute);

		$urlSuffix = 'BoxScoresDelta'.'/'.$season.'/'.$week.'/'.$minute;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Box Scores Delta (Current Week)
	 * Required parameters
	 * format | minute
	 */
	public function boxScoresDeltaCurrent($format, $minute)
	{
		$this->validateFormat($format);
		$this->validateMinutes($minute);

		$urlSuffix = 'RecentlyUpdatedBoxScores'.'/'.$minute;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Box Scores Final
	 * Required parameters
	 * format
	 */
	public function boxScoresFinal($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'FinalBoxScores';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Box Scores Live
	 * Required parameters
	 * format
	 */
	public function boxScoresLive($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'LiveBoxScores';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Daily Fantasy Players
	 * Required parameters
	 * format | date
	 */
	public function dailyFantasyPlayers($format, $date)
	{
		$this->validateFormat($format);
		$this->validateDate($date);

		$urlSuffix = 'DailyFantasyPlayers'.'/'.$date;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Daily Fantasy Scoring
	 * Required parameters
	 * format | date
	 */
	public function dailyFantasyPoints($format, $date)
	{
		$this->validateFormat($format);
		$this->validateDate($date);

		$urlSuffix = 'DailyFantasyPoints'.'/'.$date;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Fantasy Defense Game Stats
	 * Required parameters
	 * format | season | week
	 */
	public function fantasyDefenseGameStats($format, $season, $week)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);

		$urlSuffix = 'FantasyDefenseByGame'.'/'.$season.'/'.$week;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Fantasy Defense Game Stats by Team
	 * Required parameters
	 * format | season | week | team
	 */
	public function fantasyDefenseGameStatsByTeam($format, $season, $week, $team)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);
		$this->validateTeam($team);

		$urlSuffix = 'FantasyDefenseByGameByTeam'.'/'.$season.'/'.$week.'/'.$team;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Fantasy Defense Season Stats
	 * Required parameters
	 * format | season
	 */
	public function fantasyDefenseSeasonStats($format, $season)
	{
		$this->validateFormat($format);

		$urlSuffix = 'FantasyDefenseBySeason'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Fantasy Defense Season Stats by Team
	 * Required parameters
	 * format | season | team
	 */
	public function fantasyDefenseSeasonStatsByTeam($format, $season, $team)
	{
		$this->validateFormat($format);
		$this->validateTeam($team);

		$urlSuffix = 'FantasyDefenseBySeasonByTeam'.'/'.$season.'/'.$team;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Fantasy Players by ADP
	 * This method returns a comprehensive list of draftable fantasy football players, including QB, RB, WR, TE, K and DEF.
	 * Players are sorted by ADP (AverageDraftPosition).
	 * Required parameters
	 * format
	 */
	public function fantasyPlayersByADP($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'FantasyPlayers';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Game Stats by Season
	 * Game stats for a specified season.
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
	 * Game stats for a specified season and week.
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
	 * Injuries
	 * Required parameters
	 * format | season | week
	 */
	public function injuries($format, $season, $week)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);

		$urlSuffix = 'Injuries'.'/'.$season.'/'.$week;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Injuries by Team
	 * Required parameters
	 * format | season | week | team
	 */
	public function injuriesByTeam($format, $season, $week, $team)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);
		$this->validateTeam($team);

		$urlSuffix = 'Injuries'.'/'.$season.'/'.$week.'/'.$team;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * League Leaders by Season
	 * Required parameters
	 * format | season | position | column
	 */
	public function leagueLeadersBySeason($format, $season, $position, $column)
	{
		$this->validateFormat($format);
		$this->validatePosition($position);

		$urlSuffix = 'SeasonLeagueLeaders'.'/'.$season.'/'.$position.'/'.$column;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * League Leaders by Week
	 * Required parameters
	 * format | season | week | position | column
	 */
	public function leagueLeadersByWeek($format, $season, $week, $position, $column)
	{
		$this->validateFormat($format);
		$this->validatePosition($position);

		$urlSuffix = 'GameLeagueLeaders'.'/'.$season.'/'.$week.'/'.$position.'/'.$column;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Details by Available
	 * Required parameters
	 * format
	 */
	public function playerDetailsByAvailable($format)
	{
		$this->validateFormat($format);

		$urlSuffix = 'Players';
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Details by Free Agents
	 * Required parameters
	 * format
	 */
	public function playerDetailsByFreeAgents($format)
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

		$urlSuffix = 'Players'.'/'.$playerId;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Details by Team
	 * Required parameters
	 * format | team
	 */
	public function playerDetailsByTeam($format, $team)
	{
		$this->validateFormat($format);
		$this->validateTeam($team);

		$urlSuffix = 'Players'.'/'.$team;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Player Game Red Zone Stats by Week
	 * Required parameters
	 * format | season | week
	 */
	public function playerGameRedZoneStatsByWeek($format, $season, $week)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);

		$urlSuffix = 'PlayerGameRedZoneStats'.'/'.$season.'/'.$week;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Game Stats by Player
	 * Required parameters
	 * format | season | week | playerid
	 */
	public function playerGameStatsByPlayer($format, $season, $week, $playerId)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);
		$this->validatePlayerId($playerId);

		$urlSuffix = 'PlayerGameStatsByPlayerID'.'/'.$season.'/'.$week.'/'.$playerId;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Game Stats by Team
	 * Required parameters
	 * format | season | week | team
	 */
	public function playerGameStatsByTeam($format, $season, $week, $team)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);
		$this->validateTeam($team);

		$urlSuffix = 'PlayerGameStatsByTeam'.'/'.$season.'/'.$week.'/'.$team;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Game Stats by Week
	 * Required parameters
	 * format | season | week
	 */
	public function playerGameStatsByWeek($format, $season, $week)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);

		$urlSuffix = 'PlayerGameStatsByWeek'.'/'.$season.'/'.$week;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Game Stats by Week Delta
	 * Required parameters
	 * format | season | week | minute
	 */
	public function playerGameStatsByWeekDelta($format, $season, $week, $minute)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);
		$this->validateMinutes($minute);

		$urlSuffix = 'PlayerGameStatsByWeekDelta'.'/'.$season.'/'.$week.'/'.$minute;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Game Stats Delta
	 * Required parameters
	 * format | minute
	 */
	public function playerGameStatsDelta($format, $minute)
	{
		$this->validateFormat($format);
		$this->validateMinutes($minute);

		$urlSuffix = 'PlayerGameStatsDelta'.'/'.$minute;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Player Season Red Zone Stats
	 * Required parameters
	 * format | season
	 */
	public function playerSeasonRedZoneStats($format, $season)
	{
		$this->validateFormat($format);

		$urlSuffix = 'PlayerSeasonRedZoneStats'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Season Stats
	 * Required parameters
	 * format | season
	 */
	public function playerSeasonStats($format, $season)
	{
		$this->validateFormat($format);

		$urlSuffix = 'PlayerSeasonStats'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Season Stats by Player
	 * Required parameters
	 * format | season | playerid
	 */
	public function playerSeasonStatsByPlayer($format, $season, $playerId)
	{
		$this->validateFormat($format);
		$this->validatePlayerId($playerId);

		$urlSuffix = 'PlayerSeasonStatsByPlayerID'.'/'.$season.'/'.$playerId;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Season Stats by Team
	 * Required parameters
	 * format | season | team
	 */
	public function playerSeasonStatsByTeam($format, $season, $team)
	{
		$this->validateFormat($format);
		$this->validateTeam($team);

		$urlSuffix = 'PlayerSeasonStatsByTeam'.'/'.$season.'/'.$team;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Player Season Third Down Stats
	 * Required parameters
	 * format | season
	 */
	public function playerSeasonThirdDownStats($format, $season)
	{
		$this->validateFormat($format);

		$urlSuffix = 'PlayerSeasonThirdDownStats'.'/'.$season;
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
}