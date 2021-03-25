<?php defined('BASEPATH') OR exit('No direct script access allowed');
class inscription_Model extends MY_Model{
    private $_table = "etudiants";
    private $_pk = "idEtudiant";

     public function get_db_table(){
        return $this->_table;
    }

    public function get_db_table_pk(){
        return $this->_pk;
    }    
}