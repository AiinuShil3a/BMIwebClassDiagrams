<?php 
    class HealthAnalyzer{
        protected $BMI_height;
        protected $BMI_weight;

        public function __construct($BMI_height , $BMI_weight) {
                $this->BMI_height = $BMI_height;
                $this->BMI_weight = $BMI_weight;
            }
        public function get_Height(){
                return $this->BMI_height;
        }

        public function get_Weight(){
                return $this->BMI_weight;
        }
    }

    class Bmilndexer extends HealthAnalyzer { 
    private $BMI;
    public function BMI_calculator(){
        $Meter_Height = $this->BMI_height / 100;
        $this->BMI = $this->BMI_weight / ($Meter_Height * $Meter_Height);
        $this->BMI = number_format($this->BMI , 2);
        return $this->BMI;
    }

    }
?>