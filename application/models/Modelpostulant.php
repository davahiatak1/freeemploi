<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Modelpostulant extends CI_Model {
    
    

    protected $table = 'postulant';
    
    
            
    function __construct() {
        $this->load->model('modelutilisateur');
        
    }
    /**
     * Ajoute un utilisateur
     */
    public function ajouter_postulant($adresse,$numero,$tarif,$domaine,$competence,$diplome,$formattion,$cv, $iduser,$avatar) {

        // Ces données seront automatiquement échappées

        $this->db->set('adresse', $adresse);
        $this->db->set('telephone', $numero);
        $this->db->set('tarif', $tarif);
        $this->db->set('domaine', $domaine);
        $this->db->set('competence', $competence);
        $this->db->set('diplome', $diplome);
        $this->db->set('formation', $formattion);
        $this->db->set('cv', $cv);
        $this->db->set('iduser', $iduser);
        $this->db->set('avatar', $avatar);

        // Une fois que tous les champs ont bien été définis, on "insert" le tout
        return $this->db->insert($this->table);
    }
     public function get3LastAvatar(){
        $a= $this->db->select('avatar')
                ->from($this->table)
                ->order_by('iduser', 'desc')
                ->limit(3,0)
                ->get()
                ->result_array();

         return $a;
    }
    

    public function getIdLastUser(){

        $b;
        $a= $this->db->select('*')
                ->from($this->table)
                ->order_by('iduser', 'desc')
                ->limit(1,0)
                ->get()
                ->result_array();
       
         return $b;
    }

    public function search($domaine=null,$competence=null) {
//        $resultat = NuLL;
//        if ($data['domaine'] && $data['competence']) {
//            $resultat = $this->db->select('*')->from($this->table)->where('domaine', $data['domaine'])->where('competence', $data['competence'])->get()->result_array();
//        } elseif ($data['domaine']) {
//            $resultat = $this->db->select('*')->from($this->table)->where('domaine', $data['domaine'])->get()->result_array();
//        } elseif ($data['competence']) {
//            $resultat = $this->db->select('*')->from($this->table)->where('competence', $data['competence'])->get()->result_array();
//        }
//        $resultat = $this->db->select('*')->from($this->table)->where('domaine', $data)->get()->result_array();
//        print_r($domaine);
        $sql = "SELECT * FROM $this->table Where domaine LIKE ? ";
          return $this->db->query($sql, "%".$domaine."%")->result_array();
    }

    public function MAJ_postulant($id, $nom, $prenom, $psoeudo, $mdp, $mail, $adr, $number) {


        $this->db->set('nom', $nom);
        $this->db->set('prenom', $prenom);
        $this->db->set('pseudo', $psoeudo);
        $this->db->set('password', $mdp);
        $this->db->set('adresse', $adr);
        $this->db->set('datnaiss', '---');
        $this->db->set('autrescompetences', '');
        $this->db->set('email', $mail);
        $this->db->set('competenceprincipale', '');
        $this->db->set('telephone', $number);
        $this->db->where('id', $id);
        return $this->db->update($this->table);
    }

    public function login($number, $pwd) {
        return $this->db->select('*')->from($this->table)->where('telephone', $number)->where('password', $pwd)->get()->result_array();
    }

    public function liste_postulant() {
        return $this->db->select('*')->from($this->table)->order_by('idPostulant','desc')->get()->result_array();
    }

    public function voir_tout_postulant($id) {
        $sql = "SELECT * FROM $this->table Where idPostulant = ?";
        $postulants= $this->db->query($sql, array($id))->result_array();

        return $postulants;
    }

//    public function profil($is) {
//        return $this->db->select('*')->from($this->table)->where('telephone', $number)->where('password', $pwd)->get()->result_array();
//    }
}
