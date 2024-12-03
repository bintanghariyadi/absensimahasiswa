<?php
defined('BASEPATH') or exit('No direct script access allowed');

class absensi extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        // Load database or other libraries if needed
    }

    public function getdataabsensi()
    {
        $query = $this->db->get('tbabsensi'); // Assuming 'mahasiswa' is the table name
        return $query->result(); // Returns an array of objects
    }



    public function insertdataabsensi($data)
    {
$this->db->insert('tbabsensi', $data);
    }


    public function getdataabsensidetail($idabsensi)
    {
        $this->db->where('idabsensi', $idabsensi);
        $query = $this->db->get('tbabsensi');
        return $query->row();
    }


    public function updatedataabsensi($idabsensi, $data)
    {
$this->db->where('idabsensi', $idabsensi);
$this->db->update('tbabsensi', $data);
    }

    
    public function deletedataabsensi($idabsensi)
    {
        $this->db->where('idabsensi', $idabsensi);
        $this->db->delete('tbabsensi');
        
    }
}