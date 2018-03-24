<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Modelabonnement extends CI_Model {

    protected $table = 'abonnement';

    /**
     * Ajoute un utilisateur
     */

    public function insert($a,$b,$c,$d,$e,$f,$g) {

        // Ces données seront automatiquement échappées

        $this->db->set('idModePaiement', $a);
        $this->db->set('iduser', $b);
        $this->db->set('montant', $c);
        $this->db->set('status', $d);
        $this->db->set('tx_reference', $e);
        $this->db->set('dateDeb', $f);
        $this->db->set('dateFin', $g);


        // Une fois que tous les champs ont bien été définis, on "insert" le tout
        return $this->db->insert($this->table);
    }
    public function return_lastIdAbonnement()
        {  
            $b=0;
            $a= $this->db->select('idAbonnement')
                ->from($this->table)
                ->order_by('idAbonnement', 'desc')
                ->limit(1,0)
                ->get()
                ->result_array();
           
            foreach ($a as $row) {
                $b=$row['idAbonnement'];
            }

            return $b;
        }

   

}
