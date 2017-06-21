<?php
/*
 * (c) Konrad Baron <konradbaron@gmail.com>
 *
 */

namespace KonradBaron\FantasyData;


abstract class FantasyDataNBA extends FantasyData
{
	protected $baseURLSegment = 'nba';
	private $teams = array('WAS','CHA','ATL','MIA','ORL','NY','PHI','BKN','BOS','TOR','CHI','CLE','IND','DET','MIL','MIN','UTA','OKC','POR','DEN','MEM','HOU','NO','SA','DAL','GS','LAL','LAC','PHO','SAC','EAST','WEST');

	protected function validateSeason($season)
	{
		if(!is_int($season) || strlen($season) != 4) {
			throw new \Exception('Season is not valid. Season must be in YYYY format');
		}
		return true;
	}

	protected function validateTeam($team)
	{
		if(!in_array($team,$this->teams)) {
			throw new \Exception('Team is not valid. Must be set as one of the following: '.implode(', ',$this->teams));
		}
		return true;
	}
}