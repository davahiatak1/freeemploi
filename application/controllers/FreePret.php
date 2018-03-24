<?php

class FreePret extends CI_Controller {
    public function __construct() {
        parent::__construct();
         
         $this->load->model('modelutilisateur');
         $this->load->model('modelentreprise');
         
         
    }

    public function index() {
//        $data = array();
        //get the posts data
//        $data['posts'] = $this->modelpostulant->liste_postulant();
        $_POST['entreprise'] = $this->modelentreprise->lister_entreprise();
        
        //$postulants = $_POST['postulant'];
        //$obj_user = array();
        //$i = 0;
        foreach ($_POST['entreprise'] as $key => $user_id) {
            $user_id['iduser']=$this->modelutilisateur->get_user($user_id['iduser']);
            //print_r($user_id);
            $postulants[]=$user_id;
        }
        
        $_POST['entreprise']=$postulants;
//        print_r($_POST['entreprise'] );
        //$_POST['posts'] = $this->modelpostulant->liste_postulant();
//        print_r($_POST);
//        if ($data) {
//            //$query = $this->modelpostulant->login($this->input->post('email'), $this->input->post('password'));
//            
//                $this->session->set_userdata('posts', $data);
////                $this->session->set_userdata('id', $row['id']);
////                $this->session->set_userdata('nom', $row['nom']);
////                $this->session->set_userdata('prenom', $row['prenom']);
//            
//        }
        
        $this->load->view('free_pret/home_1');
        $this->load->view('free_pret/inc/header');
        $this->load->view('free_pret/inc/navbar');
//        $this->load->view('inc/sideBar');
        $this->load->view('inc/footer');
    }
    public function inscription() {
        $this->load->view('free_lance/inc/header');
        $this->load->view('free_lance/inc/navbar');
        $this->load->view('free_lance/inscription');
//        $this->load->view('inc/sideBar');
        $this->load->view('inc/footer');
    }
    public function connexion() {
        $this->load->library('form_validation');
        $this->load->model('modelpostulant');
        $resultat = $this->modelpostulant->login($this->input->post('phone'), $this->input->post('pwd'));
        if ($resultat) {
            //$query = $this->modelpostulant->login($this->input->post('email'), $this->input->post('password'));
            foreach ($resultat as $row) {

                $this->session->set_userdata('id', $row['id']);
                $this->session->set_userdata('nom', $row['nom']);
                $this->session->set_userdata('prenom', $row['prenom']);
                $this->session->set_userdata('adresse', $row['adresse']);
                $this->session->set_userdata('telephone', $row['telephone']);
                $this->session->set_userdata('password', $row['password']);
                $this->session->set_userdata('pseudo', $row['pseudo']);
                $this->session->set_userdata('email', $row['email']);
                $this->session->set_userdata('datnaiss', $row['datnaiss']);
            }
             
            $this->monCompte();
        } else {

            //$this->load->view('index');
            echo "email ou mot de passe eurroné";
            $this->index();
        }
        
        
        
    }
    public function monCompte(){
        //si les ide,tifiants sont bon il sera rediriger sur mon compte
        $this->load->view('free_lance/inc/header');
        $this->load->view('free_lance/inc/navbar');
        $this->load->view('free_lance/mon_compte');
        $this->load->view('inc/sideBar');
        $this->load->view('inc/footer');
    }
    public function inscription_traitement(){
 	$this->load->model('modelpostulant');
 	$this->modelpostulant->ajouter_postulant($_POST['nom'], $_POST['prenom'], $_POST['psoeudo'], $_POST['mdp'], $_POST['mail'], $_POST['adr'], $_POST['number'], $_POST['mdp']);
 	$this->index();

 }
    public function inscription_cli() {
        $this->load->view('free_lance/inc/header');
        $this->load->view('free_lance/inc/navbar');
        $this->load->view('free_lance/inscription_cli');
        $this->load->view('inc/sideBar');
        $this->load->view('inc/footer');
    }
    public function profil() {
        $this->load->view('free_lance/inc/header');
        $this->load->view('free_lance/inc/navbar');
        $this->load->view('free_lance/user_profil');
        $this->load->view('inc/sideBar');
        $this->load->view('inc/footer');
    }
    public function update() {
        $this->load->view('free_lance/inc/header');
        $this->load->view('free_lance/inc/navbar');
        $this->load->view('free_lance/compte_update');
        $this->load->view('inc/sideBar');
        $this->load->view('inc/footer');
    }
    public function update_traitement() {
        $this->load->model('modelpostulant');
 	$this->modelpostulant->MAJ_postulant($this->session->userdata('id'),$_POST['nom'], $_POST['prenom'], $_POST['psoeudo'], $_POST['mdp'], $_POST['mail'], $_POST['adr'], $_POST['number'], $_POST['mdp']);
        $this->index();
    }
//    public function inscription_traitement() {
//        $this->load->view('free_lance/inc/header');
//        $this->load->view('free_lance/inc/navbar');
//        $this->load->view('free_lance/inscription');
//        $this->load->view('inc/sideBar');
//        $this->load->view('inc/footer');
//    }

}
