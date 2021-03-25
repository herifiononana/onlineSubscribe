<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class MY_Controller extends CI_Controller{
        protected $_data = array();
        protected $_global_css = array("materialize.css","iconfont/material-icons.css","fontawesome-free-5.8.2-web/css/all.min.css");
        protected $_global_js = array("jquery-3.3.1.js","materialize.min.js","admin.js");

        protected $_css = array();
        protected $_js = array();

        public function __construct(){
            parent::__construct();
            $this->_data['Gcss'] = $this->_global_css;
            $this->_data['Gjs'] = $this->_global_js;
            $this->_data['js'] = $this->_js;
            $this->_data['css'] = $this->_css;
        }

        public function loadPage($view){
            $this->load->view($view);
        }

        public function loadHeader()
        {
            $this->load->view("_template/header", $this->_data);
        }

        public function loadFooter()
        {
            $this->load->view("_template/footer", $this->_data);
        }

        public function loadPageComplet($view)
        {
            $this->loadHeader();
            $this->load->view($view,$this->_data);
            $this->loadFooter();
        }
    }