<?php
/*
 * (c) Konrad Baron <konradbaron@gmail.com>
 *
 */

namespace KonradBaron\FantasyData;


abstract class FantasyDataNFL extends FantasyData
{
	protected $baseURLSegment = 'nfl';
	private $teams = array('GB','SEA','NO','ATL','NE','MIA','JAC','PHI','OAK','NYJ','BUF','CHI','TEN','KC','CLE','PIT','WAS','HOU','CIN','BAL','MIN','STL','CAR','TB','SF','DAL','IND','DEN','NYG','DET','SD','ARI','LAC','LAR');
	private $positions = array('C', 'CB', 'DB', 'DE', 'DE/LB', 'DL', 'DT', 'FB', 'FS', 'G', 'ILB', 'K', 'KR', 'LB', 'LS', 'NT', 'OL', 'OLB', 'OT', 'P', 'QB', 'RB', 'S', 'SS', 'T', 'TE', 'WR');

	protected function validateWeek($week)
	{
		if(!is_int($week) || $week < 0 || $week > 17) {
			throw new \Exception('Week is not valid. Valid weeks are 0 - 17');
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

	protected function validatePosition($position)
	{
		if(!in_array($position,$this->positions)) {
			throw new \Exception('Position is not valid. Must be set as one of the following: '.implode(', ',$this->positions));
		}
		return true;
	}
}