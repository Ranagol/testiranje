<?php

class AvionskiLet {
    public $nazivLeta;
    public $spisakPutnika = [];
    private $maksimalniKapacitet;
    private $trenutniKapacitet;

    public function __construct($nazivLeta, $spisakPutnika, $trenutniKapacitet){
        $this->nazivLeta = $nazivLeta;
        $this->spisakPutnika = $spisakPutnika;
        $this->trenutniKapacitet = $trenutniKapacitet;
    }

    protected function namestiMaksimalniKapacitet($maksimalniKapacitet){
        $this->maksimalniKapacitet = $maksimalniKapacitet;
    }

    protected function proveriKapacitetAviona(){
        if ($this->trenutniKapacitet > $this->maksimalniKapacitet) {
            echo 'Avion preopterecen. Otkazi let ili reorganizuj.';
        } else {
            echo 'Kapacitet aviona je OK, u skladu sa propisima. Nastavi sa procesom.';
        }
    }

    




    
}




?>