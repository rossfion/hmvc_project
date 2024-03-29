<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Model {

    //the database table
    public $table_name = 'categories';
    //Primary key field
    public $primary_key = 'id';
    //Filter for primary key
    public $primaryFilter = 'intval';
    //Order by field, Default order for this model
    public $order_by = '';

    public function __construct() {
        parent::__construct();
    }

}
