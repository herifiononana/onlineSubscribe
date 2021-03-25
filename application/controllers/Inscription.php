<?php 
    class Inscription extends MY_Controller {
        protected $_data = array();
        protected $_css = array();
        protected $_js = array("inscription.js");
        protected $_model = array();

        public function __construct() {
            parent::__construct();
            $this->_data['js'] = $this->_js;
        }

        public function index()
        {
            $this->loadPageComplet('Inscription/inscription');

        }

    }