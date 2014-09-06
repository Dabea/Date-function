<?php 

      //This is the date class it will give you an output of the date and time.  It requires input of the format you want it to display and the time that you want displaeyd
      class date1{
        protected $anyDay;
        protected $monthString;
        protected $monthAbb;
        protected $date_d;
        protected $day_l;
        protected $format;
        protected $changeTIme;
        
        
        // This will recive the pramaters from the class and make the usable to the function inside the class
        public function __construct($changeTime, $format){
            if($changeTime == null){
            }
            $this->format = $format;
            $this->changeTime = $changeTime;
        }

        
        
                public function strtime($input){
        // This will make it display the current date if no info is given
            if($input == null){
            $input = 'now';
            }
        $this->input = $input;
        $anyTime = strtotime($this->input);
        $this-> anyTime = $anyTime;
        return $this->anyTime;
        }  
      
        
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
            $time = self::strtime($this->changeTime);  
            $anyDay = date($this->display, $time);
            $this->anyDay = $anyDay;
            return  $this->anyDay;
        }
        public function anyDay(){
            return  $this->anyDay;
        }  
        
        //Might want to use the function above for the stuff down beldow here
        
        //this returns the full moth name eg "August"
        public function set_month_F(){ 
            $time = self::strtime($this->changeTime);
            $monthString = date('F',$time);
            $this->monthString = $monthString;
            return $this->monthString;
        }
         public function get_month_F(){
            self::set_month_F();
            return $this->monthString;
        
        }
        
        // This returns month abreavation eg Oct
        public function set_month_M(){
            $time = self::strtime($this->changeTime);
            $monthAbb = date('M',$time);
            $this->monthAbb = $monthAbb;
            return $this->monthAbb;
        }
        public function get_month_M(){
            self::set_month_M();
            return $this->monthAbb;
        
        }
         // This returns Date /w leading 0 eg 01 -31
        public function set_date_d(){
            $time = self::strtime($this->changeTime);
            $date_d = date('d',$time);
            $this->date_d = $date_d;
            return $this->date_d;
        }
        public function get_date_d(){
            self::set_date_d();
            return $this->date_d;
        }
        
            // This returns Date /w leading 0 eg 01 -31
        public function set_day_l(){
             
            $time = self::strtime($this->changeTime);
            $day_l = date('l',$time);
            $this->day_l = $day_l;  
        }
        public function get_day_l(){
             self::set_day_l();
             return $this->day_l;
  
        }
            
     }
     $test = new date1('thursday');
     $test2 = new date1();
     echo ($test->get_day_l() . "<br>" );
     echo ($test->get_date_d() . "<br>" );
     echo $test->anyDate();
      ?>
