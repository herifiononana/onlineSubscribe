<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    protected $_data = array();
    protected $_js = array("admin");
    private $_model = array("banque_Model", "mobile_Model");

    public function __construct()
    {
        parent::__construct();
        $this->_data['js'] = $this->_js;
        foreach ($this->_model as $model) {
            $this->load->model($model);
        }
    }

	public function index()
	{
        $this->load->view('admin/banque', $this->_data);
    }

    public function insert_banque()
    {
        if($_POST){
            extract($_POST);
            $banque = isset($nom) ? $nom : null;
            $RIB = isset($RIB) ? $RIB : null;
            $numero = isset($compte) ? $compte : null;
            $data = array(
                'RIB' => $RIB,
                'nom' => $banque,
                'compte' => $numero
            );
            $this->banque_Model->save($data);
        }
    }

    public function insert_mobile()
    {
        if($_POST){
            extract($_POST);
            $operateur = isset($operateur) ? $operateur : null;
            $numero = isset($numero) ? $numero : null;
            $reference = isset($reference) ? $reference : null;
            $data = array(
                'operateur' => $operateur,
                'numero' => $numero,
                'reference' => $reference
            );
            $this->mobile_Model->save($data);
        }
    }

}
