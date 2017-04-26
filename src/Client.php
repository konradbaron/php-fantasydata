<?php 
/*
 * (c) Konrad Baron <konradbaron@gmail.com>
 *
 */

namespace KonradBaron\FantasyData;

use GuzzleHttp\Client as HttpClient;

abstract class FantasyData
{
    private $base_url = "https://api.fantasydata.net/v3/";
    private $send_url;
    private $api_key;
    private $format_valid = array('json','xml');
    private $team_valid = array('ARI','ATL','BAL','BOS','CHC','CHW','CIN','CLE','COL','DET','HOU','KC','LAA','LAD','MIA','MIL','MIN','NYM','NYY','OAK','PHI','PIT','SD','SEA','SF','STL','TB','TEX','TOR','WSH');
    private $format;
    private $request_date;
    private $request_year;

    public function say()
	{
		$client = new HttpClient(['headers' => ['Ocp-Apim-Subscription-Key' => '218933c3090d40cdb91ef0eb9a1d273f']]);
		$res = $client->request('GET', 'https://api.fantasydata.net/v3/nfl/scores/json/News');
		echo $res->getBody();

		//$client = new HttpClient(['headers' => ['X-Foo' => 'Bar']['base_uri' => 'https://api.fantasydata.net/v3/nfl/scores/json/AreAnyGamesInProgress']);
        //return $toSay;
    }
}