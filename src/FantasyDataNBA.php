<?php
/*
 * (c) Konrad Baron <konradbaron@gmail.com>
 *
 */

namespace KonradBaron\FantasyData;


abstract class FantasyDataNBA extends FantasyData
{
	protected $baseURLSegment = 'nba';

	protected function validateSeason($season)
	{
		if(!is_int($season) || strlen($season) != 4) {
			throw new \Exception('Season is not valid. Season must be in YYYY format');
		}
		return true;
	}
}