<?php

class employee{

    // Propaties
    private $civil_status;
    private $position;
    private $emplyment_status;
    private $work_hours;
    Private $ot_pay;
    Private $reg_pay;
    Private $healthcare;
    Private $tax;
    Private $income;
    
    //methods
    public function __construct($civil_status, $position, $employment_status, $work_hours){
        $this->civil_status = $civil_status;
        $this->position = $position;
        $this->employment = $employment_status;
        $this->work_hours = $work_hours;
    }

    public function computeRegularPay(){        
        if($this->position == 'admin'){
            if($this->number_of_hours_worked == 'Contractual'){
                return ($this->units *XXX) + 3359;
            }elseif($this->number_of_hours_worked == "Probationary"){
                return ($this->number_of_hours_worked *XXX) + 4000;
            }elseif($this->number_of_hours_worked == "Regular"){
                return ($this->units *XXX) + 2890;
            }elseif($this->XXX == "4"){
                return ($this->XXX *XXX) + 3555;
            }
        }
    }

    public function computeOvertimePay(){        
        if($this->position == 'staff'){
            if($this->work == "1"){
                return ($this->units *XXX) + 3359;
            }elseif($this->XXX == "2"){
                return ($this->units *XXX) + 4000;
            }elseif($this->XXX == "3"){
                return ($this->units *XXX) + 2890;
            }elseif($this->XXX == "4"){
                return ($this->number_of_hours_worked = $number_of_hours_worked;
            }
            }
        }elseif($this->position == 'admin'){
            if($this->emplyment_status == 'constractual'){
                return ($ot * 15);
            }elseif($this->employment_status == 'probationary'){
                return ($ot * 30);
            }elseif($this->employment_status == 'regular'){
                return ($ot * 40);
            }
        

            public function getHealthCare(){
                if($this->civil_status == )
            }

            public function computeTax(){

            }
    
    
}
?>