<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Modelutilisateur extends CI_Model {

    protected $table = 'utilisateur';

    /**
     * Ajoute un utilisateur
     */
    //$data=array();
    public function ajouter_utilisateur($nom,$prenom,$pseudo,$password,$email,$typecompte,$avatar) {

        // Ces données seront automatiquement échappées

        $this->db->set('nomuser',  $nom);
        $this->db->set('prenomuser',  $prenom);
        $this->db->set('pseudo',  $pseudo);
        $this->db->set('motdepasse',  $password);
        $this->db->set('email', $email);
        $this->db->set('idtypecompte', $typecompte);
        $this->db->set('avatar', $avatar);

        // Une fois que tous les champs ont bien été définis, on "insert" le tout
        return $this->db->insert($this->table);
    }
    public function return_lastCodeUser(){

        $b;
        $a= $this->db->select('*')
                ->from($this->table)
                ->order_by('iduser', 'desc')
                ->limit(1,0)
                ->get()
                ->result_array();
       
         foreach ($a as $row) {
             # code...
            $b=$row['iduser'];
         }
         return $b;
    }
    

    public function getIdLastUser(){
        $a= $this->db->select('*')
                ->from($this->table)
                ->order_by('iduser', 'desc')
                ->limit(1,0)
                ->get()
                ->result_array();

         return $a;
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

    public function liste_user() {
        return $this->db->select('*')->from($this->table)->get()->result_array();
    }

    public function voir_tout_user($id) {
        foreach ($id as $iduser){
            
            $sql = "SELECT * FROM $this->table Where iduser = ?";
        $freelance[] = $this->db->query($sql, array($iduser))->result_array();
        return $freelance;
        
        }
        print_r($freelance);
    }

    public function get_user($id) {   
        $sql = "SELECT * FROM $this->table Where iduser = ?";
        return $this->db->query($sql, array($id))->result_array();
    }
    
     public function login($pseudo, $pwd) {
        return $this->db->select('*')->from($this->table)->where('pseudo', $pseudo)->where('motdepasse', $pwd)->get()->result_array();
    }
//    public function profil($is) {
//        return $this->db->select('*')->from($this->table)->where('telephone', $number)->where('password', $pwd)->get()->result_array();
//    }
}
