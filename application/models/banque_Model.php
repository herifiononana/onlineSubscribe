<?php defined('BASEPATH') OR exit('No direct script access allowed');
class banque_Model extends MY_Model{
    private $_table = "banques";
    private $_pk = "idBanques";

    public function get_db_table(){
        return $this->_table;
    }

    public function get_db_table_pk(){
        return $this->_pk;
    }    

}