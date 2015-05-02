<?php

class spiel {
    public $heim;
    public $gast;
    public $torheim;
    public $torgast;
    
    public function setHeim($team) {
        $this->heim = $team;
    }
    
    public function setGast($team) {
        $this->gast = $team;
    }
    
    
    public function tor ($team) {
        echo 'Tor!!';         
        if ($team == $this->heim) {
            $this->torheim++;
        }
        else {
            $this->torgast++;
        }
    }
    
    
    public function ergebnis () {
        return $this->heim." ".$this->torheim." : ".$this->torgast." ".$this->gast;     
    }    
    
    public function eintragen () {
        
    }
}

?>