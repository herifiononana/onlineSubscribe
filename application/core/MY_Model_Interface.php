<?php defined('BASEPATH') OR exit('No direct script access allowed');

    interface MY_Model_Interface{
        public function get_db_table();
        public function get_db_table_pk();
    }