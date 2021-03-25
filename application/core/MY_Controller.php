<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class MY_Controller extends CI_Controller{
        protected $_data = array();
        protected $_global_css = array();
        protected $_global_js = array();
        protected $_all_model = array();

        protected $_css = array();
        protected $_js = array();

        public function __construct(){
            parent::__construct();
            $this->_data['Gcss'] = $this->_global_css;
            $this->_data['Gjs'] = $this->_global_js;
            $this->_data['js'] = $this->_js;
            $this->_data['css'] = $this->_css;
            // $this->_data['model'] = $this->_all_model;
        }

        public function loadView($view){
            $this->load->view($view);
        }
    }