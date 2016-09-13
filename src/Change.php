<?php
    class Change
    {
        public $quarters;
        public $dimes;
        public $nickles;
        public $pennies;
        
        function __construct()
        {
            $this->quarters = 0;
            $this->dimes = 0;
            $this->nickles = 0;
            $this->pennies = 0;
        }
        function quarters($input)
        {
            $remainder = $input % 25;
            $this->quarters = (($input-($remainder))/25);
            $this->dimes($remainder);
        }
        function dimes($input)
        {
            $remainder = $input % 10;
            $this->dimes = (($input-($remainder))/10);
            $this->nickles($remainder);
        }
        function nickles($input)
        {
            $remainder = $input % 5;
            $this->nickles = (($input-($remainder))/5);
            $this->pennies = $remainder;
            return $this->pennies;
        }

    }
?>
