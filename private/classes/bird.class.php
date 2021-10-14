<?php

 class Bird {

    public $common_name;
    public $habitat;
    public $food;
    public $nest_palcement;
    public $behavior;
    public $backyard_tips;
    protected $conservation_id;

    protected const CONSERVATION_OPTIONS = [ 
        1 => "Low concern",
        2 => "Medium concern",
        3 => "High concern",
        4 => "Extreme concern"
    ];

    
    /**
     * The __construct method uses the array given to make a asortment of varibles to display later
     *
     * @param   Array  $row  The array that will be used
     */
    public function __construct($row=[]) {
        $this->common_name = htmlentities($row['common_name'] ?? '');
        $this->habitat = htmlentities($row['habitat'] ?? '');
        $this->food = htmlentities($row['food'] ?? '');
        $this->nest_palcement = htmlentities($row['nest_palcement'] ?? '');
        $this->behavior = htmlentities($row['behavior'] ?? '');
        $this->backyard_tips = htmlentities($row['backyard_tips'] ?? '');
        $this->conservation_id = htmlentities($row['conservation_id'] ?? '');
    }

    /**
     * The conservation method is used to check the conservation_id and use the 
     *      CONSERVATION_OPTIONS array to create a sring answer for the conservation level
     *
     * @return  String  The string being returned is based on the id number
     */
    public function conservation() {
        // echo self::CONSERVATION_OPTIONS[$this->conservation_id];
        if( $this->conservation_id > 0 ) {
            return self::CONSERVATION_OPTIONS[$this->conservation_id];
        } else {
            return "Unknown";
        }
    }


}