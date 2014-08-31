<?php 

      //This is the date class it will give you an output of the date and time.  It requires input of the format you want it to display and the time that you want displaeyd
      class date1{
        protected $anyDay;
        protected $monthString;
        protected $monthAbb;
        protected $date_d;
        
        public function anyDate($display, $input){
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
            return  $this->anyDay;
        }
        public function anyDay(){
            return  $this->anyDay;
        }  
        
        //Might want to use the function above for the stuff down beldow here
        
        //this returns the full moth name eg "August"
        public function month_F(){ 
            $time = time();
            $monthString = date('F',$time);
            $this->monthString = $monthString;
            return $this->monthString;
        }
        // This returns month abreavation eg Oct
        public function month_M(){
            $time = time();
            $monthAbb = date('M',$time);
            $this->monthAbb = $monthAbb;
            return $this->monthAbb;
        }
         // This returns Date /w leading 0 eg 01 -31
        public function date_d(){
            $time = time();
            $date_d = date('d',$time);
            $this->date_d = $date_d;
            return $this->date_d;
        }
            // This returns Date /w leading 0 eg 01 -31
        public function day_l(){
            $time = time();
            $day_l = date('l',$time);
            $this->day_l = $day_l;
            return $this->day_l;
        }
     }
     $test = new date1();
     $test2 = new date1();
     echo ($test->day_l() . "<br>" );
     echo $test->anyDate();
      ?>
