<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Standings extends SoccerAPIClient {

    public function bySeasonId($seasonId)
    {
        return $this->callData('standings/season/' . $seasonId);
    }

    public function liveBySeasonId($seasonId)
    {
        return $this->callData('standings/season/live/' . $seasonId);
    }

    public function seasonByRound($seasonId, $roundId)
    {
        return $this->callData('standings/season/live/' . $seasonId . '/round/' .  $roundId);
    }

    public function standingsCorrectionsBySeasonId($seasonId)
    {
        return $this->callData('corrections/season/' . $seasonId);
    }

}