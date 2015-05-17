<?php

class Site extends MY_Model {
    
    const DB_TABLE = 'sites';
    const DB_TABLE_PK = 'site_id';
    
    /**
     * Site unique identifier.
     * @var int 
     */
    public $site_id;
    
    /**
     * School unifying record.
     * @var int
     */
    public $school_id;
    
    /**
     * Publisher assigned site number.
     * @var int 
     */
    public $site_number;
    
    /**
     * Date that the site was published.
     * @var string 
     */
    public $site_date_school;
    
    /**
     * Path to the file containing the cover image.
     * @var string 
     */
    public $site_logo;
    
}