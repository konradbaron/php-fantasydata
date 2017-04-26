<?php
/*
 * (c) Konrad Baron <konradbaron@gmail.com>
 *
 */

namespace KonradBaron\FantasyData;

final class FantasyDataNFLProjections extends FantasyDataNFL
{
	protected $urlSegment = "projections";
	private $url;

	public function __construct($api)
	{
		$this->buildClient($api);
		$this->url = $this->baseUrl . '/' . $this->baseURLSegment . '/' . $this->urlSegment;
	}

	/**
	 * Projected Fantasy Defense Game Stats
	 * Required parameters
	 * format | season | week
	 */
	public function projectedFantasyDefenseGameStats($format, $season, $week)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);

		$urlSuffix = 'FantasyDefenseProjectionsByGame'.'/'.$season.'/'.$week;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Projected Fantasy Defense Season Stats
	 * Required parameters
	 * format | season
	 */
	public function projectedFantasyDefenseSeasonStats($format, $season)
	{
		$this->validateFormat($format);

		$urlSuffix = 'FantasyDefenseProjectionsBySeason'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Projected Player Game Stats by Player
	 * Required parameters
	 * format | season | week | playerid
	 */
	public function projectedPlayerGameStatsByPlayer($format, $season, $week, $playerId)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);
		$this->validatePlayerId($playerId);

		$urlSuffix = 'PlayerGameProjectionStatsByPlayerID'.'/'.$season.'/'.$week.'/'.$playerId;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Projected Player Game Stats by Team
	 * Required parameters
	 * format | season | week | team
	 */
	public function projectedPlayerGameStatsByTeam($format, $season, $week, $team)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);
		$this->validateTeam($team);

		$urlSuffix = 'PlayerGameProjectionStatsByTeam'.'/'.$season.'/'.$week.'/'.$team;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Projected Player Game Stats by Week
	 * Required parameters
	 * format | season | week
	 */
	public function projectedPlayerGameStatsByWeek($format, $season, $week)
	{
		$this->validateFormat($format);
		$this->validateWeek($week);

		$urlSuffix = 'PlayerGameProjectionStatsByWeek'.'/'.$season.'/'.$week;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Projected Player Season Stats
	 * Required parameters
	 * format | season
	 */
	public function projectedPlayerSeasonStats($format, $season)
	{
		$this->validateFormat($format);

		$urlSuffix = 'PlayerSeasonProjectionStats'.'/'.$season;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		$this->request($requestUrl);
	}

	/**
	 * Projected Player Season Stats by Player
	 * Required parameters
	 * format | season | playerid
	 */
	public function projectedPlayerSeasonStatsByPlayer($format, $season, $playerId)
	{
		$this->validateFormat($format);
		$this->validatePlayerId($playerId);

		$urlSuffix = 'PlayerSeasonProjectionStatsByPlayerID'.'/'.$season.'/'.$playerId;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}

	/**
	 * Projected Player Season Stats by Team
	 * Required parameters
	 * format | season | team
	 */
	public function projectedPlayerSeasonStatsByTeam($format, $season, $team)
	{
		$this->validateFormat($format);
		$this->validateTeam($team);

		$urlSuffix = 'PlayerSeasonProjectionStatsByTeam'.'/'.$season.'/'.$team;
		$requestUrl = $this->url.'/'.$format.'/'.$urlSuffix;
		return $this->request($requestUrl);
	}
}