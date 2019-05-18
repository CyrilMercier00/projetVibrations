<?php

class M_moteur extends CI_Model {

    public function get_all_moteurs() {
        return $this->db->select('idMoteur,fonction')->get('moteur')->result();
    }
    
    
    public function get_moteur_by_id($idMoteur) {
        $condition = array (
            'idMachine' => $idMoteur,
        );
        
        return $this->db->select('idMoteur,fonction')->get_where('moteur',$condition)->result();
    }
    
    public function insert_moteur($prmDto) {
        $data = array(
            'valeur' => json_decode($prmDto['fonction']),
            'idMoteur' => json_decode($prmDto['puissance']),
            'freqMesure' => json_decode ($prmDto['freqmesure']),
            'dateNeuf' => json_decode ($prmDto['dateNeuf']),
        );

        return $this->db->insert('vibration', $data);
    }

       public function index_delete($prmIdMoteur) {
           return $this->db->delete('moteur', array ( 'idMoteur' => $prmIdMoteur)); 
       }
}