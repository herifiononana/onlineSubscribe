<?php defined('BASEPATH') OR exit('No direct script access allowed');

    require_once 'application/core/MY_Model_Interface.php';

    abstract class MY_Model extends CI_Model implements MY_Model_Interface{

        public function get_db_table(){
            return $this->_table;
        }
    
        public function get_db_table_pk(){
            return $this->_pk;
        }    

        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        private function insert($data){
            $this->db->insert($this->get_db_table(), $data);
            $this->{$this->get_db_table_pk()} = $this->db->insert_id();
            return $this->{$this->get_db_table_pk()};
        }

        private function update($data){
            $this->db->update($this->get_db_table(), $data, array(
                $this->get_db_table_pk()=>$this->{$this->get_db_table_pk()}
            ));
            return $this->{$this->get_db_table_pk()};
        }

        public function save($data){
            if (isset($this->{$this->get_db_table_pk()})){
                $id = $this->update($data);
            }
            else{
                $id = $this->insert($data);
            }
            return $id;
        }

        public function delete(){
            $this->db->delete($this->get_db_table(), array(
                $this->get_db_table_pk() => $this->{$this->get_db_table_pk()}
            ));
            return $this->{$this->get_db_table_pk()};
        }

        public function get_data(){
            return $this->db->select('*')
                ->from($this->get_db_table())
                ->get()
                ->result();
        }
    }