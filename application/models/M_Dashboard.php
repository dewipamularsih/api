<?php
class M_Dashboard extends CI_Model {
    public function getCountpelanggan()
    {
        try {
            return $this->db->count_all('pelanggan');
        } catch (Exception $e) {
            return 0; 
        }
    }

    
    public function getCountvilla()
    {
        try {
            return $this->db->count_all('villa');
        } catch (Exception $e) {
            return 0; 
        }
    }

    public function getCountdetail()
    {
        try {
            return $this->db->count_all('detail');
        } catch (Exception $e) {
            return 0; 
    }
}
}
?>
