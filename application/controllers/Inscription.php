<?php 
    class Inscription extends MY_Controller {
        protected $_data = array();
        protected $_css = array();
        protected $_js = array();
        protected $_model = array();

        public function __construct() {
            parent::__construct();

        }

        public function index()
        {
            $this->loadPageComplet('Inscription/inscription');

        }

    }