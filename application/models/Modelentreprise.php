<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Modelentreprise extends CI_Model {

    protected $table = 'entreprise';
    function __construct() {
        $this->load->model('modelutilisateur');
        
    }

    /**
     * Ajoute un utilisateur
     */
    public function ajouter_entreprise($nomEns,$numRef, $domaine1,$domaine2,$contact,$quartier,$ville,$pays,$iduser) {

        // Ces données seront automatiquement échappées

        $this->db->set('nomentreprise', $nomEns);
        $this->db->set('numeroreference', $numRef);
        $this->db->set('domaineprincipale', $domaine1);
        $this->db->set('domainesecondaire', $domaine2);
        $this->db->set('quartier', $quartier);
        $this->db->set('ville', $ville);
        $this->db->set('pays', $pays);
        //$this->db->set('pays', $data['pays']);
        $this->db->set('contact', $contact);
        $this->db->set('iduser', $iduser);

        // Une fois que tous les champs ont bien été définis, on "insert" le tout
        return $this->db->insert($this->table);
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

    public function lister_entreprise() {
        return $this->db->select('*')->from($this->table)->order_by('identreprise','desc')->get()->result_array();
    }

    public function voir_tout_postulant($id) {
        $sql = "SELECT * FROM $this->table Where idPostulant = ?";
        return $this->db->query($sql, array($id))->result_array();
    }

//    public function profil($is) {
//        return $this->db->select('*')->from($this->table)->where('telephone', $number)->where('password', $pwd)->get()->result_array();
//    }
}
