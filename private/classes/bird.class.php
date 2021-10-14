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

    public function __construct($row=[]) {
        $this->common_name = $row['common_name'] ?? '';
        $this->habitat = $row['habitat'] ?? '';
        $this->food = $row['food'] ?? '';
        $this->nest_palcement = $row['nest_palcement'] ?? '';
        $this->behavior = $row['behavior'] ?? '';
        $this->backyard_tips = $row['backyard_tips'] ?? '';
        $this->conservation_id = $row['conservation_id'] ?? '';

    }

    public function conservation() {
        // echo self::CONSERVATION_OPTIONS[$this->conservation_id];
        if( $this->conservation_id > 0 ) {
            return self::CONSERVATION_OPTIONS[$this->conservation_id];
        } else {
            return "Unknown";
        }
    }


}