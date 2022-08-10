<?php

class School{
    /* Propaties */
    private $year_level;
    private $units;
    private $labortory;
    
    /*  setter and Getter */
    public function setValues($year_level, $units, $labortory){
        $this->year_level = $year_level;
        $this->units = $units;
        $this->labortory = $labortory;

    }


    //  Setter and Getter
    public function computeTotalPrice(){

        
        if($this->labortory == 'With Lab'){
            if($this->year_level == "1"){
                return ($this->units *550) + 3359;
            }elseif($this->year_level == "2"){
                return ($this->units *630) + 4000;
            }elseif($this->year_level == "3"){
                return ($this->units *470) + 2890;
            }elseif($this->year_level == "4"){
                return ($this->units *501) + 3555;
            }
            }
            
        elseif($this->labortory == 'Without Lab'){
            if($this->year_level == "1"){
                return ($this->units *550);
            }elseif($this->year_level == "2"){
                    return ($this->units *630);
            }elseif($this->year_level == "3"){
                    return ($this->units *470);
            }elseif($this->year_level == "4"){
                    return ($this->units *501);
            }
            }
        }
    
    
}
      



?>