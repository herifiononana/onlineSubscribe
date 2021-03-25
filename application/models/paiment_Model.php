<?php defined('BASEPATH') OR exit('No direct script access allowed');
class paiement_Model extends MY_Model{
    private $_table = "paiments";
    private $_pk = "idpaiments";

    public function get_db_table(){
        return $this->_table;
    }

    public function get_db_table_pk(){
        return $this->_pk;
    }
}