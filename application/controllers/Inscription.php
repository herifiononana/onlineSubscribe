<?php 
    class Inscription extends MY_Controller {
        protected $_data = array();
        protected $_css = array();
        protected $_js = array("inscription.js");
        protected $_model = array("inscription_Model");

        public function __construct() {
            parent::__construct();
            foreach ($this->_model as $model) {
                $this->load->model($model);
            }
            $this->_data['js'] = $this->_js;
        }

        public function index()
        {
            $this->loadPageComplet('Inscription/inscription');

        }

        public function inscriptionInsert() {
            if($_POST) {
                extract($_POST);
                $nom = isset($nom_candidat) ? $nom_candidat : null;
                $prenom = isset($nom_candidat) ? $nom_candidat : null;
                $genre = isset($genre) ? $genre : null;
                $ddn_candidat = isset($ddn_candidat) ? $ddn_candidat : null;
                $lieuNaiss_candidat = isset($lieuNaiss_candidat) ? $lieuNaiss_candidat : null;
                $adresse_candidat = isset($adresse_candidat) ? $adresse_candidat : null;
                $mail_candidat = isset($mail_candidat) ? $mail_candidat : null;
                $tel_candidat = isset($tel_candidat) ? $tel_candidat : null;
                $tel_candidat = isset($tel_candidat) ? $tel_candidat : null;
                $nationalite_candidat = isset($nationalite_candidat) ? $nationalite_candidat : null;
                $old_school = isset($old_school) ? $old_school : null;
                $serie_bac = isset($serie_bac) ? $serie_bac : null;
                $diplome = isset($diplome) ? $diplome : null;
                $photo = isset($photo) ? $photo : null;
                $cin = isset($cin) ? $cin : null;
                $loisir = isset($loisir_candidat) ? $loisir_candidat : null;
                

                $data = array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'ddn' => $ddn_candidat,
                    'sexe' => $genre,
                    'adresse' => $adresse_candidat,
                    'ecoleAnterieur' => $old_school,
                    'mail' => $mail_candidat,
                    'serieBacc' => $serie_bac,
                    'nationalite' => $nationalite_candidat,
                    'diplome' => $diplome,
                    'photo' => $photo,
                    'cin' => $cin,
                    'loisir' => $loisir,

                );
                $this->inscription_Model->save($data);
                $this->loadPageComplet('Inscription/inscription');
            }
        }

    }