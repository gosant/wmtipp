<?php

class spiel {
    public $team1;
    public $team2;
    public $toreteam1;
    public $toreteam2;
    
    public function tor ($team) {
        if ($team == $team1) {
            $toreteam1++;
        }
        else {
            $toreteam2++;
        }
        
    }
}

?>