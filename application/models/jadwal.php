<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jadwal extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        // Load database or other libraries if needed
    }

    public function getdatajadwal()
    {
        $query = $this->db->get('tbjadwal'); // Assuming 'mahasiswa' is the table name
        return $query->result(); // Returns an array of objects
    }

  
    public function insertdatajadwal($data)
    {
$this->db->insert('tbjadwal', $data);
    }



    public function getdatajadwaldetail($idjadwal)
    {
        $this->db->where('idjadwal', $idjadwal);
        $query = $this->db->get('tbjadwal');
        return $query->row();
    }

    public function getbykelas($kelas)
    {
        $this->db->where('kelas', $kelas);
        $query = $this->db->get('tbjadwal');
        return $query->row_array();
    }

    public function updatedatajadwal($idjadwal, $data)
    {
$this->db->where('idjadwal', $idjadwal);
$this->db->update('tbjadwal', $data);
    }

    
    public function deletedatajadwal($idjadwal)
    {
        $this->db->where('idjadwal', $idjadwal);
        $this->db->delete('tbjadwal');
        
    }
}