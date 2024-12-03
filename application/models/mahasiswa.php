<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        // Load database or other libraries if needed
    }

    public function getdatamahasiswa()
    {
        $query = $this->db->get('tbmahasiswa'); // Assuming 'mahasiswa' is the table name
        return $query->result(); // Returns an array of objects
    }

  public function getallnim()
  {
    $this->db->select('nim');
    $query = $this->db->get('tbmahasiswa');
    return $query->result();
  }


    public function insertdatamahasiswa($data)
    {
$this->db->insert('tbmahasiswa', $data);
    }


    public function getdatamahasiswadetail($nim)
    {
        $this->db->where('nim', $nim);
        $query = $this->db->get('tbmahasiswa');
        return $query->row();
    }

    public function getbynim($nim)
    {
        $this->db->where('nim', $nim);
        $query = $this->db->get('tbmahasiswa');
        return $query->row_array();
    }

    public function updatedatamahasiswa($nim, $data)
    {
$this->db->where('nim', $nim);
$this->db->update('tbmahasiswa', $data);
    }

    
    public function deletedatamahasiswa($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->delete('tbmahasiswa');
        
    }
}