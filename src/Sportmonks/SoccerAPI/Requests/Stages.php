<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Stages extends SoccerAPIClient
{
    public function byId($stagesId)
    {
        return $this->call('stages/' . $stagesId);
    }

    public function bySeasonId($seasonId)
    {
        return $this->call('stages/' . $seasonId);
    }
}