<?php 

      //This is the date class it will give you an output of the date and time.  It requires input of the format you want it to display and the time that you want displaeyd
      class date1{
        protected $anyDay;
        protected $monthString;
        
        public function __construct($display, $input){
            // This will make it display all the info is no format is specified
            if($display == null){
            $display = 'l jS \of F Y h:i:s A';
            }
            // This will make it display the current date if no info is given
            if($input == null){
            $input = 'now';
            }
            
            $this->display = $display;
            $this->input = $input;
            //this give you the ablilty to say next week or last thursday ect
            $time = strtotime($this->input);  
            $anyDay = date($this->display, $time);
            $this->anyDay = $anyDay;
        }
        public function anyDay(){
            return  $this->anyDay;
        }  
        public function monthString(){
            $monthString = date('F',$time);
            $this->monthString = $monthString;
            return $this->$monthString;
        }
     }
?>
