<?php

class School extends MY_Model {
    
    const DB_TABLE = 'schools';
    const DB_TABLE_PK = 'school_id';
    
    /**
     * School unique identifier.
     * @var int
     */
    public $school_id;
    
    /**
     * School name.
     * @var string
     */
    public $school_name;
}